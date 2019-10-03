<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\phieubau_uutu;
use App\Models\phieudanhgia_doanvien;
use App\Models\chitiet_bau_ut;
use Illuminate\Http\Request;
use Exception;

class ChitietBauUtsController extends Controller
{

    /**
     * Display a listing of the chitiet bau uts.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $chitietBauUts = chitiet_bau_ut::with('phieudanhgiadoanvien','phieubauuutu')->paginate(10);

        return view('chitiet_bau_uts.index', compact('chitietBauUts'));
    }

    /**
     * Show the form for creating a new chitiet bau ut.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $PhieudanhgiaDoanviens = phieudanhgia_doanvien::pluck('TEN_PDGDV','ID')->all();
        $PhieubauUutus = phieubau_uutu::pluck('SOPHIEU_TONG','ID')->all();
        
        return view('chitiet_bau_uts.create', compact('PhieudanhgiaDoanviens','PhieubauUutus'));
    }

    /**
     * Store a new chitiet bau ut in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            chitiet_bau_ut::create($data);

            return redirect()->route('chitiet_bau_uts.chitiet_bau_ut.index')
                ->with('success_message', 'Chitiet Bau Ut was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified chitiet bau ut.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $chitietBauUt = chitiet_bau_ut::with('phieudanhgiadoanvien','phieubauuutu')->findOrFail($id);

        return view('chitiet_bau_uts.show', compact('chitietBauUt'));
    }

    /**
     * Show the form for editing the specified chitiet bau ut.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $chitietBauUt = chitiet_bau_ut::findOrFail($id);
        $PhieudanhgiaDoanviens = phieudanhgia_doanvien::pluck('TEN_PDGDV','ID')->all();
        $PhieubauUutus = phieubau_uutu::pluck('SOPHIEU_TONG','ID')->all();

        return view('chitiet_bau_uts.edit', compact('chitietBauUt','PhieudanhgiaDoanviens','PhieubauUutus'));
    }

    /**
     * Update the specified chitiet bau ut in the storage.
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
            
            $chitietBauUt = chitiet_bau_ut::findOrFail($id);
            $chitietBauUt->update($data);

            return redirect()->route('chitiet_bau_uts.chitiet_bau_ut.index')
                ->with('success_message', 'Chitiet Bau Ut was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified chitiet bau ut from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $chitietBauUt = chitiet_bau_ut::findOrFail($id);
            $chitietBauUt->delete();

            return redirect()->route('chitiet_bau_uts.chitiet_bau_ut.index')
                ->with('success_message', 'Chitiet Bau Ut was successfully deleted.');
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
            'PHIEUDANHGIA_DOANVIEN_ID' => 'required',
            'PHIEUBAU_UUTU_ID' => 'required',
            'SOPHIEU_DONGY' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'DUYET_BAU' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
