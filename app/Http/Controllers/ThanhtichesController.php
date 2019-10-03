<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\thanhtich;
use Illuminate\Http\Request;
use Exception;

class ThanhtichesController extends Controller
{

    /**
     * Display a listing of the thanhtiches.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $thanhtiches = thanhtich::paginate(25);

        return view('thanhtiches.index', compact('thanhtiches'));
    }

    /**
     * Show the form for creating a new thanhtich.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('thanhtiches.create');
    }

    /**
     * Store a new thanhtich in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            thanhtich::create($data);

            return redirect()->route('thanhtiches.thanhtich.index')
                ->with('success_message', 'Thanhtich was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified thanhtich.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $thanhtich = thanhtich::findOrFail($id);

        return view('thanhtiches.show', compact('thanhtich'));
    }

    /**
     * Show the form for editing the specified thanhtich.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $thanhtich = thanhtich::findOrFail($id);
        

        return view('thanhtiches.edit', compact('thanhtich'));
    }

    /**
     * Update the specified thanhtich in the storage.
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
            
            $thanhtich = thanhtich::findOrFail($id);
            $thanhtich->update($data);

            return redirect()->route('thanhtiches.thanhtich.index')
                ->with('success_message', 'Thanhtich was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified thanhtich from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $thanhtich = thanhtich::findOrFail($id);
            $thanhtich->delete();

            return redirect()->route('thanhtiches.thanhtich.index')
                ->with('success_message', 'Thanhtich was successfully deleted.');
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
                'TEN_TT' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
