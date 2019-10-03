<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\xeploai_dk;
use Illuminate\Http\Request;
use Exception;

class XeploaiDksController extends Controller
{

    /**
     * Display a listing of the xeploai dks.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $xeploaiDks = xeploai_dk::paginate(25);

        return view('xeploai_dks.index', compact('xeploaiDks'));
    }

    /**
     * Show the form for creating a new xeploai dk.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('xeploai_dks.create');
    }

    /**
     * Store a new xeploai dk in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            xeploai_dk::create($data);

            return redirect()->route('xeploai_dks.xeploai_dk.index')
                ->with('success_message', 'Xeploai Dk was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified xeploai dk.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $xeploaiDk = xeploai_dk::findOrFail($id);

        return view('xeploai_dks.show', compact('xeploaiDk'));
    }

    /**
     * Show the form for editing the specified xeploai dk.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $xeploaiDk = xeploai_dk::findOrFail($id);
        

        return view('xeploai_dks.edit', compact('xeploaiDk'));
    }

    /**
     * Update the specified xeploai dk in the storage.
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
            
            $xeploaiDk = xeploai_dk::findOrFail($id);
            $xeploaiDk->update($data);

            return redirect()->route('xeploai_dks.xeploai_dk.index')
                ->with('success_message', 'Xeploai Dk was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified xeploai dk from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $xeploaiDk = xeploai_dk::findOrFail($id);
            $xeploaiDk->delete();

            return redirect()->route('xeploai_dks.xeploai_dk.index')
                ->with('success_message', 'Xeploai Dk was successfully deleted.');
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
                'TEN_XLDK' => 'nullable|string|min:0|max:50',
            'DIEMDAT_DK' => 'nullable|numeric|min:-2147483648|max:2147483647', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
