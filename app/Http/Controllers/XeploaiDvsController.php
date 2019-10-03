<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\xeploai_dv;
use Illuminate\Http\Request;
use Exception;

class XeploaiDvsController extends Controller
{

    /**
     * Display a listing of the xeploai dvs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $xeploaiDvs = xeploai_dv::paginate(25);

        return view('xeploai_dvs.index', compact('xeploaiDvs'));
    }

    /**
     * Show the form for creating a new xeploai dv.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('xeploai_dvs.create');
    }

    /**
     * Store a new xeploai dv in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            xeploai_dv::create($data);

            return redirect()->route('xeploai_dvs.xeploai_dv.index')
                ->with('success_message', 'Xeploai Dv was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified xeploai dv.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $xeploaiDv = xeploai_dv::findOrFail($id);

        return view('xeploai_dvs.show', compact('xeploaiDv'));
    }

    /**
     * Show the form for editing the specified xeploai dv.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $xeploaiDv = xeploai_dv::findOrFail($id);
        

        return view('xeploai_dvs.edit', compact('xeploaiDv'));
    }

    /**
     * Update the specified xeploai dv in the storage.
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
            
            $xeploaiDv = xeploai_dv::findOrFail($id);
            $xeploaiDv->update($data);

            return redirect()->route('xeploai_dvs.xeploai_dv.index')
                ->with('success_message', 'Xeploai Dv was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified xeploai dv from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $xeploaiDv = xeploai_dv::findOrFail($id);
            $xeploaiDv->delete();

            return redirect()->route('xeploai_dvs.xeploai_dv.index')
                ->with('success_message', 'Xeploai Dv was successfully deleted.');
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
                'TEN_XLDV' => 'nullable|string|min:0|max:50',
            'DIEMDAT_DV' => 'nullable|numeric|min:-2147483648|max:2147483647', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
