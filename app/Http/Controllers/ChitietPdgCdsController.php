<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\noidung_pdg;
use App\Models\phieudanhgia_chidoan;
use App\Models\chitiet_pdg_cd;
use Illuminate\Http\Request;
use Exception;

class ChitietPdgCdsController extends Controller
{

    /**
     * Display a listing of the chitiet pdg cds.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $chitietPdgCds = chitiet_pdg_cd::with('phieudanhgiachidoan','noidungpdg')->paginate(25);

        return view('chitiet_pdg_cds.index', compact('chitietPdgCds'));
    }

    /**
     * Show the form for creating a new chitiet pdg cd.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $PhieudanhgiaChidoans = phieudanhgia_chidoan::pluck('TEN_PDGCD','ID')->all();
$NoidungPdgs = noidung_pdg::pluck('TEN_NDPDG','ID')->all();
        
        return view('chitiet_pdg_cds.create', compact('PhieudanhgiaChidoans','NoidungPdgs'));
    }

    /**
     * Store a new chitiet pdg cd in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            chitiet_pdg_cd::create($data);

            return redirect()->route('chitiet_pdg_cds.chitiet_pdg_cd.index')
                ->with('success_message', 'Chitiet Pdg Cd was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified chitiet pdg cd.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $chitietPdgCd = chitiet_pdg_cd::with('phieudanhgiachidoan','noidungpdg')->findOrFail($id);

        return view('chitiet_pdg_cds.show', compact('chitietPdgCd'));
    }

    /**
     * Show the form for editing the specified chitiet pdg cd.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $chitietPdgCd = chitiet_pdg_cd::findOrFail($id);
        $PhieudanhgiaChidoans = phieudanhgia_chidoan::pluck('TEN_PDGCD','ID')->all();
$NoidungPdgs = noidung_pdg::pluck('TEN_NDPDG','ID')->all();

        return view('chitiet_pdg_cds.edit', compact('chitietPdgCd','PhieudanhgiaChidoans','NoidungPdgs'));
    }

    /**
     * Update the specified chitiet pdg cd in the storage.
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
            
            $chitietPdgCd = chitiet_pdg_cd::findOrFail($id);
            $chitietPdgCd->update($data);

            return redirect()->route('chitiet_pdg_cds.chitiet_pdg_cd.index')
                ->with('success_message', 'Chitiet Pdg Cd was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified chitiet pdg cd from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $chitietPdgCd = chitiet_pdg_cd::findOrFail($id);
            $chitietPdgCd->delete();

            return redirect()->route('chitiet_pdg_cds.chitiet_pdg_cd.index')
                ->with('success_message', 'Chitiet Pdg Cd was successfully deleted.');
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
                'PHIEUDANHGIA_CHIDOAN_ID' => 'required',
            'NOIDUNG_PDG_ID' => 'required',
            'DIEM_DUYET_PDGCD' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'DIEM_CD_TUDANHGIA' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'GHICHU_PDGCD' => 'nullable|string|min:0|max:200', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
