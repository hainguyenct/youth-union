<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Namhoc;
use App\Models\thangnam;
use Illuminate\Http\Request;
use Exception;

class ThangnamsController extends Controller
{

    /**
     * Display a listing of the thangnams.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $thangnams = thangnam::with('namhoc')->paginate(25);

        return view('thangnams.index', compact('thangnams'));
    }

    /**
     * Show the form for creating a new thangnam.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $Namhocs = Namhoc::pluck('namhoc','id')->all();
        
        return view('thangnams.create', compact('Namhocs'));
    }

    /**
     * Store a new thangnam in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            thangnam::create($data);

            return redirect()->route('thangnams.thangnam.index')
                ->with('success_message', 'Thangnam was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified thangnam.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $thangnam = thangnam::with('namhoc')->findOrFail($id);

        return view('thangnams.show', compact('thangnam'));
    }

    /**
     * Show the form for editing the specified thangnam.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $thangnam = thangnam::findOrFail($id);
        $Namhocs = Namhoc::pluck('namhoc','id')->all();

        return view('thangnams.edit', compact('thangnam','Namhocs'));
    }

    /**
     * Update the specified thangnam in the storage.
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
            
            $thangnam = thangnam::findOrFail($id);
            $thangnam->update($data);

            return redirect()->route('thangnams.thangnam.index')
                ->with('success_message', 'Thangnam was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified thangnam from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $thangnam = thangnam::findOrFail($id);
            $thangnam->delete();

            return redirect()->route('thangnams.thangnam.index')
                ->with('success_message', 'Thangnam was successfully deleted.');
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
                'thangnam' => 'required|string|min:1|max:30',
            'namhoc_id' => 'required',
            'sotien' => 'nullable|numeric|min:-9|max:9', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
