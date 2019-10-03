<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\namhoc;
use Illuminate\Http\Request;
use Exception;

class NamhocsController extends Controller
{

    /**
     * Display a listing of the namhocs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $namhocs = namhoc::paginate(25);

        return view('namhocs.index', compact('namhocs'));
    }

    /**
     * Show the form for creating a new namhoc.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('namhocs.create');
    }

    /**
     * Store a new namhoc in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            namhoc::create($data);

            return redirect()->route('namhocs.namhoc.index')
                ->with('success_message', 'Namhoc was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified namhoc.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $namhoc = namhoc::findOrFail($id);

        return view('namhocs.show', compact('namhoc'));
    }

    /**
     * Show the form for editing the specified namhoc.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $namhoc = namhoc::findOrFail($id);
        

        return view('namhocs.edit', compact('namhoc'));
    }

    /**
     * Update the specified namhoc in the storage.
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
            
            $namhoc = namhoc::findOrFail($id);
            $namhoc->update($data);

            return redirect()->route('namhocs.namhoc.index')
                ->with('success_message', 'Namhoc was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified namhoc from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $namhoc = namhoc::findOrFail($id);
            $namhoc->delete();

            return redirect()->route('namhocs.namhoc.index')
                ->with('success_message', 'Namhoc was successfully deleted.');
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
                'namhoc' => 'required|string|min:1|max:30', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
