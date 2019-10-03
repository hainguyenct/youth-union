<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\doanvien_thanhnien;
use App\Models\pt_doankhoa;
use App\Models\thanhtich;
use App\Models\thanhtich_thamgia;
use Illuminate\Http\Request;
use Exception;

class ThanhtichThamgiasController extends Controller
{

    /**
     * Display a listing of the thanhtich thamgias.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $thanhtichThamgias = thanhtich_thamgia::with('doanvienthanhnien','ptdoankhoa','thanhtich')->paginate(25);

        return view('thanhtich_thamgias.index', compact('thanhtichThamgias'));
    }

    /**
     * Show the form for creating a new thanhtich thamgia.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $DoanvienThanhniens = doanvien_thanhnien::pluck('PHUONG_XA_ID_QQ','ID')->all();
        $PtDoankhoas = pt_doankhoa::pluck('TEN_PT_DK','ID')->all();
        $Thanhtiches = thanhtich::pluck('TEN_TT','ID')->all();
        
        return view('thanhtich_thamgias.create', compact('DoanvienThanhniens','PtDoankhoas','Thanhtiches'));
    }

    /**
     * Store a new thanhtich thamgia in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            thanhtich_thamgia::create($data);

            return redirect()->route('thanhtich_thamgias.thanhtich_thamgia.index')
                ->with('success_message', 'Thanhtich Thamgia was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified thanhtich thamgia.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $thanhtichThamgia = thanhtich_thamgia::with('doanvienthanhnien','ptdoankhoa','thanhtich')->findOrFail($id);

        return view('thanhtich_thamgias.show', compact('thanhtichThamgia'));
    }

    /**
     * Show the form for editing the specified thanhtich thamgia.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $thanhtichThamgia = thanhtich_thamgia::findOrFail($id);
        $DoanvienThanhniens = doanvien_thanhnien::pluck('PHUONG_XA_ID_QQ','ID')->all();
        $PtDoankhoas = pt_doankhoa::pluck('TEN_PT_DK','ID')->all();
        $Thanhtiches = thanhtich::pluck('TEN_TT','ID')->all();

        return view('thanhtich_thamgias.edit', compact('thanhtichThamgia','DoanvienThanhniens','PtDoankhoas','Thanhtiches'));
    }

    /**
     * Update the specified thanhtich thamgia in the storage.
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
            
            $thanhtichThamgia = thanhtich_thamgia::findOrFail($id);
            $thanhtichThamgia->update($data);

            return redirect()->route('thanhtich_thamgias.thanhtich_thamgia.index')
                ->with('success_message', 'Thanhtich Thamgia was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified thanhtich thamgia from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $thanhtichThamgia = thanhtich_thamgia::findOrFail($id);
            $thanhtichThamgia->delete();

            return redirect()->route('thanhtich_thamgias.thanhtich_thamgia.index')
                ->with('success_message', 'Thanhtich Thamgia was successfully deleted.');
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
            'PT_DOANKHOA_ID' => 'required',
            'THANHTICH_ID' => 'required',
            'DIENGIAI' => 'nullable|string|min:0|max:200', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
