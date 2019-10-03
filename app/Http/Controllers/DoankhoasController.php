<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\phieudanhgia_doankhoa;
use App\Models\doankhoa;
use Illuminate\Http\Request;
use Exception;

class DoankhoasController extends Controller
{

    /**
     * Display a listing of the doankhoas.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $doankhoas = doankhoa::with('phieudanhgiadoankhoa')->paginate(25);

        return view('doankhoas.index', compact('doankhoas'));
    }

    /**
     * Show the form for creating a new doankhoa.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $PhieudanhgiaDoankhoas = phieudanhgia_doankhoa::pluck('TEN_PDGDK','ID')->all();
        
        return view('doankhoas.create', compact('PhieudanhgiaDoankhoas'));
    }

    /**
     * Store a new doankhoa in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            doankhoa::create($data);

            return redirect()->route('doankhoas.doankhoa.index')
                ->with('success_message', 'Doankhoa was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified doankhoa.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $doankhoa = doankhoa::with('phieudanhgiadoankhoa')->findOrFail($id);

        return view('doankhoas.show', compact('doankhoa'));
    }

    /**
     * Show the form for editing the specified doankhoa.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $doankhoa = doankhoa::findOrFail($id);
        $PhieudanhgiaDoankhoas = PhieudanhgiaDoankhoa::pluck('TEN_PDGDK','ID')->all();

        return view('doankhoas.edit', compact('doankhoa','PhieudanhgiaDoankhoas'));
    }

    /**
     * Update the specified doankhoa in the storage.
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
            
            $doankhoa = doankhoa::findOrFail($id);
            $doankhoa->update($data);

            return redirect()->route('doankhoas.doankhoa.index')
                ->with('success_message', 'Doankhoa was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified doankhoa from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $doankhoa = doankhoa::findOrFail($id);
            $doankhoa->delete();

            return redirect()->route('doankhoas.doankhoa.index')
                ->with('success_message', 'Doankhoa was successfully deleted.');
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
                'PHIEUDANHGIA_DOANKHOA_ID' => 'required',
            'TEN_DK' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
