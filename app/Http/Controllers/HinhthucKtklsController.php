<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\hinhthuc_ktkl;
use Illuminate\Http\Request;
use Exception;

class HinhthucKtklsController extends Controller
{

    /**
     * Display a listing of the hinhthuc ktkls.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $hinhthucKtkls = hinhthuc_ktkl::paginate(25);

        return view('hinhthuc_ktkls.index', compact('hinhthucKtkls'));
    }

    /**
     * Show the form for creating a new hinhthuc ktkl.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('hinhthuc_ktkls.create');
    }

    /**
     * Store a new hinhthuc ktkl in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            hinhthuc_ktkl::create($data);

            return redirect()->route('hinhthuc_ktkls.hinhthuc_ktkl.index')
                ->with('success_message', 'Hinhthuc Ktkl was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified hinhthuc ktkl.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $hinhthucKtkl = hinhthuc_ktkl::findOrFail($id);

        return view('hinhthuc_ktkls.show', compact('hinhthucKtkl'));
    }

    /**
     * Show the form for editing the specified hinhthuc ktkl.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $hinhthucKtkl = hinhthuc_ktkl::findOrFail($id);
        

        return view('hinhthuc_ktkls.edit', compact('hinhthucKtkl'));
    }

    /**
     * Update the specified hinhthuc ktkl in the storage.
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
            
            $hinhthucKtkl = hinhthuc_ktkl::findOrFail($id);
            $hinhthucKtkl->update($data);

            return redirect()->route('hinhthuc_ktkls.hinhthuc_ktkl.index')
                ->with('success_message', 'Hinhthuc Ktkl was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified hinhthuc ktkl from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $hinhthucKtkl = hinhthuc_ktkl::findOrFail($id);
            $hinhthucKtkl->delete();

            return redirect()->route('hinhthuc_ktkls.hinhthuc_ktkl.index')
                ->with('success_message', 'Hinhthuc Ktkl was successfully deleted.');
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
                'TEN_HT' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
