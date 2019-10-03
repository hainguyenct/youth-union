<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\loai_dp_chi;
use Illuminate\Http\Request;
use Exception;

class LoaiDpChisController extends Controller
{

    /**
     * Display a listing of the loai dp chis.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $loaiDpChis = loai_dp_chi::paginate(25);

        return view('loai_dp_chis.index', compact('loaiDpChis'));
    }

    /**
     * Show the form for creating a new loai dp chi.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('loai_dp_chis.create');
    }

    /**
     * Store a new loai dp chi in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            loai_dp_chi::create($data);

            return redirect()->route('loai_dp_chis.loai_dp_chi.index')
                ->with('success_message', 'Loai Dp Chi was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified loai dp chi.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $loaiDpChi = loai_dp_chi::findOrFail($id);

        return view('loai_dp_chis.show', compact('loaiDpChi'));
    }

    /**
     * Show the form for editing the specified loai dp chi.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $loaiDpChi = loai_dp_chi::findOrFail($id);
        

        return view('loai_dp_chis.edit', compact('loaiDpChi'));
    }

    /**
     * Update the specified loai dp chi in the storage.
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
            
            $loaiDpChi = loai_dp_chi::findOrFail($id);
            $loaiDpChi->update($data);

            return redirect()->route('loai_dp_chis.loai_dp_chi.index')
                ->with('success_message', 'Loai Dp Chi was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified loai dp chi from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $loaiDpChi = loai_dp_chi::findOrFail($id);
            $loaiDpChi->delete();

            return redirect()->route('loai_dp_chis.loai_dp_chi.index')
                ->with('success_message', 'Loai Dp Chi was successfully deleted.');
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
                'TEN_LOAI_DP' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
