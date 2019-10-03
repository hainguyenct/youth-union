<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\kieu_dulieu;
use Illuminate\Http\Request;
use Exception;

class KieuDulieusController extends Controller
{

    /**
     * Display a listing of the kieu dulieus.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $kieuDulieus = kieu_dulieu::paginate(25);

        return view('kieu_dulieus.index', compact('kieuDulieus'));
    }

    /**
     * Show the form for creating a new kieu dulieu.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('kieu_dulieus.create');
    }

    /**
     * Store a new kieu dulieu in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            kieu_dulieu::create($data);

            return redirect()->route('kieu_dulieus.kieu_dulieu.index')
                ->with('success_message', 'Kieu Dulieu was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified kieu dulieu.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $kieuDulieu = kieu_dulieu::findOrFail($id);

        return view('kieu_dulieus.show', compact('kieuDulieu'));
    }

    /**
     * Show the form for editing the specified kieu dulieu.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $kieuDulieu = kieu_dulieu::findOrFail($id);
        

        return view('kieu_dulieus.edit', compact('kieuDulieu'));
    }

    /**
     * Update the specified kieu dulieu in the storage.
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
            
            $kieuDulieu = kieu_dulieu::findOrFail($id);
            $kieuDulieu->update($data);

            return redirect()->route('kieu_dulieus.kieu_dulieu.index')
                ->with('success_message', 'Kieu Dulieu was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified kieu dulieu from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $kieuDulieu = kieu_dulieu::findOrFail($id);
            $kieuDulieu->delete();

            return redirect()->route('kieu_dulieus.kieu_dulieu.index')
                ->with('success_message', 'Kieu Dulieu was successfully deleted.');
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
                'ten_kieu_dulieu' => 'required|string|min:1|max:100', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
