<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\loai_ktkl;
use Illuminate\Http\Request;
use Exception;

class LoaiKtklsController extends Controller
{

    /**
     * Display a listing of the loai ktkls.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $loaiKtkls = loai_ktkl::paginate(25);

        return view('loai_ktkls.index', compact('loaiKtkls'));
    }

    /**
     * Show the form for creating a new loai ktkl.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('loai_ktkls.create');
    }

    /**
     * Store a new loai ktkl in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            loai_ktkl::create($data);

            return redirect()->route('loai_ktkls.loai_ktkl.index')
                ->with('success_message', 'Loai Ktkl was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified loai ktkl.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $loaiKtkl = loai_ktkl::findOrFail($id);

        return view('loai_ktkls.show', compact('loaiKtkl'));
    }

    /**
     * Show the form for editing the specified loai ktkl.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $loaiKtkl = loai_ktkl::findOrFail($id);
        

        return view('loai_ktkls.edit', compact('loaiKtkl'));
    }

    /**
     * Update the specified loai ktkl in the storage.
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
            
            $loaiKtkl = loai_ktkl::findOrFail($id);
            $loaiKtkl->update($data);

            return redirect()->route('loai_ktkls.loai_ktkl.index')
                ->with('success_message', 'Loai Ktkl was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified loai ktkl from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $loaiKtkl = loai_ktkl::findOrFail($id);
            $loaiKtkl->delete();

            return redirect()->route('loai_ktkls.loai_ktkl.index')
                ->with('success_message', 'Loai Ktkl was successfully deleted.');
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
                'TEN_LOAIKTKL' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
