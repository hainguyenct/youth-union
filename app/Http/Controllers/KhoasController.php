<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\khoa;
use Illuminate\Http\Request;
use Exception;

class KhoasController extends Controller
{

    /**
     * Display a listing of the khoas.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $khoas = khoa::paginate(25);

        return view('khoas.index', compact('khoas'));
    }

    /**
     * Show the form for creating a new khoa.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('khoas.create');
    }

    /**
     * Store a new khoa in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            khoa::create($data);

            return redirect()->route('khoas.khoa.index')
                ->with('success_message', 'Khoa was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified khoa.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $khoa = khoa::findOrFail($id);

        return view('khoas.show', compact('khoa'));
    }

    /**
     * Show the form for editing the specified khoa.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $khoa = khoa::findOrFail($id);
        

        return view('khoas.edit', compact('khoa'));
    }

    /**
     * Update the specified khoa in the storage.
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
            
            $khoa = khoa::findOrFail($id);
            $khoa->update($data);

            return redirect()->route('khoas.khoa.index')
                ->with('success_message', 'Khoa was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified khoa from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $khoa = khoa::findOrFail($id);
            $khoa->delete();

            return redirect()->route('khoas.khoa.index')
                ->with('success_message', 'Khoa was successfully deleted.');
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
                'TEN_KHOA' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
