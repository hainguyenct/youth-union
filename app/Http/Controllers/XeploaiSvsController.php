<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\xeploai_sv;
use Illuminate\Http\Request;
use Exception;

class XeploaiSvsController extends Controller
{

    /**
     * Display a listing of the xeploai svs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $xeploaiSvs = xeploai_sv::paginate(25);

        return view('xeploai_svs.index', compact('xeploaiSvs'));
    }

    /**
     * Show the form for creating a new xeploai sv.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('xeploai_svs.create');
    }

    /**
     * Store a new xeploai sv in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            xeploai_sv::create($data);

            return redirect()->route('xeploai_svs.xeploai_sv.index')
                ->with('success_message', 'Xeploai Sv was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified xeploai sv.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $xeploaiSv = xeploai_sv::findOrFail($id);

        return view('xeploai_svs.show', compact('xeploaiSv'));
    }

    /**
     * Show the form for editing the specified xeploai sv.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $xeploaiSv = xeploai_sv::findOrFail($id);
        

        return view('xeploai_svs.edit', compact('xeploaiSv'));
    }

    /**
     * Update the specified xeploai sv in the storage.
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
            
            $xeploaiSv = xeploai_sv::findOrFail($id);
            $xeploaiSv->update($data);

            return redirect()->route('xeploai_svs.xeploai_sv.index')
                ->with('success_message', 'Xeploai Sv was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified xeploai sv from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $xeploaiSv = xeploai_sv::findOrFail($id);
            $xeploaiSv->delete();

            return redirect()->route('xeploai_svs.xeploai_sv.index')
                ->with('success_message', 'Xeploai Sv was successfully deleted.');
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
                'TEN_XLSV' => 'nullable|string|min:0|max:50',
            'DIEMDAT_SV' => 'nullable|numeric|min:-2147483648|max:2147483647', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
