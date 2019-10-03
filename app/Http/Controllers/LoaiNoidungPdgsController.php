<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\loai_noidung_pdg;
use Illuminate\Http\Request;
use Exception;

class LoaiNoidungPdgsController extends Controller
{

    /**
     * Display a listing of the loai noidung pdgs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $loaiNoidungPdgs = loai_noidung_pdg::paginate(25);

        return view('loai_noidung_pdgs.index', compact('loaiNoidungPdgs'));
    }

    /**
     * Show the form for creating a new loai noidung pdg.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('loai_noidung_pdgs.create');
    }

    /**
     * Store a new loai noidung pdg in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            loai_noidung_pdg::create($data);

            return redirect()->route('loai_noidung_pdgs.loai_noidung_pdg.index')
                ->with('success_message', 'Loai Noidung Pdg was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified loai noidung pdg.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $loaiNoidungPdg = loai_noidung_pdg::findOrFail($id);

        return view('loai_noidung_pdgs.show', compact('loaiNoidungPdg'));
    }

    /**
     * Show the form for editing the specified loai noidung pdg.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $loaiNoidungPdg = loai_noidung_pdg::findOrFail($id);
        

        return view('loai_noidung_pdgs.edit', compact('loaiNoidungPdg'));
    }

    /**
     * Update the specified loai noidung pdg in the storage.
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
            
            $loaiNoidungPdg = loai_noidung_pdg::findOrFail($id);
            $loaiNoidungPdg->update($data);

            return redirect()->route('loai_noidung_pdgs.loai_noidung_pdg.index')
                ->with('success_message', 'Loai Noidung Pdg was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified loai noidung pdg from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $loaiNoidungPdg = loai_noidung_pdg::findOrFail($id);
            $loaiNoidungPdg->delete();

            return redirect()->route('loai_noidung_pdgs.loai_noidung_pdg.index')
                ->with('success_message', 'Loai Noidung Pdg was successfully deleted.');
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
                'TEN_LOAI_NDPDG' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
