<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\chucvu_dv;
use Illuminate\Http\Request;
use Exception;

class ChucvuDvsController extends Controller
{

    /**
     * Display a listing of the chucvu dvs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $chucvuDvs = chucvu_dv::paginate(25);

        return view('chucvu_dvs.index', compact('chucvuDvs'));
    }

    /**
     * Show the form for creating a new chucvu dv.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('chucvu_dvs.create');
    }

    /**
     * Store a new chucvu dv in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            chucvu_dv::create($data);

            return redirect()->route('chucvu_dvs.chucvu_dv.index')
                ->with('success_message', 'Chucvu Dv was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified chucvu dv.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $chucvuDv = chucvu_dv::findOrFail($id);

        return view('chucvu_dvs.show', compact('chucvuDv'));
    }

    /**
     * Show the form for editing the specified chucvu dv.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $chucvuDv = chucvu_dv::findOrFail($id);
        

        return view('chucvu_dvs.edit', compact('chucvuDv'));
    }

    /**
     * Update the specified chucvu dv in the storage.
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
            
            $chucvuDv = chucvu_dv::findOrFail($id);
            $chucvuDv->update($data);

            return redirect()->route('chucvu_dvs.chucvu_dv.index')
                ->with('success_message', 'Chucvu Dv was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified chucvu dv from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $chucvuDv = chucvu_dv::findOrFail($id);
            $chucvuDv->delete();

            return redirect()->route('chucvu_dvs.chucvu_dv.index')
                ->with('success_message', 'Chucvu Dv was successfully deleted.');
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
                'TEN_CHUCVU' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
