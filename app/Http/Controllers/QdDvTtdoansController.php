<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\doanvien_thanhnien;
use App\Models\dv_tt_doan;
use App\Models\qd_dv_ttdoan;
use Illuminate\Http\Request;
use Exception;

class QdDvTtdoansController extends Controller
{

    /**
     * Display a listing of the qd dv ttdoans.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $qdDvTtdoans = qd_dv_ttdoan::with('dvttdoan','doanvienthanhnien')->paginate(25);

        return view('qd_dv_ttdoans.index', compact('qdDvTtdoans'));
    }

    /**
     * Show the form for creating a new qd dv ttdoan.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $DvTtDoans = dv_tt_doan::pluck('NGAYTTDOAN','ID')->all();
        $DoanvienThanhniens = doanvien_thanhnien::pluck('PHUONG_XA_ID_QQ','ID')->all();
        
        return view('qd_dv_ttdoans.create', compact('DvTtDoans','DoanvienThanhniens'));
    }

    /**
     * Store a new qd dv ttdoan in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            qd_dv_ttdoan::create($data);

            return redirect()->route('qd_dv_ttdoans.qd_dv_ttdoan.index')
                ->with('success_message', 'Qd Dv Ttdoan was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified qd dv ttdoan.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $qdDvTtdoan = qd_dv_ttdoan::with('dvttdoan','doanvienthanhnien')->findOrFail($id);

        return view('qd_dv_ttdoans.show', compact('qdDvTtdoan'));
    }

    /**
     * Show the form for editing the specified qd dv ttdoan.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $qdDvTtdoan = qd_dv_ttdoan::findOrFail($id);
        $DvTtDoans = dv_tt_doan::pluck('NGAYTTDOAN','ID')->all();
        $DoanvienThanhniens = doanvien_thanhnien::pluck('PHUONG_XA_ID_QQ','ID')->all();

        return view('qd_dv_ttdoans.edit', compact('qdDvTtdoan','DvTtDoans','DoanvienThanhniens'));
    }

    /**
     * Update the specified qd dv ttdoan in the storage.
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
            
            $qdDvTtdoan = qd_dv_ttdoan::findOrFail($id);
            $qdDvTtdoan->update($data);

            return redirect()->route('qd_dv_ttdoans.qd_dv_ttdoan.index')
                ->with('success_message', 'Qd Dv Ttdoan was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified qd dv ttdoan from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $qdDvTtdoan = qd_dv_ttdoan::findOrFail($id);
            $qdDvTtdoan->delete();

            return redirect()->route('qd_dv_ttdoans.qd_dv_ttdoan.index')
                ->with('success_message', 'Qd Dv Ttdoan was successfully deleted.');
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
            'DV_TT_DOAN_ID' => 'required',
            'DOANVIEN_THANHNIEN_ID' => 'required',
            'DUYET_TTD' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
