<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\dv_ketnap;
use Illuminate\Http\Request;
use Exception;

class DvKetnapsController extends Controller
{

    /**
     * Display a listing of the dv ketnaps.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $dvKetnaps = dv_ketnap::paginate(25);

        return view('dv_ketnaps.index', compact('dvKetnaps'));
    }

    /**
     * Show the form for creating a new dv ketnap.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('dv_ketnaps.create');
    }

    /**
     * Store a new dv ketnap in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            dv_ketnap::create($data);

            return redirect()->route('dv_ketnaps.dv_ketnap.index')
                ->with('success_message', 'Dv Ketnap was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified dv ketnap.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $dvKetnap = dv_ketnap::findOrFail($id);

        return view('dv_ketnaps.show', compact('dvKetnap'));
    }

    /**
     * Show the form for editing the specified dv ketnap.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $dvKetnap = dv_ketnap::findOrFail($id);
        

        return view('dv_ketnaps.edit', compact('dvKetnap'));
    }

    /**
     * Update the specified dv ketnap in the storage.
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
            
            $dvKetnap = dv_ketnap::findOrFail($id);
            $dvKetnap->update($data);

            return redirect()->route('dv_ketnaps.dv_ketnap.index')
                ->with('success_message', 'Dv Ketnap was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified dv ketnap from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $dvKetnap = dv_ketnap::findOrFail($id);
            $dvKetnap->delete();

            return redirect()->route('dv_ketnaps.dv_ketnap.index')
                ->with('success_message', 'Dv Ketnap was successfully deleted.');
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
                'NGAYKETNAP' => 'nullable|date_format:j/n/Y g:i A', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
