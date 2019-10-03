<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\chidoan;
use App\Models\dantoc;
use App\Models\phuong_xa;
use App\Models\tongiao;
use App\Models\doanvien_thanhnien;
use Illuminate\Http\Request;
use Exception;

class DoanvienThanhniensController extends Controller
{

    /**
     * Display a listing of the doanvien thanhniens.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $doanvienThanhniens = doanvien_thanhnien::with('phuongxa','chidoan','tongiao','phuongxa','dantoc')->paginate(25);

        return view('doanvien_thanhniens.index', compact('doanvienThanhniens'));
    }

    /**
     * Show the form for creating a new doanvien thanhnien.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $PhuongXas = phuong_xa::pluck('TEN_PX','ID')->all();
        $Chidoans = chidoan::pluck('TEN_CD','ID')->all();
        $Tongiaos = tongiao::pluck('TEN_TG','ID')->all();
        $Dantocs = dantoc::pluck('TEN_DT','ID')->all();
        
        return view('doanvien_thanhniens.create', compact('PhuongXas','Chidoans','Tongiaos','PhuongXas','Dantocs'));
    }

    /**
     * Store a new doanvien thanhnien in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            doanvien_thanhnien::create($data);

            return redirect()->route('doanvien_thanhniens.doanvien_thanhnien.index')
                ->with('success_message', 'Doanvien Thanhnien was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified doanvien thanhnien.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $doanvienThanhnien = doanvien_thanhnien::with('phuongxa','chidoan','tongiao','phuongxa','dantoc')->findOrFail($id);

        return view('doanvien_thanhniens.show', compact('doanvienThanhnien'));
    }

    /**
     * Show the form for editing the specified doanvien thanhnien.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $doanvienThanhnien = doanvien_thanhnien::findOrFail($id);
        $PhuongXas = phuong_xa::pluck('TEN_PX','ID')->all();
        $Chidoans = chidoan::pluck('TEN_CD','ID')->all();
        $Tongiaos = tongiao::pluck('TEN_TG','ID')->all();
        $Dantocs = dantoc::pluck('TEN_DT','ID')->all();

        return view('doanvien_thanhniens.edit', compact('doanvienThanhnien','PhuongXas','Chidoans','Tongiaos','PhuongXas','Dantocs'));
    }

    /**
     * Update the specified doanvien thanhnien in the storage.
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
            
            $doanvienThanhnien = doanvien_thanhnien::findOrFail($id);
            $doanvienThanhnien->update($data);

            return redirect()->route('doanvien_thanhniens.doanvien_thanhnien.index')
                ->with('success_message', 'Doanvien Thanhnien was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified doanvien thanhnien from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $doanvienThanhnien = doanvien_thanhnien::findOrFail($id);
            $doanvienThanhnien->delete();

            return redirect()->route('doanvien_thanhniens.doanvien_thanhnien.index')
                ->with('success_message', 'Doanvien Thanhnien was successfully deleted.');
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
            'PHUONG_XA_ID_QQ' => 'required|string',
            'CHIDOAN_ID' => 'required',
            'TONGIAO_ID' => 'nullable',
            'PHUONG_XA_ID_NS' => 'required|string',
            'DANTOC_ID' => 'required',
            'TEN_SV' => 'nullable|string',
            'NGAYSINH_SV' => 'nullable|date_format:j/n/Y g:i A',
            'DIACHI_SV' => 'nullable|string|min:0|max:50',
            'PHAI_SV' => 'nullable|numeric|min:-9|max:9',
            'SDT_SV' => 'nullable|string|min:0|max:10',
            'EMAIL_SV' => 'nullable|string|min:0|max:20',
            'NGAYVAODOAN_SV' => 'nullable|date_format:j/n/Y g:i A',
            'NOIVAODOAN_SV' => 'nullable|string',
            'MATKHAU_DV' => 'nullable|string|min:0|max:20', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
