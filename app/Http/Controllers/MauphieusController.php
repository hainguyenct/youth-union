<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\mauphieu;
use Illuminate\Http\Request;
use Exception;

class MauphieusController extends Controller
{

    /**
     * Display a listing of the mauphieus.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $mauphieus = mauphieu::paginate(25);

        return view('mauphieus.index', compact('mauphieus'));
    }

    /**
     * Show the form for creating a new mauphieu.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('mauphieus.create');
    }

    /**
     * Store a new mauphieu in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            mauphieu::create($data);

            return redirect()->route('mauphieus.mauphieu.index')
                ->with('success_message', 'Mauphieu was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified mauphieu.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $mauphieu = mauphieu::findOrFail($id);

        return view('mauphieus.show', compact('mauphieu'));
    }

    /**
     * Show the form for editing the specified mauphieu.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $mauphieu = mauphieu::findOrFail($id);
        

        return view('mauphieus.edit', compact('mauphieu'));
    }

    /**
     * Update the specified mauphieu in the storage.
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
            
            $mauphieu = mauphieu::findOrFail($id);
            $mauphieu->update($data);

            return redirect()->route('mauphieus.mauphieu.index')
                ->with('success_message', 'Mauphieu was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified mauphieu from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $mauphieu = mauphieu::findOrFail($id);
            $mauphieu->delete();

            return redirect()->route('mauphieus.mauphieu.index')
                ->with('success_message', 'Mauphieu was successfully deleted.');
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
                'TEN_MP' => 'nullable|string|min:0|max:100',
            'NGAYTAO_MP' => 'nullable|string|min:0',
            'NGAYCAONHAT_MP' => 'nullable|string|min:0', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
