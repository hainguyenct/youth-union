<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\chidoan;
use App\Models\doanphi_chi_cd;
use App\Models\hocky;
use App\Models\loai_pt;
use App\Models\pt_chidoan;
use Illuminate\Http\Request;
use Exception;

class PtChidoansController extends Controller
{

    /**
     * Display a listing of the pt chidoans.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $ptChidoans = pt_chidoan::with('hocky','loaipt','chidoan','doanphichicd')->paginate(25);

        return view('pt_chidoans.index', compact('ptChidoans'));
    }

    /**
     * Show the form for creating a new pt chidoan.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $Hockies = hocky::pluck('TEN_HK','ID')->all();
        $LoaiPts = loai_pt::pluck('TEN_LOAI_PT','ID')->all();
        $Chidoans = chidoan::pluck('TEN_CD','ID')->all();
        $DoanphiChiCds = doanphi_chi_cd::pluck('SOTIEN_CHI_CD','ID')->all();
                
        return view('pt_chidoans.create', compact('Hockies','LoaiPts','Chidoans','DoanphiChiCds'));
    }

    /**
     * Store a new pt chidoan in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            pt_chidoan::create($data);

            return redirect()->route('pt_chidoans.pt_chidoan.index')
                ->with('success_message', 'Pt Chidoan was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified pt chidoan.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $ptChidoan = pt_chidoan::with('hocky','loaipt','chidoan','doanphichicd')->findOrFail($id);

        return view('pt_chidoans.show', compact('ptChidoan'));
    }

    /**
     * Show the form for editing the specified pt chidoan.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $ptChidoan = pt_chidoan::findOrFail($id);
        $Hockies = hocky::pluck('TEN_HK','ID')->all();
        $LoaiPts = loai_pt::pluck('TEN_LOAI_PT','ID')->all();
        $Chidoans = chidoan::pluck('TEN_CD','ID')->all();
        $DoanphiChiCds = doanphi_chi_cd::pluck('SOTIEN_CHI_CD','ID')->all();

        return view('pt_chidoans.edit', compact('ptChidoan','Hockies','LoaiPts','Chidoans','DoanphiChiCds'));
    }

    /**
     * Update the specified pt chidoan in the storage.
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
            
            $ptChidoan = pt_chidoan::findOrFail($id);
            $ptChidoan->update($data);

            return redirect()->route('pt_chidoans.pt_chidoan.index')
                ->with('success_message', 'Pt Chidoan was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified pt chidoan from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $ptChidoan = pt_chidoan::findOrFail($id);
            $ptChidoan->delete();

            return redirect()->route('pt_chidoans.pt_chidoan.index')
                ->with('success_message', 'Pt Chidoan was successfully deleted.');
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
            'HOCKY_ID' => 'required',
            'LOAI_PT_ID' => 'required',
            'CHIDOAN_ID' => 'required',
            'DOANPHI_CHI_CD_ID' => 'required',
            'TEN_PT_CD' => 'nullable|string|min:0|max:50',
            'NGAY_BD_PT_CD' => 'nullable|date_format:j/n/Y g:i A',
            'NGAY_KT_PT_CD' => 'nullable|date_format:j/n/Y g:i A',
            'GHICHU_PT_CD' => 'nullable|string|min:0|max:200', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
