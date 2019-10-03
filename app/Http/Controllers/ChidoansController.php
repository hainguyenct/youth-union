<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\doankhoa;
use App\Models\doanphi_chi_cd;
use App\Models\khoa;
use App\Models\phieudanhgia_chidoan;
use App\Models\chidoan;
use Illuminate\Http\Request;
use Exception;

class ChidoansController extends Controller
{

    /**
     * Display a listing of the chidoans.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $chidoans = chidoan::with('phieudanhgiachidoan','doanphichicd','doankhoa','khoa')->paginate(10);

        return view('chidoans.index', compact('chidoans'));
    }

    /**
     * Show the form for creating a new chidoan.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $PhieudanhgiaChidoans = phieudanhgia_chidoan::pluck('TEN_PDGCD','ID')->all();
        $DoanphiChiCds = doanphi_chi_cd::pluck('SOTIEN_CHI_CD','ID')->all();
        $Doankhoas = doankhoa::pluck('TEN_DK','ID')->all();
        $Khoas = khoa::pluck('TEN_KHOA','ID')->all();
        
        return view('chidoans.create', compact('PhieudanhgiaChidoans','DoanphiChiCds','Doankhoas','Khoas'));
    }

    /**
     * Store a new chidoan in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            chidoan::create($data);

            return redirect()->route('chidoans.chidoan.index')
                ->with('success_message', 'Chidoan was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified chidoan.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $chidoan = chidoan::with('phieudanhgiachidoan','doanphichicd','doankhoa','khoa')->findOrFail($id);

        return view('chidoans.show', compact('chidoan'));
    }

    /**
     * Show the form for editing the specified chidoan.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $chidoan = chidoan::findOrFail($id);
        $PhieudanhgiaChidoans = phieudanhgia_chidoan::pluck('TEN_PDGCD','ID')->all();
        $DoanphiChiCds = doanphi_chi_cd::pluck('SOTIEN_CHI_CD','ID')->all();
        $Doankhoas = doankhoa::pluck('TEN_DK','ID')->all();
        $Khoas = khoa::pluck('TEN_KHOA','ID')->all();

        return view('chidoans.edit', compact('chidoan','PhieudanhgiaChidoans','DoanphiChiCds','Doankhoas','Khoas'));
    }

    /**
     * Update the specified chidoan in the storage.
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
            
            $chidoan = chidoan::findOrFail($id);
            $chidoan->update($data);

            return redirect()->route('chidoans.chidoan.index')
                ->with('success_message', 'Chidoan was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified chidoan from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $chidoan = chidoan::findOrFail($id);
            $chidoan->delete();

            return redirect()->route('chidoans.chidoan.index')
                ->with('success_message', 'Chidoan was successfully deleted.');
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
            'PHIEUDANHGIA_CHIDOAN_ID' => 'required',
            'DOANPHI_CHI_CD_ID' => 'required',
            'DOANKHOA_ID' => 'required',
            'KHOA_ID' => 'required',
            'TEN_CD' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
