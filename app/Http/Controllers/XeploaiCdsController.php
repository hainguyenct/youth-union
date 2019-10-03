<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\xeploai_cd;
use Illuminate\Http\Request;
use Exception;

class XeploaiCdsController extends Controller
{

    /**
     * Display a listing of the xeploai cds.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $xeploaiCds = xeploai_cd::paginate(25);

        return view('xeploai_cds.index', compact('xeploaiCds'));
    }

    /**
     * Show the form for creating a new xeploai cd.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('xeploai_cds.create');
    }

    /**
     * Store a new xeploai cd in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            xeploai_cd::create($data);

            return redirect()->route('xeploai_cds.xeploai_cd.index')
                ->with('success_message', 'Xeploai Cd was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified xeploai cd.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $xeploaiCd = xeploai_cd::findOrFail($id);

        return view('xeploai_cds.show', compact('xeploaiCd'));
    }

    /**
     * Show the form for editing the specified xeploai cd.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $xeploaiCd = xeploai_cd::findOrFail($id);
        

        return view('xeploai_cds.edit', compact('xeploaiCd'));
    }

    /**
     * Update the specified xeploai cd in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $xeploaiCd = xeploai_cd::findOrFail($id);
            $xeploaiCd->update($data);

            return redirect()->route('xeploai_cds.xeploai_cd.index')
                ->with('success_message', 'Xeploai Cd was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified xeploai cd from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $xeploaiCd = xeploai_cd::findOrFail($id);
            $xeploaiCd->delete();

            return redirect()->route('xeploai_cds.xeploai_cd.index')
                ->with('success_message', 'Xeploai Cd was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'TEN_PH' => 'nullable|string|min:0|max:50',
            'DIEMDAT_CD' => 'nullable|numeric|min:-2147483648|max:2147483647', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
