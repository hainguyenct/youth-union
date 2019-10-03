<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\chidoan;
use App\Models\thangnam;
use App\Models\doanphi_thu_cd;
use Illuminate\Http\Request;
use Exception;

class DoanphiThuCdsController extends Controller
{

    /**
     * Display a listing of the doanphi thu cds.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $doanphiThuCds = doanphi_thu_cd::with('chidoan','thangnam')->paginate(25);

        return view('doanphi_thu_cds.index', compact('doanphiThuCds'));
    }

    /**
     * Show the form for creating a new doanphi thu cd.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $Chidoans = chidoan::pluck('TEN_CD','ID')->all();
        $Thangnams = thangnam::pluck('id','id')->all();
        
        return view('doanphi_thu_cds.create', compact('Chidoans','Thangnams'));
    }

    /**
     * Store a new doanphi thu cd in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            doanphi_thu_cd::create($data);

            return redirect()->route('doanphi_thu_cds.doanphi_thu_cd.index')
                ->with('success_message', 'Doanphi Thu Cd was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified doanphi thu cd.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $doanphiThuCd = doanphi_thu_cd::with('chidoan','thangnam')->findOrFail($id);

        return view('doanphi_thu_cds.show', compact('doanphiThuCd'));
    }

    /**
     * Show the form for editing the specified doanphi thu cd.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $doanphiThuCd = doanphi_thu_cd::findOrFail($id);
        $Chidoans = chidoan::pluck('TEN_CD','ID')->all();
        $Thangnams = thangnam::pluck('id','id')->all();

        return view('doanphi_thu_cds.edit', compact('doanphiThuCd','Chidoans','Thangnams'));
    }

    /**
     * Update the specified doanphi thu cd in the storage.
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
            
            $doanphiThuCd = doanphi_thu_cd::findOrFail($id);
            $doanphiThuCd->update($data);

            return redirect()->route('doanphi_thu_cds.doanphi_thu_cd.index')
                ->with('success_message', 'Doanphi Thu Cd was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified doanphi thu cd from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $doanphiThuCd = doanphi_thu_cd::findOrFail($id);
            $doanphiThuCd->delete();

            return redirect()->route('doanphi_thu_cds.doanphi_thu_cd.index')
                ->with('success_message', 'Doanphi Thu Cd was successfully deleted.');
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
            'CHIDOAN_ID' => 'required',
            'THANGNAM_ID' => 'required|date_format:j/n/Y g:i A',
            'NGAY_DONG_CD' => 'nullable|date_format:j/n/Y g:i A', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
