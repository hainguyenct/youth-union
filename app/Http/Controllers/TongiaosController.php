<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tongiao;
use Illuminate\Http\Request;
use Exception;

class TongiaosController extends Controller
{

    /**
     * Display a listing of the tongiaos.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $tongiaos = tongiao::paginate(25);

        return view('tongiaos.index', compact('tongiaos'));
    }

    /**
     * Show the form for creating a new tongiao.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('tongiaos.create');
    }

    /**
     * Store a new tongiao in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            tongiao::create($data);

            return redirect()->route('tongiaos.tongiao.index')
                ->with('success_message', 'Tongiao was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified tongiao.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $tongiao = tongiao::findOrFail($id);

        return view('tongiaos.show', compact('tongiao'));
    }

    /**
     * Show the form for editing the specified tongiao.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $tongiao = tongiao::findOrFail($id);
        

        return view('tongiaos.edit', compact('tongiao'));
    }

    /**
     * Update the specified tongiao in the storage.
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
            
            $tongiao = tongiao::findOrFail($id);
            $tongiao->update($data);

            return redirect()->route('tongiaos.tongiao.index')
                ->with('success_message', 'Tongiao was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified tongiao from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $tongiao = tongiao::findOrFail($id);
            $tongiao->delete();

            return redirect()->route('tongiaos.tongiao.index')
                ->with('success_message', 'Tongiao was successfully deleted.');
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
                'TEN_TG' => 'nullable|string|min:0|max:50', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
