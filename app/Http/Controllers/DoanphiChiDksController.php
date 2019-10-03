<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\loai_dp_chi;
use App\Models\doanphi_chi_dk;
use Illuminate\Http\Request;
use Exception;

class DoanphiChiDksController extends Controller
{

    /**
     * Display a listing of the doanphi chi dks.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $doanphiChiDks = doanphi_chi_dk::with('loaidpchi')->paginate(25);

        return view('doanphi_chi_dks.index', compact('doanphiChiDks'));
    }

    /**
     * Show the form for creating a new doanphi chi dk.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $LoaiDpChis = loai_dp_chi::pluck('TEN_LOAI_DP','ID')->all();
        
        return view('doanphi_chi_dks.create', compact('LoaiDpChis'));
    }

    /**
     * Store a new doanphi chi dk in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            doanphi_chi_dk::create($data);

            return redirect()->route('doanphi_chi_dks.doanphi_chi_dk.index')
                ->with('success_message', 'Doanphi Chi Dk was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified doanphi chi dk.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $doanphiChiDk = doanphi_chi_dk::with('loaidpchi')->findOrFail($id);

        return view('doanphi_chi_dks.show', compact('doanphiChiDk'));
    }

    /**
     * Show the form for editing the specified doanphi chi dk.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $doanphiChiDk = doanphi_chi_dk::findOrFail($id);
        $LoaiDpChis = loai_dp_chi::pluck('TEN_LOAI_DP','ID')->all();

        return view('doanphi_chi_dks.edit', compact('doanphiChiDk','LoaiDpChis'));
    }

    /**
     * Update the specified doanphi chi dk in the storage.
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
            
            $doanphiChiDk = doanphi_chi_dk::findOrFail($id);
            $doanphiChiDk->update($data);

            return redirect()->route('doanphi_chi_dks.doanphi_chi_dk.index')
                ->with('success_message', 'Doanphi Chi Dk was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified doanphi chi dk from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $doanphiChiDk = doanphi_chi_dk::findOrFail($id);
            $doanphiChiDk->delete();

            return redirect()->route('doanphi_chi_dks.doanphi_chi_dk.index')
                ->with('success_message', 'Doanphi Chi Dk was successfully deleted.');
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
            'SOTIEN_CHI_DK' => 'nullable|numeric|min:-9|max:9',
            'NGAY_CHI_DK' => 'nullable|date_format:j/n/Y g:i A',
            'NGUOI_NHAN_PHIEU_CHI_DK' => 'nullable|string|min:0|max:100', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
