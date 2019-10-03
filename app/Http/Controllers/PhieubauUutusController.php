<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\chidoan;
use App\Models\phieubau_uutu;
use Illuminate\Http\Request;
use Exception;

class PhieubauUutusController extends Controller
{

    /**
     * Display a listing of the phieubau uutus.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $phieubauUutus = phieubau_uutu::with('chidoan')->paginate(25);

        return view('phieubau_uutus.index', compact('phieubauUutus'));
    }

    /**
     * Show the form for creating a new phieubau uutu.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $Chidoans = Chidoan::pluck('TEN_CD','ID')->all();
        
        return view('phieubau_uutus.create', compact('Chidoans'));
    }

    /**
     * Store a new phieubau uutu in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            phieubau_uutu::create($data);

            return redirect()->route('phieubau_uutus.phieubau_uutu.index')
                ->with('success_message', 'Phieubau Uutu was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified phieubau uutu.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $phieubauUutu = phieubau_uutu::with('chidoan')->findOrFail($id);

        return view('phieubau_uutus.show', compact('phieubauUutu'));
    }

    /**
     * Show the form for editing the specified phieubau uutu.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $phieubauUutu = phieubau_uutu::findOrFail($id);
        $Chidoans = chidoan::pluck('TEN_CD','ID')->all();

        return view('phieubau_uutus.edit', compact('phieubauUutu','Chidoans'));
    }

    /**
     * Update the specified phieubau uutu in the storage.
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
            
            $phieubauUutu = phieubau_uutu::findOrFail($id);
            $phieubauUutu->update($data);

            return redirect()->route('phieubau_uutus.phieubau_uutu.index')
                ->with('success_message', 'Phieubau Uutu was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified phieubau uutu from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $phieubauUutu = phieubau_uutu::findOrFail($id);
            $phieubauUutu->delete();

            return redirect()->route('phieubau_uutus.phieubau_uutu.index')
                ->with('success_message', 'Phieubau Uutu was successfully deleted.');
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
                'CHIDOAN_ID' => 'required',
            'SOPHIEU_TONG' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'NGAY_BAU' => 'nullable|date_format:j/n/Y g:i A', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
