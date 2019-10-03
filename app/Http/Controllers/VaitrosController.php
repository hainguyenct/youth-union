<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\doanvien_thanhnien;
use App\Models\vaitro;
use Illuminate\Http\Request;
use Exception;

class VaitrosController extends Controller
{

    /**
     * Display a listing of the vaitros.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $vaitros = vaitro::with('doanvienthanhnien')->paginate(25);

        return view('vaitros.index', compact('vaitros'));
    }

    /**
     * Show the form for creating a new vaitro.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $DoanvienThanhniens = doanvien_thanhnien::pluck('PHUONG_XA_ID_QQ','ID')->all();
        
        return view('vaitros.create', compact('DoanvienThanhniens'));
    }

    /**
     * Store a new vaitro in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            vaitro::create($data);

            return redirect()->route('vaitros.vaitro.index')
                ->with('success_message', 'Vaitro was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified vaitro.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $vaitro = vaitro::with('doanvienthanhnien')->findOrFail($id);

        return view('vaitros.show', compact('vaitro'));
    }

    /**
     * Show the form for editing the specified vaitro.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $vaitro = vaitro::findOrFail($id);
        $DoanvienThanhniens = doanvien_thanhnien::pluck('PHUONG_XA_ID_QQ','ID')->all();

        return view('vaitros.edit', compact('vaitro','DoanvienThanhniens'));
    }

    /**
     * Update the specified vaitro in the storage.
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
            
            $vaitro = vaitro::findOrFail($id);
            $vaitro->update($data);

            return redirect()->route('vaitros.vaitro.index')
                ->with('success_message', 'Vaitro was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified vaitro from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $vaitro = vaitro::findOrFail($id);
            $vaitro->delete();

            return redirect()->route('vaitros.vaitro.index')
                ->with('success_message', 'Vaitro was successfully deleted.');
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
                'DOANVIEN_THANHNIEN_ID' => 'nullable',
            'TEN_VT' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
