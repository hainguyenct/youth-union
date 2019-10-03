<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\doanvien_thanhnien;
use App\Models\thangnam;
use App\Models\doanphi_thu_dv;
use Illuminate\Http\Request;
use Exception;

class DoanphiThuDvsController extends Controller
{

    /**
     * Display a listing of the doanphi thu dvs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $doanphiThuDvs = doanphi_thu_dv::with('doanvienthanhnien','thangnam')->paginate(25);

        return view('doanphi_thu_dvs.index', compact('doanphiThuDvs'));
    }

    /**
     * Show the form for creating a new doanphi thu dv.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $DoanvienThanhniens = doanvien_thanhnien::pluck('PHUONG_XA_ID_QQ','ID')->all();
        $Thangnams = thangnam::pluck('id','id')->all();
        
        return view('doanphi_thu_dvs.create', compact('DoanvienThanhniens','Thangnams'));
    }

    /**
     * Store a new doanphi thu dv in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            doanphi_thu_dv::create($data);

            return redirect()->route('doanphi_thu_dvs.doanphi_thu_dv.index')
                ->with('success_message', 'Doanphi Thu Dv was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified doanphi thu dv.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $doanphiThuDv = doanphi_thu_dv::with('doanvienthanhnien','thangnam')->findOrFail($id);

        return view('doanphi_thu_dvs.show', compact('doanphiThuDv'));
    }

    /**
     * Show the form for editing the specified doanphi thu dv.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $doanphiThuDv = doanphi_thu_dv::findOrFail($id);
        $DoanvienThanhniens = doanvien_thanhnien::pluck('PHUONG_XA_ID_QQ','ID')->all();
        $Thangnams = thangnam::pluck('id','id')->all();

        return view('doanphi_thu_dvs.edit', compact('doanphiThuDv','DoanvienThanhniens','Thangnams'));
    }

    /**
     * Update the specified doanphi thu dv in the storage.
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
            
            $doanphiThuDv = doanphi_thu_dv::findOrFail($id);
            $doanphiThuDv->update($data);

            return redirect()->route('doanphi_thu_dvs.doanphi_thu_dv.index')
                ->with('success_message', 'Doanphi Thu Dv was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified doanphi thu dv from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $doanphiThuDv = doanphi_thu_dv::findOrFail($id);
            $doanphiThuDv->delete();

            return redirect()->route('doanphi_thu_dvs.doanphi_thu_dv.index')
                ->with('success_message', 'Doanphi Thu Dv was successfully deleted.');
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
            'DOANVIEN_THANHNIEN_ID' => 'required',
            'THANGNAM_ID' => 'required|date_format:j/n/Y g:i A',
            'NGAY_DONG_DP_DV' => 'nullable|date_format:j/n/Y g:i A', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
