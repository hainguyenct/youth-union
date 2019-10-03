<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\mauphieu;
use App\Models\chitiet_mauphieu;
use App\Models\noidung_pdg;
use App\Models\loai_noidung_pdg;
use Illuminate\Http\Request;
use Exception;
use DB;

class createmauphieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mauphieu = mauphieu::all();
        $mauphieu1 = mauphieu::all()->pluck("ID","TEN_MP");
        $noidung_pdg = noidung_pdg::all();
        $chitiet_mauphieu = chitiet_mauphieu::all();
        return view('create_mau_phieu')
        ->with('mp', $mauphieu)
        ->with('mp1', $mauphieu1)
        ->with('nd_pdg', $noidung_pdg)
        ->with('ct_mp', $chitiet_mauphieu);
    }


    public function create_chitiet_mauphieu(Request $request){
        $mauphieu = mauphieu::find($request->MAUPHIEU_ID);
        $chitiet_mauphieu =chitiet_mauphieu::where("MAUPHIEU_ID", "=", $mauphieu)->get();
        return view('create_mau_phieu')
        ->with('mp', $mauphieu)
        ->with('ct_mp', $chitiet_mauphieu);      

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $chitiet_mauphieu = chitiet_mauphieu::all();

        foreach($chitiet_mauphieu as $value){
            $value->delete();
        }
        $mauphieu =  $request->mauphieu;

        if($mauphieu != NULL){
            foreach($mauphieu as $idmp => $value)
            {
                foreach($value as $idndpdg => $gt)
                {
                    $data = new chitiet_mauphieu();
                    $data->MAUPHIEU_ID = $idmp;
                    $data->NOIDUNG_PDG_ID = $idndpdg;
                    $data->save();

                }

            }
        }

        session()->flash('flash_mesage','Cập nhật dữ liệu thành công');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
