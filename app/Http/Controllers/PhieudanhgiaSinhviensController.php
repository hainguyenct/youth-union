<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\mauphieu;
use App\Models\namhoc;
use App\Models\sinhvien;
use App\Models\xeploai_sv;
use App\Models\phieudanhgia_sinhvien;
use Illuminate\Http\Request;
use Exception;

class PhieudanhgiaSinhviensController extends Controller
{

    /**
     * Display a listing of the phieudanhgia sinhviens.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $phieudanhgiaSinhviens = phieudanhgia_sinhvien::with('mauphieu','namhoc','sinhvien','xeploaisv')->paginate(25);

        return view('phieudanhgia_sinhviens.index', compact('phieudanhgiaSinhviens'));
    }

    /**
     * Show the form for creating a new phieudanhgia sinhvien.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $Mauphieus = mauphieu::pluck('TEN_MP','ID')->all();
        $nAMHOCs = namhoc::pluck('namhoc','id')->all();
        $Sinhviens = sinhvien::pluck('mssv','id')->all();
        $xEPLOAISVs = xeploai_sv::pluck('id','id')->all();
        
        return view('phieudanhgia_sinhviens.create', compact('Mauphieus','nAMHOCs','Sinhviens','xEPLOAISVs'));
    }

    /**
     * Store a new phieudanhgia sinhvien in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);
            
            phieudanhgia_sinhvien::create($data);

            return redirect()->route('phieudanhgia_sinhviens.phieudanhgia_sinhvien.index')
            ->with('success_message', 'Phieudanhgia Sinhvien was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
            ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified phieudanhgia sinhvien.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $phieudanhgiaSinhvien = phieudanhgia_sinhvien::with('mauphieu','namhoc','sinhvien','xeploaisv')->findOrFail($id);

        return view('phieudanhgia_sinhviens.show', compact('phieudanhgiaSinhvien'));
    }

    /**
     * Show the form for editing the specified phieudanhgia sinhvien.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $phieudanhgiaSinhvien = phieudanhgia_sinhvien::findOrFail($id);
        $Mauphieus = mauphieu::pluck('TEN_MP','ID')->all();
        $nAMHOCs = namhoc::pluck('namhoc','id')->all();
        $Sinhviens = sinhvien::pluck('mssv','id')->all();
        $xEPLOAISVs = xeploai_sv::pluck('id','id')->all();

        return view('phieudanhgia_sinhviens.edit', compact('phieudanhgiaSinhvien','Mauphieus','nAMHOCs','Sinhviens','xEPLOAISVs'));
    }

    /**
     * Update the specified phieudanhgia sinhvien in the storage.
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
            
            $phieudanhgiaSinhvien = phieudanhgia_sinhvien::findOrFail($id);
            $phieudanhgiaSinhvien->update($data);

            return redirect()->route('phieudanhgia_sinhviens.phieudanhgia_sinhvien.index')
            ->with('success_message', 'Phieudanhgia Sinhvien was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
            ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified phieudanhgia sinhvien from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $phieudanhgiaSinhvien = phieudanhgia_sinhvien::findOrFail($id);
            $phieudanhgiaSinhvien->delete();

            return redirect()->route('phieudanhgia_sinhviens.phieudanhgia_sinhvien.index')
            ->with('success_message', 'Phieudanhgia Sinhvien was successfully deleted.');
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
            'MAUPHIEU_ID' => 'required',
            'NAMHOC_ID' => 'required',
            'SINHVIEN_ID' => 'required',
            'XEPLOAI_SV_ID' => 'required',
            'TEN_PDGSV' => 'nullable|string|min:0|max:50',
            'DIEMRENLUYEN' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'DIEMTRUNGBINH' => 'nullable|numeric|min:-9|max:9', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
