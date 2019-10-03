<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\loai_pt;
use Illuminate\Http\Request;
use Exception;

class LoaiPtsController extends Controller
{

    /**
     * Display a listing of the loai pts.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $loaiPts = loai_pt::paginate(25);

        return view('loai_pts.index', compact('loaiPts'));
    }

    /**
     * Show the form for creating a new loai pt.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('loai_pts.create');
    }

    /**
     * Store a new loai pt in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            loai_pt::create($data);

            return redirect()->route('loai_pts.loai_pt.index')
                ->with('success_message', 'Loai Pt was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified loai pt.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $loaiPt = loai_pt::findOrFail($id);

        return view('loai_pts.show', compact('loaiPt'));
    }

    /**
     * Show the form for editing the specified loai pt.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $loaiPt = loai_pt::findOrFail($id);
        

        return view('loai_pts.edit', compact('loaiPt'));
    }

    /**
     * Update the specified loai pt in the storage.
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
            
            $loaiPt = loai_pt::findOrFail($id);
            $loaiPt->update($data);

            return redirect()->route('loai_pts.loai_pt.index')
                ->with('success_message', 'Loai Pt was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified loai pt from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $loaiPt = loai_pt::findOrFail($id);
            $loaiPt->delete();

            return redirect()->route('loai_pts.loai_pt.index')
                ->with('success_message', 'Loai Pt was successfully deleted.');
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
                'TEN_LOAI_PT' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
