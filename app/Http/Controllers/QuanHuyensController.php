<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tinh_thanhpho;
use App\Models\quan_huyen;
use Illuminate\Http\Request;
use Exception;

class QuanHuyensController extends Controller
{

    /**
     * Display a listing of the quan huyens.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $quanHuyens = quan_huyen::with('tinhthanhpho')->paginate(25);

        return view('quan_huyens.index', compact('quanHuyens'));
    }

    /**
     * Show the form for creating a new quan huyen.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $TinhThanhphos = tinh_thanhpho::pluck('TEN_TP','ID')->all();
        
        return view('quan_huyens.create', compact('TinhThanhphos'));
    }

    /**
     * Store a new quan huyen in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            quan_huyen::create($data);

            return redirect()->route('quan_huyens.quan_huyen.index')
                ->with('success_message', 'Quan Huyen was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified quan huyen.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $quanHuyen = quan_huyen::with('tinhthanhpho')->findOrFail($id);

        return view('quan_huyens.show', compact('quanHuyen'));
    }

    /**
     * Show the form for editing the specified quan huyen.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $quanHuyen = quan_huyen::findOrFail($id);
        $TinhThanhphos = TinhThanhpho::pluck('TEN_TP','ID')->all();

        return view('quan_huyens.edit', compact('quanHuyen','TinhThanhphos'));
    }

    /**
     * Update the specified quan huyen in the storage.
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
            
            $quanHuyen = quan_huyen::findOrFail($id);
            $quanHuyen->update($data);

            return redirect()->route('quan_huyens.quan_huyen.index')
                ->with('success_message', 'Quan Huyen was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified quan huyen from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $quanHuyen = quan_huyen::findOrFail($id);
            $quanHuyen->delete();

            return redirect()->route('quan_huyens.quan_huyen.index')
                ->with('success_message', 'Quan Huyen was successfully deleted.');
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
                'TINH_THANHPHO_ID' => 'required',
            'TEN_QD' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
