<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Namhoc;
use App\Models\hocky;
use Illuminate\Http\Request;
use Exception;

class HockiesController extends Controller
{

    /**
     * Display a listing of the hockies.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $hockies = hocky::with('namhoc')->paginate(25);

        return view('hockies.index', compact('hockies'));
    }

    /**
     * Show the form for creating a new hocky.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $Namhocs = Namhoc::pluck('TEN_NH','ID')->all();
        
        return view('hockies.create', compact('Namhocs'));
    }

    /**
     * Store a new hocky in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            hocky::create($data);

            return redirect()->route('hockies.hocky.index')
                ->with('success_message', 'Hocky was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified hocky.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $hocky = hocky::with('namhoc')->findOrFail($id);

        return view('hockies.show', compact('hocky'));
    }

    /**
     * Show the form for editing the specified hocky.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $hocky = hocky::findOrFail($id);
        $Namhocs = Namhoc::pluck('TEN_NH','ID')->all();

        return view('hockies.edit', compact('hocky','Namhocs'));
    }

    /**
     * Update the specified hocky in the storage.
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
            
            $hocky = hocky::findOrFail($id);
            $hocky->update($data);

            return redirect()->route('hockies.hocky.index')
                ->with('success_message', 'Hocky was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified hocky from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $hocky = hocky::findOrFail($id);
            $hocky->delete();

            return redirect()->route('hockies.hocky.index')
                ->with('success_message', 'Hocky was successfully deleted.');
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
                'NAMHOC_ID' => 'required',
            'TEN_HK' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
