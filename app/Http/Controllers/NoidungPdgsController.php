<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\kieu_dulieu;
use App\Models\loai_noidung_pdg;
use App\Models\noidung_pdg;
use Illuminate\Http\Request;
use Exception;

class NoidungPdgsController extends Controller
{

    /**
     * Display a listing of the noidung pdgs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $noidungPdgs = noidung_pdg::with('parentnoidungpdg','loainoidungpdg','kieudulieu')->paginate(25);

        return view('noidung_pdgs.index', compact('noidungPdgs'));
    }

    /**
     * Show the form for creating a new noidung pdg.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $ParentNoidungPdgs = noidung_pdg::pluck('TEN_NDPDG','ID')->all();
        $LoaiNoidungPdgs = loai_noidung_pdg::pluck('TEN_LOAI_NDPDG','ID')->all();
        $KieuDulieus = kieu_dulieu::pluck('ten_kieu_dulieu','id')->all();
        
        return view('noidung_pdgs.create', compact('ParentNoidungPdgs','LoaiNoidungPdgs','KieuDulieus'));
    }

    /**
     * Store a new noidung pdg in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);
            
            noidung_pdg::create($data);

            return redirect()->route('noidung_pdgs.noidung_pdg.index')
            ->with('success_message', 'Noidung Pdg was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
            ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified noidung pdg.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $noidungPdg = noidung_pdg::with('parentnoidungpdg','loainoidungpdg','kieudulieu')->findOrFail($id);

        return view('noidung_pdgs.show', compact('noidungPdg'));
    }

    /**
     * Show the form for editing the specified noidung pdg.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $noidungPdg = noidung_pdg::findOrFail($id);
        $ParentNoidungPdgs = noidung_pdg::pluck('TEN_NDPDG','ID')->all();
        $LoaiNoidungPdgs = loai_noidung_pdg::pluck('TEN_LOAI_NDPDG','ID')->all();
        $KieuDulieus = kieu_dulieu::pluck('ten_kieu_dulieu','id')->all();

        return view('noidung_pdgs.edit', compact('noidungPdg','ParentNoidungPdgs','LoaiNoidungPdgs','KieuDulieus'));
    }

    /**
     * Update the specified noidung pdg in the storage.
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
            
            $noidungPdg = noidung_pdg::findOrFail($id);
            $noidungPdg->update($data);

            return redirect()->route('noidung_pdgs.noidung_pdg.index')
            ->with('success_message', 'Noidung Pdg was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
            ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified noidung pdg from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $noidungPdg = noidung_pdg::findOrFail($id);
            $noidungPdg->delete();

            return redirect()->route('noidung_pdgs.noidung_pdg.index')
            ->with('success_message', 'Noidung Pdg was successfully deleted.');
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
            'NOIDUNG_CHA_PDG_ID' => 'nullable',
            'LOAI_NOIDUNG_PDG_ID' => 'required',
            'TEN_NDPDG' => 'nullable|string|min:0|max:50',
            'NOIDUNG_NDPDG' => 'nullable|string|min:0|max:200',
            'DIEMTOIDA_NDPDG' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'KIEU_DULIEU_ID' => 'required', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
