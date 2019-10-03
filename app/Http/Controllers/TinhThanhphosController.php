<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tinh_thanhpho;
use Illuminate\Http\Request;
use Exception;

class TinhThanhphosController extends Controller
{

    /**
     * Display a listing of the tinh thanhphos.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $tinhThanhphos = tinh_thanhpho::paginate(25);

        return view('tinh_thanhphos.index', compact('tinhThanhphos'));
    }

    /**
     * Show the form for creating a new tinh thanhpho.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('tinh_thanhphos.create');
    }

    /**
     * Store a new tinh thanhpho in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            tinh_thanhpho::create($data);

            return redirect()->route('tinh_thanhphos.tinh_thanhpho.index')
                ->with('success_message', 'Tinh Thanhpho was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified tinh thanhpho.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $tinhThanhpho = tinh_thanhpho::findOrFail($id);

        return view('tinh_thanhphos.show', compact('tinhThanhpho'));
    }

    /**
     * Show the form for editing the specified tinh thanhpho.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $tinhThanhpho = tinh_thanhpho::findOrFail($id);
        

        return view('tinh_thanhphos.edit', compact('tinhThanhpho'));
    }

    /**
     * Update the specified tinh thanhpho in the storage.
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
            
            $tinhThanhpho = tinh_thanhpho::findOrFail($id);
            $tinhThanhpho->update($data);

            return redirect()->route('tinh_thanhphos.tinh_thanhpho.index')
                ->with('success_message', 'Tinh Thanhpho was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified tinh thanhpho from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $tinhThanhpho = tinh_thanhpho::findOrFail($id);
            $tinhThanhpho->delete();

            return redirect()->route('tinh_thanhphos.tinh_thanhpho.index')
                ->with('success_message', 'Tinh Thanhpho was successfully deleted.');
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
                'TEN_TP' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
