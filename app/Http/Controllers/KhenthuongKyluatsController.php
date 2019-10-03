<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\hinhthuc_ktkl;
use App\Models\loai_ktkl;
use App\Models\khenthuong_kyluat;
use Illuminate\Http\Request;
use Exception;

class KhenthuongKyluatsController extends Controller
{

    /**
     * Display a listing of the khenthuong kyluats.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $khenthuongKyluats = khenthuong_kyluat::with('loaiktkl','hinhthucktkl')->paginate(25);

        return view('khenthuong_kyluats.index', compact('khenthuongKyluats'));
    }

    /**
     * Show the form for creating a new khenthuong kyluat.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $LoaiKtkls = loai_ktkl::pluck('TEN_LOAIKTKL','ID')->all();
$HinhthucKtkls = hinhthuc_ktkl::pluck('TEN_HT','ID')->all();
        
        return view('khenthuong_kyluats.create', compact('LoaiKtkls','HinhthucKtkls'));
    }

    /**
     * Store a new khenthuong kyluat in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            khenthuong_kyluat::create($data);

            return redirect()->route('khenthuong_kyluats.khenthuong_kyluat.index')
                ->with('success_message', 'Khenthuong Kyluat was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified khenthuong kyluat.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $khenthuongKyluat = khenthuong_kyluat::with('loaiktkl','hinhthucktkl')->findOrFail($id);

        return view('khenthuong_kyluats.show', compact('khenthuongKyluat'));
    }

    /**
     * Show the form for editing the specified khenthuong kyluat.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $khenthuongKyluat = khenthuong_kyluat::findOrFail($id);
        $LoaiKtkls = LoaiKtkl::pluck('TEN_LOAIKTKL','ID')->all();
$HinhthucKtkls = HinhthucKtkl::pluck('TEN_HT','ID')->all();

        return view('khenthuong_kyluats.edit', compact('khenthuongKyluat','LoaiKtkls','HinhthucKtkls'));
    }

    /**
     * Update the specified khenthuong kyluat in the storage.
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
            
            $khenthuongKyluat = khenthuong_kyluat::findOrFail($id);
            $khenthuongKyluat->update($data);

            return redirect()->route('khenthuong_kyluats.khenthuong_kyluat.index')
                ->with('success_message', 'Khenthuong Kyluat was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified khenthuong kyluat from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $khenthuongKyluat = khenthuong_kyluat::findOrFail($id);
            $khenthuongKyluat->delete();

            return redirect()->route('khenthuong_kyluats.khenthuong_kyluat.index')
                ->with('success_message', 'Khenthuong Kyluat was successfully deleted.');
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
                'LOAI_KTKL_ID' => 'required',
            'HINHTHUC_KTKL_ID' => 'required',
            'TEN_KTKL' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
