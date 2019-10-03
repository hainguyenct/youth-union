<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\sinhvien;
use Illuminate\Http\Request;
use Exception;

class SinhviensController extends Controller
{

    /**
     * Display a listing of the sinhviens.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $sinhviens = sinhvien::paginate(25);

        return view('sinhviens.index', compact('sinhviens'));
    }

    /**
     * Show the form for creating a new sinhvien.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('sinhviens.create');
    }

    /**
     * Store a new sinhvien in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        // try {
            
            $data = $this->getData($request);
            
            sinhvien::create($data);

            return redirect()->route('sinhviens.sinhvien.index')
                ->with('success_message', 'Sinhvien was successfully added.');
        // } catch (Exception $exception) {

        //     return back()->withInput()
        //         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        // }
    }

    /**
     * Display the specified sinhvien.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $sinhvien = sinhvien::findOrFail($id);

        return view('sinhviens.show', compact('sinhvien'));
    }

    /**
     * Show the form for editing the specified sinhvien.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $sinhvien = sinhvien::findOrFail($id);
        

        return view('sinhviens.edit', compact('sinhvien'));
    }

    /**
     * Update the specified sinhvien in the storage.
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
            
            $sinhvien = sinhvien::findOrFail($id);
            $sinhvien->update($data);

            return redirect()->route('sinhviens.sinhvien.index')
                ->with('success_message', 'Sinhvien was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified sinhvien from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $sinhvien = sinhvien::findOrFail($id);
            $sinhvien->delete();

            return redirect()->route('sinhviens.sinhvien.index')
                ->with('success_message', 'Sinhvien was successfully deleted.');
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
                'mssv' => 'required|string|min:1|max:11',
            'hoten' => 'required|string|min:1|max:50', 
            'namsinh' => 'date_format:dd/mm/yyyy'
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
