<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\loai_dp_chi;
use App\Models\doanphi_chi_cd;
use Illuminate\Http\Request;
use Exception;

class DoanphiChiCdsController extends Controller
{

    /**
     * Display a listing of the doanphi chi cds.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $doanphiChiCds = doanphi_chi_cd::with('loaidpchi')->paginate(25);

        return view('doanphi_chi_cds.index', compact('doanphiChiCds'));
    }

    /**
     * Show the form for creating a new doanphi chi cd.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $LoaiDpChis = loai_dp_chi::pluck('TEN_LOAI_DP','ID')->all();
        
        return view('doanphi_chi_cds.create', compact('LoaiDpChis'));
    }

    /**
     * Store a new doanphi chi cd in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            doanphi_chi_cd::create($data);

            return redirect()->route('doanphi_chi_cds.doanphi_chi_cd.index')
                ->with('success_message', 'Doanphi Chi Cd was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified doanphi chi cd.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $doanphiChiCd = doanphi_chi_cd::with('loaidpchi')->findOrFail($id);

        return view('doanphi_chi_cds.show', compact('doanphiChiCd'));
    }

    /**
     * Show the form for editing the specified doanphi chi cd.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $doanphiChiCd = doanphi_chi_cd::findOrFail($id);
        $LoaiDpChis = loai_dp_chi::pluck('TEN_LOAI_DP','ID')->all();

        return view('doanphi_chi_cds.edit', compact('doanphiChiCd','LoaiDpChis'));
    }

    /**
     * Update the specified doanphi chi cd in the storage.
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
            
            $doanphiChiCd = doanphi_chi_cd::findOrFail($id);
            $doanphiChiCd->update($data);

            return redirect()->route('doanphi_chi_cds.doanphi_chi_cd.index')
                ->with('success_message', 'Doanphi Chi Cd was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified doanphi chi cd from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $doanphiChiCd = doanphi_chi_cd::findOrFail($id);
            $doanphiChiCd->delete();

            return redirect()->route('doanphi_chi_cds.doanphi_chi_cd.index')
                ->with('success_message', 'Doanphi Chi Cd was successfully deleted.');
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
                'LOAI_DP_CHI_ID' => 'required',
            'SOTIEN_CHI_CD' => 'nullable|numeric|min:-9|max:9',
            'NGAY_CHI_CD' => 'nullable|date_format:j/n/Y g:i A',
            'NGUOI_NHAN_PHIEU_CHI_CD' => 'nullable|string|min:0|max:100', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
