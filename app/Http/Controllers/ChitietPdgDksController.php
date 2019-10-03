<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\noidung_pdg;
use App\Models\phieudanhgia_doankhoa;
use App\Models\chitiet_pdg_dk;
use Illuminate\Http\Request;
use Exception;

class ChitietPdgDksController extends Controller
{

    /**
     * Display a listing of the chitiet pdg dks.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $chitietPdgDks = chitiet_pdg_dk::with('phieudanhgiadoankhoa','noidungpdg')->paginate(25);

        return view('chitiet_pdg_dks.index', compact('chitietPdgDks'));
    }

    /**
     * Show the form for creating a new chitiet pdg dk.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $PhieudanhgiaDoankhoas = phieudanhgia_doankhoa::pluck('TEN_PDGDK','ID')->all();
$NoidungPdgs = noidung_pdg::pluck('TEN_NDPDG','ID')->all();
        
        return view('chitiet_pdg_dks.create', compact('PhieudanhgiaDoankhoas','NoidungPdgs'));
    }

    /**
     * Store a new chitiet pdg dk in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            chitiet_pdg_dk::create($data);

            return redirect()->route('chitiet_pdg_dks.chitiet_pdg_dk.index')
                ->with('success_message', 'Chitiet Pdg Dk was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified chitiet pdg dk.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $chitietPdgDk = chitiet_pdg_dk::with('phieudanhgiadoankhoa','noidungpdg')->findOrFail($id);

        return view('chitiet_pdg_dks.show', compact('chitietPdgDk'));
    }

    /**
     * Show the form for editing the specified chitiet pdg dk.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $chitietPdgDk = chitiet_pdg_dk::findOrFail($id);
        $PhieudanhgiaDoankhoas = phieudanhgia_doankhoa::pluck('TEN_PDGDK','ID')->all();
$NoidungPdgs = noidung_pdg::pluck('TEN_NDPDG','ID')->all();

        return view('chitiet_pdg_dks.edit', compact('chitietPdgDk','PhieudanhgiaDoankhoas','NoidungPdgs'));
    }

    /**
     * Update the specified chitiet pdg dk in the storage.
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
            
            $chitietPdgDk = chitiet_pdg_dk::findOrFail($id);
            $chitietPdgDk->update($data);

            return redirect()->route('chitiet_pdg_dks.chitiet_pdg_dk.index')
                ->with('success_message', 'Chitiet Pdg Dk was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified chitiet pdg dk from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $chitietPdgDk = chitiet_pdg_dk::findOrFail($id);
            $chitietPdgDk->delete();

            return redirect()->route('chitiet_pdg_dks.chitiet_pdg_dk.index')
                ->with('success_message', 'Chitiet Pdg Dk was successfully deleted.');
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
                'PHIEUDANHGIA_DOANKHOA_ID' => 'required',
            'NOIDUNG_PDG_ID' => 'required',
            'DIEM_DUYET_PDGDK' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'DIEM_DK_TUDANHGIA' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'GHICHU_PDGDK' => 'nullable|string|min:0|max:200', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
