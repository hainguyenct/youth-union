<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\chucvu_dv;
use App\Models\doanvien_thanhnien;
use App\Models\ct_chucvu_dv;
use Illuminate\Http\Request;
use Exception;

class CtChucvuDvsController extends Controller
{

    /**
     * Display a listing of the ct chucvu dvs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $ctChucvuDvs = ct_chucvu_dv::with('doanvienthanhnien','chucvudv')->paginate(25);

        return view('ct_chucvu_dvs.index', compact('ctChucvuDvs'));
    }

    /**
     * Show the form for creating a new ct chucvu dv.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $DoanvienThanhniens = doanvien_thanhnien::pluck('PHUONG_XA_ID_QQ','ID')->all();
        $ChucvuDvs = chucvu_dv::pluck('TEN_CHUCVU','ID')->all();
        
        return view('ct_chucvu_dvs.create', compact('DoanvienThanhniens','ChucvuDvs'));
    }

    /**
     * Store a new ct chucvu dv in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            ct_chucvu_dv::create($data);

            return redirect()->route('ct_chucvu_dvs.ct_chucvu_dv.index')
                ->with('success_message', 'Ct Chucvu Dv was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified ct chucvu dv.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $ctChucvuDv = ct_chucvu_dv::with('doanvienthanhnien','chucvudv')->findOrFail($id);

        return view('ct_chucvu_dvs.show', compact('ctChucvuDv'));
    }

    /**
     * Show the form for editing the specified ct chucvu dv.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $ctChucvuDv = ct_chucvu_dv::findOrFail($id);
        $DoanvienThanhniens = doanvien_thanhnien::pluck('PHUONG_XA_ID_QQ','ID')->all();
        $ChucvuDvs = chucvu_dv::pluck('TEN_CHUCVU','ID')->all();

        return view('ct_chucvu_dvs.edit', compact('ctChucvuDv','DoanvienThanhniens','ChucvuDvs'));
    }

    /**
     * Update the specified ct chucvu dv in the storage.
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
            
            $ctChucvuDv = ct_chucvu_dv::findOrFail($id);
            $ctChucvuDv->update($data);

            return redirect()->route('ct_chucvu_dvs.ct_chucvu_dv.index')
                ->with('success_message', 'Ct Chucvu Dv was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified ct chucvu dv from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $ctChucvuDv = ct_chucvu_dv::findOrFail($id);
            $ctChucvuDv->delete();

            return redirect()->route('ct_chucvu_dvs.ct_chucvu_dv.index')
                ->with('success_message', 'Ct Chucvu Dv was successfully deleted.');
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
                'CHUCVU_DV_ID' => 'required',
                'NGAYBD_CV' => 'nullable|date_format:j/n/Y g:i A',
                'NGAYKT_CV' => 'nullable|date_format:j/n/Y g:i A', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
