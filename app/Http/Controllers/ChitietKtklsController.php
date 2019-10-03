<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\doanvien_thanhnien;
use App\Models\khenthuong_kyluat;
use App\Models\chitiet_ktkl;
use Illuminate\Http\Request;
use Exception;

class ChitietKtklsController extends Controller
{

    /**
     * Display a listing of the chitiet ktkls.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $chitietKtkls = chitiet_ktkl::with('doanvienthanhnien','khenthuongkyluat')->paginate(10);

        return view('chitiet_ktkls.index', compact('chitietKtkls'));
    }

    /**
     * Show the form for creating a new chitiet ktkl.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $DoanvienThanhniens = doanvien_thanhnien::pluck('PHUONG_XA_ID_QQ','ID')->all();
        $KhenthuongKyluats = khenthuong_kyluat::pluck('TEN_KTKL','ID')->all();
        
        return view('chitiet_ktkls.create', compact('DoanvienThanhniens','KhenthuongKyluats'));
    }

    /**
     * Store a new chitiet ktkl in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            chitiet_ktkl::create($data);

            return redirect()->route('chitiet_ktkls.chitiet_ktkl.index')
                ->with('success_message', 'Chitiet Ktkl was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified chitiet ktkl.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $chitietKtkl = chitiet_ktkl::with('doanvienthanhnien','khenthuongkyluat')->findOrFail($id);

        return view('chitiet_ktkls.show', compact('chitietKtkl'));
    }

    /**
     * Show the form for editing the specified chitiet ktkl.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $chitietKtkl = chitiet_ktkl::findOrFail($id);
        $DoanvienThanhniens = doanvien_thanhnien::pluck('PHUONG_XA_ID_QQ','ID')->all();
        $KhenthuongKyluats = khenthuong_kyluat::pluck('TEN_KTKL','ID')->all();

        return view('chitiet_ktkls.edit', compact('chitietKtkl','DoanvienThanhniens','KhenthuongKyluats'));
    }

    /**
     * Update the specified chitiet ktkl in the storage.
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
            
            $chitietKtkl = chitiet_ktkl::findOrFail($id);
            $chitietKtkl->update($data);

            return redirect()->route('chitiet_ktkls.chitiet_ktkl.index')
                ->with('success_message', 'Chitiet Ktkl was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified chitiet ktkl from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $chitietKtkl = chitiet_ktkl::findOrFail($id);
            $chitietKtkl->delete();

            return redirect()->route('chitiet_ktkls.chitiet_ktkl.index')
                ->with('success_message', 'Chitiet Ktkl was successfully deleted.');
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
                'KHENTHUONG_KYLUAT_ID' => 'required',
                'NOIDUNG_KTKL' => 'nullable|string|min:0|max:200',
                'NGAYBATDAU' => 'nullable|date_format:j/n/Y g:i A', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
