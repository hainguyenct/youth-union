<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\dantoc;
use Illuminate\Http\Request;
use Exception;

class DantocsController extends Controller
{

    /**
     * Display a listing of the dantocs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $dantocs = dantoc::paginate(25);

        return view('dantocs.index', compact('dantocs'));
    }

    /**
     * Show the form for creating a new dantoc.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('dantocs.create');
    }

    /**
     * Store a new dantoc in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            dantoc::create($data);

            return redirect()->route('dantocs.dantoc.index')
                ->with('success_message', 'Dantoc was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified dantoc.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $dantoc = dantoc::findOrFail($id);

        return view('dantocs.show', compact('dantoc'));
    }

    /**
     * Show the form for editing the specified dantoc.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $dantoc = dantoc::findOrFail($id);
        

        return view('dantocs.edit', compact('dantoc'));
    }

    /**
     * Update the specified dantoc in the storage.
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
            
            $dantoc = dantoc::findOrFail($id);
            $dantoc->update($data);

            return redirect()->route('dantocs.dantoc.index')
                ->with('success_message', 'Dantoc was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified dantoc from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $dantoc = dantoc::findOrFail($id);
            $dantoc->delete();

            return redirect()->route('dantocs.dantoc.index')
                ->with('success_message', 'Dantoc was successfully deleted.');
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
                'TEN_DT' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
