<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\mauphieu;
use App\Models\namhoc;
use App\Models\xeploai_cd;
use App\Models\phieudanhgia_chidoan;
use Illuminate\Http\Request;
use Exception;

class PhieudanhgiaChidoansController extends Controller
{

    /**
     * Display a listing of the phieudanhgia chidoans.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $phieudanhgiaChidoans = phieudanhgia_chidoan::with('namhoc','xeploaicd','mauphieu')->paginate(25);

        return view('phieudanhgia_chidoans.index', compact('phieudanhgiaChidoans'));
    }

    /**
     * Show the form for creating a new phieudanhgia chidoan.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $Namhocs = namhoc::pluck('TEN_NH','ID')->all();
$XeploaiCds = xeploai_cd::pluck('TEN_PH','ID')->all();
$Mauphieus = mauphieu::pluck('TEN_MP','ID')->all();
        
        return view('phieudanhgia_chidoans.create', compact('Namhocs','XeploaiCds','Mauphieus'));
    }

    /**
     * Store a new phieudanhgia chidoan in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            phieudanhgia_chidoan::create($data);

            return redirect()->route('phieudanhgia_chidoans.phieudanhgia_chidoan.index')
                ->with('success_message', 'Phieudanhgia Chidoan was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified phieudanhgia chidoan.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $phieudanhgiaChidoan = phieudanhgia_chidoan::with('namhoc','xeploaicd','mauphieu')->findOrFail($id);

        return view('phieudanhgia_chidoans.show', compact('phieudanhgiaChidoan'));
    }

    /**
     * Show the form for editing the specified phieudanhgia chidoan.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $phieudanhgiaChidoan = phieudanhgia_chidoan::findOrFail($id);
        $Namhocs = Namhoc::pluck('TEN_NH','ID')->all();
$XeploaiCds = XeploaiCd::pluck('TEN_PH','ID')->all();
$Mauphieus = Mauphieu::pluck('TEN_MP','ID')->all();

        return view('phieudanhgia_chidoans.edit', compact('phieudanhgiaChidoan','Namhocs','XeploaiCds','Mauphieus'));
    }

    /**
     * Update the specified phieudanhgia chidoan in the storage.
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
            
            $phieudanhgiaChidoan = phieudanhgia_chidoan::findOrFail($id);
            $phieudanhgiaChidoan->update($data);

            return redirect()->route('phieudanhgia_chidoans.phieudanhgia_chidoan.index')
                ->with('success_message', 'Phieudanhgia Chidoan was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified phieudanhgia chidoan from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $phieudanhgiaChidoan = phieudanhgia_chidoan::findOrFail($id);
            $phieudanhgiaChidoan->delete();

            return redirect()->route('phieudanhgia_chidoans.phieudanhgia_chidoan.index')
                ->with('success_message', 'Phieudanhgia Chidoan was successfully deleted.');
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
                'NAMHOC_ID' => 'required',
            'XEPLOAI_CD_ID' => 'required',
            'MAUPHIEU_ID' => 'required',
            'TEN_PDGCD' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
