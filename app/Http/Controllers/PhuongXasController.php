<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\quan_huyen;
use App\Models\phuong_xa;
use Illuminate\Http\Request;
use Exception;

class PhuongXasController extends Controller
{

    /**
     * Display a listing of the phuong xas.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $phuongXas = phuong_xa::with('quanhuyen')->paginate(25);

        return view('phuong_xas.index', compact('phuongXas'));
    }

    /**
     * Show the form for creating a new phuong xa.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $QuanHuyens = quan_huyen::pluck('TEN_QD','ID')->all();
        
        return view('phuong_xas.create', compact('QuanHuyens'));
    }

    /**
     * Store a new phuong xa in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            phuong_xa::create($data);

            return redirect()->route('phuong_xas.phuong_xa.index')
                ->with('success_message', 'Phuong Xa was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified phuong xa.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $phuongXa = phuong_xa::with('quanhuyen')->findOrFail($id);

        return view('phuong_xas.show', compact('phuongXa'));
    }

    /**
     * Show the form for editing the specified phuong xa.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $phuongXa = phuong_xa::findOrFail($id);
        $QuanHuyens = QuanHuyen::pluck('TEN_QD','ID')->all();

        return view('phuong_xas.edit', compact('phuongXa','QuanHuyens'));
    }

    /**
     * Update the specified phuong xa in the storage.
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
            
            $phuongXa = phuong_xa::findOrFail($id);
            $phuongXa->update($data);

            return redirect()->route('phuong_xas.phuong_xa.index')
                ->with('success_message', 'Phuong Xa was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified phuong xa from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $phuongXa = phuong_xa::findOrFail($id);
            $phuongXa->delete();

            return redirect()->route('phuong_xas.phuong_xa.index')
                ->with('success_message', 'Phuong Xa was successfully deleted.');
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
                'QUAN_HUYEN_ID' => 'required',
            'TEN_PX' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
