<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\doankhoa;
use App\Models\doanphi_chi_dk;
use App\Models\hocky;
use App\Models\loai_pt;
use App\Models\pt_doankhoa;
use Illuminate\Http\Request;
use Exception;

class PtDoankhoasController extends Controller
{

    /**
     * Display a listing of the pt doankhoas.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $ptDoankhoas = pt_doankhoa::with('loaipt','doankhoa','doanphichidk','hocky')->paginate(25);

        return view('pt_doankhoas.index', compact('ptDoankhoas'));
    }

    /**
     * Show the form for creating a new pt doankhoa.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $LoaiPts = loai_pt::pluck('TEN_LOAI_PT','ID')->all();
        $Doankhoas = doankhoa::pluck('TEN_DK','ID')->all();
        $DoanphiChiDks = doanphi_chi_dk::pluck('SOTIEN_CHI_DK','ID')->all();
        $Hockies = hocky::pluck('TEN_HK','ID')->all();
        
        return view('pt_doankhoas.create', compact('LoaiPts','Doankhoas','DoanphiChiDks','Hockies'));
    }

    /**
     * Store a new pt doankhoa in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            pt_doankhoa::create($data);

            return redirect()->route('pt_doankhoas.pt_doankhoa.index')
                ->with('success_message', 'Pt Doankhoa was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified pt doankhoa.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $ptDoankhoa = pt_doankhoa::with('loaipt','doankhoa','doanphichidk','hocky')->findOrFail($id);

        return view('pt_doankhoas.show', compact('ptDoankhoa'));
    }

    /**
     * Show the form for editing the specified pt doankhoa.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $ptDoankhoa = pt_doankhoa::findOrFail($id);
        $LoaiPts = loai_pt::pluck('TEN_LOAI_PT','ID')->all();
        $Doankhoas = doankhoa::pluck('TEN_DK','ID')->all();
        $DoanphiChiDks = doanphi_chi_dk::pluck('SOTIEN_CHI_DK','ID')->all();
        $Hockies = hocky::pluck('TEN_HK','ID')->all();

        return view('pt_doankhoas.edit', compact('ptDoankhoa','LoaiPts','Doankhoas','DoanphiChiDks','Hockies'));
    }

    /**
     * Update the specified pt doankhoa in the storage.
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
            
            $ptDoankhoa = pt_doankhoa::findOrFail($id);
            $ptDoankhoa->update($data);

            return redirect()->route('pt_doankhoas.pt_doankhoa.index')
                ->with('success_message', 'Pt Doankhoa was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified pt doankhoa from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $ptDoankhoa = pt_doankhoa::findOrFail($id);
            $ptDoankhoa->delete();

            return redirect()->route('pt_doankhoas.pt_doankhoa.index')
                ->with('success_message', 'Pt Doankhoa was successfully deleted.');
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
            'LOAI_PT_ID' => 'required',
            'DOANKHOA_ID' => 'required',
            'DOANPHI_CHI_DK_ID' => 'required',
            'HOCKY_ID' => 'required',
            'TEN_PT_DK' => 'nullable|string|min:0|max:50',
            'NGAY_BT_PT_DK' => 'nullable|date_format:j/n/Y g:i A',
            'NGAY_KT_PT_DK' => 'nullable|date_format:j/n/Y g:i A',
            'GHICHU_PT_DK' => 'nullable|string|min:0|max:200', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
