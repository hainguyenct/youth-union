<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\dv_tt_doan;
use Illuminate\Http\Request;
use Exception;

class DvTtDoansController extends Controller
{

    /**
     * Display a listing of the dv tt doans.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $dvTtDoans = dv_tt_doan::paginate(25);

        return view('dv_tt_doans.index', compact('dvTtDoans'));
    }

    /**
     * Show the form for creating a new dv tt doan.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('dv_tt_doans.create');
    }

    /**
     * Store a new dv tt doan in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            dv_tt_doan::create($data);

            return redirect()->route('dv_tt_doans.dv_tt_doan.index')
                ->with('success_message', 'Dv Tt Doan was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified dv tt doan.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $dvTtDoan = dv_tt_doan::findOrFail($id);

        return view('dv_tt_doans.show', compact('dvTtDoan'));
    }

    /**
     * Show the form for editing the specified dv tt doan.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $dvTtDoan = dv_tt_doan::findOrFail($id);
        

        return view('dv_tt_doans.edit', compact('dvTtDoan'));
    }

    /**
     * Update the specified dv tt doan in the storage.
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
            
            $dvTtDoan = dv_tt_doan::findOrFail($id);
            $dvTtDoan->update($data);

            return redirect()->route('dv_tt_doans.dv_tt_doan.index')
                ->with('success_message', 'Dv Tt Doan was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified dv tt doan from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $dvTtDoan = dv_tt_doan::findOrFail($id);
            $dvTtDoan->delete();

            return redirect()->route('dv_tt_doans.dv_tt_doan.index')
                ->with('success_message', 'Dv Tt Doan was successfully deleted.');
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
                'NGAYTTDOAN' => 'nullable|date_format:j/n/Y g:i A', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
