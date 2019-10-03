<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\mauphieu;
use App\Models\noidung_pdg;
use App\Models\chitiet_mauphieu;
use Illuminate\Http\Request;
use Exception;

class ChitietMauphieusController extends Controller
{

    /**
     * Display a listing of the chitiet mauphieus.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $chitietMauphieus = chitiet_mauphieu::with('mauphieu','noidungpdg')->paginate(25);

        return view('chitiet_mauphieus.index', compact('chitietMauphieus'));
    }

    /**
     * Show the form for creating a new chitiet mauphieu.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $Mauphieus = mauphieu::pluck('TEN_MP','ID')->all();
        $NoidungPdgs = noidung_pdg::pluck('TEN_NDPDG','ID')->all();
        
        return view('chitiet_mauphieus.create', compact('Mauphieus','NoidungPdgs'));
    }

    /**
     * Store a new chitiet mauphieu in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);
            
            chitiet_mauphieu::create($data);

            return redirect()->route('chitiet_mauphieus.chitiet_mauphieu.index')
            ->with('success_message', 'Chitiet Mauphieu was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
            ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified chitiet mauphieu.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $chitietMauphieu = chitiet_mauphieu::with('mauphieu','noidungpdg')->findOrFail($id);

        return view('chitiet_mauphieus.show', compact('chitietMauphieu'));
    }

    /**
     * Show the form for editing the specified chitiet mauphieu.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $chitietMauphieu = chitiet_mauphieu::findOrFail($id);
        $Mauphieus = mauphieu::pluck('TEN_MP','ID')->all();
        $NoidungPdgs = noidung_pdg::pluck('TEN_NDPDG','ID')->all();

        return view('chitiet_mauphieus.edit', compact('chitietMauphieu','Mauphieus','NoidungPdgs'));
    }

    /**
     * Update the specified chitiet mauphieu in the storage.
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
            
            $chitietMauphieu = chitiet_mauphieu::findOrFail($id);
            $chitietMauphieu->update($data);

            return redirect()->route('chitiet_mauphieus.chitiet_mauphieu.index')
            ->with('success_message', 'Chitiet Mauphieu was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
            ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified chitiet mauphieu from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $chitietMauphieu = chitiet_mauphieu::findOrFail($id);
            $chitietMauphieu->delete();

            return redirect()->route('chitiet_mauphieus.chitiet_mauphieu.index')
            ->with('success_message', 'Chitiet Mauphieu was successfully deleted.');
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
            'MAUPHIEU_ID' => 'required',
            'NOIDUNG_PDG_ID' => 'required',
            'THUTU_NOIDUNG' => 'nullable|numeric|min:-9|max:9', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
