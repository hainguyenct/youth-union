<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\mauphieu;
use App\Models\xeploai_dk;
use App\Models\phieudanhgia_doankhoa;
use Illuminate\Http\Request;
use Exception;

class PhieudanhgiaDoankhoasController extends Controller
{

    /**
     * Display a listing of the phieudanhgia doankhoas.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $phieudanhgiaDoankhoas = phieudanhgia_doankhoa::with('xeploaidk','mauphieu')->paginate(25);

        return view('phieudanhgia_doankhoas.index', compact('phieudanhgiaDoankhoas'));
    }

    /**
     * Show the form for creating a new phieudanhgia doankhoa.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $XeploaiDks = xeploai_dk::pluck('TEN_XLDK','ID')->all();
$Mauphieus = mauphieu::pluck('TEN_MP','ID')->all();
        
        return view('phieudanhgia_doankhoas.create', compact('XeploaiDks','Mauphieus'));
    }

    /**
     * Store a new phieudanhgia doankhoa in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            phieudanhgia_doankhoa::create($data);

            return redirect()->route('phieudanhgia_doankhoas.phieudanhgia_doankhoa.index')
                ->with('success_message', 'Phieudanhgia Doankhoa was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified phieudanhgia doankhoa.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $phieudanhgiaDoankhoa = phieudanhgia_doankhoa::with('xeploaidk','mauphieu')->findOrFail($id);

        return view('phieudanhgia_doankhoas.show', compact('phieudanhgiaDoankhoa'));
    }

    /**
     * Show the form for editing the specified phieudanhgia doankhoa.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $phieudanhgiaDoankhoa = phieudanhgia_doankhoa::findOrFail($id);
        $XeploaiDks = xeploai_dk::pluck('TEN_XLDK','ID')->all();
$Mauphieus = mauphieu::pluck('TEN_MP','ID')->all();

        return view('phieudanhgia_doankhoas.edit', compact('phieudanhgiaDoankhoa','XeploaiDks','Mauphieus'));
    }

    /**
     * Update the specified phieudanhgia doankhoa in the storage.
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
            
            $phieudanhgiaDoankhoa = phieudanhgia_doankhoa::findOrFail($id);
            $phieudanhgiaDoankhoa->update($data);

            return redirect()->route('phieudanhgia_doankhoas.phieudanhgia_doankhoa.index')
                ->with('success_message', 'Phieudanhgia Doankhoa was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified phieudanhgia doankhoa from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $phieudanhgiaDoankhoa = phieudanhgia_doankhoa::findOrFail($id);
            $phieudanhgiaDoankhoa->delete();

            return redirect()->route('phieudanhgia_doankhoas.phieudanhgia_doankhoa.index')
                ->with('success_message', 'Phieudanhgia Doankhoa was successfully deleted.');
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
                'XEPLOAI_DK_ID' => 'required',
            'MAUPHIEU_ID' => 'required',
            'TEN_PDGDK' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
