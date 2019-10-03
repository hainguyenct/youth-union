<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\doankhoa;
use App\Models\thangnam;
use App\Models\doanphi_thu_dk;
use Illuminate\Http\Request;
use Exception;

class DoanphiThuDksController extends Controller
{

    /**
     * Display a listing of the doanphi thu dks.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $doanphiThuDks = doanphi_thu_dk::with('doankhoa','thangnam')->paginate(25);

        return view('doanphi_thu_dks.index', compact('doanphiThuDks'));
    }

    /**
     * Show the form for creating a new doanphi thu dk.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $Doankhoas = doankhoa::pluck('TEN_DK','ID')->all();
        $Thangnams = thangnam::pluck('id','id')->all();
        
        return view('doanphi_thu_dks.create', compact('Doankhoas','Thangnams'));
    }

    /**
     * Store a new doanphi thu dk in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            doanphi_thu_dk::create($data);

            return redirect()->route('doanphi_thu_dks.doanphi_thu_dk.index')
                ->with('success_message', 'Doanphi Thu Dk was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified doanphi thu dk.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $doanphiThuDk = doanphi_thu_dk::with('doankhoa','thangnam')->findOrFail($id);

        return view('doanphi_thu_dks.show', compact('doanphiThuDk'));
    }

    /**
     * Show the form for editing the specified doanphi thu dk.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $doanphiThuDk = doanphi_thu_dk::findOrFail($id);
        $Doankhoas = doankhoa::pluck('TEN_DK','ID')->all();
        $Thangnams = thangnam::pluck('id','id')->all();

        return view('doanphi_thu_dks.edit', compact('doanphiThuDk','Doankhoas','Thangnams'));
    }

    /**
     * Update the specified doanphi thu dk in the storage.
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
            
            $doanphiThuDk = doanphi_thu_dk::findOrFail($id);
            $doanphiThuDk->update($data);

            return redirect()->route('doanphi_thu_dks.doanphi_thu_dk.index')
                ->with('success_message', 'Doanphi Thu Dk was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified doanphi thu dk from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $doanphiThuDk = doanphi_thu_dk::findOrFail($id);
            $doanphiThuDk->delete();

            return redirect()->route('doanphi_thu_dks.doanphi_thu_dk.index')
                ->with('success_message', 'Doanphi Thu Dk was successfully deleted.');
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
                'DOANKHOA_ID' => 'required',
            'THANGNAM_ID' => 'required|date_format:j/n/Y g:i A',
            'NGAY_DONG_DK' => 'nullable|date_format:j/n/Y g:i A', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
