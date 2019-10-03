<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\noidung_pdg;
use App\Models\phieudanhgia_sinhvien;
use App\Models\chitiet_pdg_sv;
use Illuminate\Http\Request;
use Exception;

class ChitietPdgSvsController extends Controller
{

    /**
     * Display a listing of the chitiet pdg svs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $chitietPdgSvs = chitiet_pdg_sv::with('phieudanhgiasinhvien','noidungpdg')->paginate(25);

        return view('chitiet_pdg_svs.index', compact('chitietPdgSvs'));
    }

    /**
     * Show the form for creating a new chitiet pdg sv.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $PhieudanhgiaSinhviens = PhieudanhgiaSinhvien::pluck('TEN_PDGSV','ID')->all();
        $NoidungPdgs = noidung_pdg::pluck('TEN_NDPDG','ID')->all();
        
        return view('chitiet_pdg_svs.create', compact('PhieudanhgiaSinhviens','NoidungPdgs'));
    }

    /**
     * Store a new chitiet pdg sv in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);
            
            chitiet_pdg_sv::create($data);

            return redirect()->route('chitiet_pdg_svs.chitiet_pdg_sv.index')
            ->with('success_message', 'Chitiet Pdg Sv was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
            ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified chitiet pdg sv.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $chitietPdgSv = chitiet_pdg_sv::with('phieudanhgiasinhvien','noidungpdg')->findOrFail($id);

        return view('chitiet_pdg_svs.show', compact('chitietPdgSv'));
    }

    /**
     * Show the form for editing the specified chitiet pdg sv.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $chitietPdgSv = chitiet_pdg_sv::findOrFail($id);
        $PhieudanhgiaSinhviens = phieudanhgia_sinhvien::pluck('TEN_PDGSV','ID')->all();
        $NoidungPdgs = noidung_pdg::pluck('TEN_NDPDG','ID')->all();

        return view('chitiet_pdg_svs.edit', compact('chitietPdgSv','PhieudanhgiaSinhviens','NoidungPdgs'));
    }

    /**
     * Update the specified chitiet pdg sv in the storage.
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
            
            $chitietPdgSv = chitiet_pdg_sv::findOrFail($id);
            $chitietPdgSv->update($data);

            return redirect()->route('chitiet_pdg_svs.chitiet_pdg_sv.index')
            ->with('success_message', 'Chitiet Pdg Sv was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
            ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified chitiet pdg sv from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $chitietPdgSv = chitiet_pdg_sv::findOrFail($id);
            $chitietPdgSv->delete();

            return redirect()->route('chitiet_pdg_svs.chitiet_pdg_sv.index')
            ->with('success_message', 'Chitiet Pdg Sv was successfully deleted.');
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
            'PHIEUDANHGIA_SINHVIEN_ID' => 'required',
            'NOIDUNG_PDG_ID' => 'required',
            'DIEM_DUYET_PDGSV' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'DIEM_SV_TUDANHGIA' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'GHICHU_PDGSV' => 'nullable|string|min:0|max:200', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
