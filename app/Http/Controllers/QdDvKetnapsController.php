<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\doanvien_thanhnien;
use App\Models\dv_ketnap;
use App\Models\qd_dv_ketnap;
use Illuminate\Http\Request;
use Exception;

class QdDvKetnapsController extends Controller
{

    /**
     * Display a listing of the qd dv ketnaps.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $qdDvKetnaps = qd_dv_ketnap::with('dvketnap','doanvienthanhnien')->paginate(25);

        return view('qd_dv_ketnaps.index', compact('qdDvKetnaps'));
    }

    /**
     * Show the form for creating a new qd dv ketnap.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $DvKetnaps = dv_ketnap::pluck('NGAYKETNAP','ID')->all();
        $DoanvienThanhniens = doanvien_thanhnien::pluck('PHUONG_XA_ID_QQ','ID')->all();
        
        return view('qd_dv_ketnaps.create', compact('DvKetnaps','DoanvienThanhniens'));
    }

    /**
     * Store a new qd dv ketnap in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            qd_dv_ketnap::create($data);

            return redirect()->route('qd_dv_ketnaps.qd_dv_ketnap.index')
                ->with('success_message', 'Qd Dv Ketnap was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified qd dv ketnap.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $qdDvKetnap = qd_dv_ketnap::with('dvketnap','doanvienthanhnien')->findOrFail($id);

        return view('qd_dv_ketnaps.show', compact('qdDvKetnap'));
    }

    /**
     * Show the form for editing the specified qd dv ketnap.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $qdDvKetnap = qd_dv_ketnap::findOrFail($id);
        $DvKetnaps = dv_ketnap::pluck('NGAYKETNAP','ID')->all();
        $DoanvienThanhniens = doanvien_thanhnien::pluck('PHUONG_XA_ID_QQ','ID')->all();

        return view('qd_dv_ketnaps.edit', compact('qdDvKetnap','DvKetnaps','DoanvienThanhniens'));
    }

    /**
     * Update the specified qd dv ketnap in the storage.
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
            
            $qdDvKetnap = qd_dv_ketnap::findOrFail($id);
            $qdDvKetnap->update($data);

            return redirect()->route('qd_dv_ketnaps.qd_dv_ketnap.index')
                ->with('success_message', 'Qd Dv Ketnap was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified qd dv ketnap from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $qdDvKetnap = qd_dv_ketnap::findOrFail($id);
            $qdDvKetnap->delete();

            return redirect()->route('qd_dv_ketnaps.qd_dv_ketnap.index')
                ->with('success_message', 'Qd Dv Ketnap was successfully deleted.');
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
            'DV_KETNAP_ID' => 'required',
            'DOANVIEN_THANHNIEN_ID' => 'required',
            'DUYET_KN' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
