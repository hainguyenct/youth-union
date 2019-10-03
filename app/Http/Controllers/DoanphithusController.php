<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\sinhvien;
use App\Models\thangnam;
use App\Models\doanphithu;
use Illuminate\Http\Request;
use Exception;

class DoanphithusController extends Controller
{

    /**
     * Display a listing of the doanphithus.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $doanphithus = doanphithu::with('sinhvien','thangnam')->paginate(25);

        return view('doanphithus.index', compact('doanphithus'));
    }

    /**
     * Show the form for creating a new doanphithu.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $sinhviens = sinhvien::pluck('mssv','id')->all();
        $thangnams = thangnam::pluck('thangnam','id')->all();
        
        return view('doanphithus.create', compact('sinhviens','thangnams'));
    }

    /**
     * Store a new doanphithu in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            doanphithu::create($data);

            return redirect()->route('doanphithus.doanphithu.index')
                ->with('success_message', 'Doanphithu was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified doanphithu.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $doanphithu = doanphithu::with('sinhvien','thangnam')->findOrFail($id);

        return view('doanphithus.show', compact('doanphithu'));
    }

    /**
     * Show the form for editing the specified doanphithu.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $doanphithu = doanphithu::findOrFail($id);
        $sinhviens = sinhvien::pluck('mssv','id')->all();
        $thangnams = thangnam::pluck('thangnam','id')->all();

        return view('doanphithus.edit', compact('doanphithu','sinhviens','thangnams'));
    }

    /**
     * Update the specified doanphithu in the storage.
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
            
            $doanphithu = doanphithu::findOrFail($id);
            $doanphithu->update($data);

            return redirect()->route('doanphithus.doanphithu.index')
                ->with('success_message', 'Doanphithu was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified doanphithu from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $doanphithu = doanphithu::findOrFail($id);
            $doanphithu->delete();

            return redirect()->route('doanphithus.doanphithu.index')
                ->with('success_message', 'Doanphithu was successfully deleted.');
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
                'sinhvien_id' => 'required',
                'thangnam_id' => 'required',
                'ngaydong' => 'nullable|date_format:j/n/Y g:i A', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
