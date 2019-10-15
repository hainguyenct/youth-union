<?php

namespace App\Http\Controllers;
use App\Models\mauphieu;
use App\Models\namhoc;
use App\Models\sinhvien;
use App\Models\xeploai_sv;
use App\Models\phieudanhgia_sinhvien;

use Illuminate\Http\Request;
use DB;
class danhgiasinhvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phieudanhgia_sinhvien = phieudanhgia_sinhvien::all();
        return view('danhgiasinhvien')
        ->with('pdg_sv', $phieudanhgia_sinhvien);
    }

    public function add_pdg()
    {

        $sinhvien =sinhvien::all();
        return view('danhgiasinhvien.add_pdg')
        ->with('sv', $sinhvien);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
      // $id=1;
       //$id= $_SESSION['id_sinhvien'];
       $sinhvien = sinhvien::find($id);
       $phieudanhgia_sinhvien = phieudanhgia_sinhvien::all();
       $namhoc = namhoc::all();
       $mauphieu = mauphieu::all();
       $xeploai_sv = xeploai_sv::all();

       return view('danhgiasinhvien.create')
       ->with('pdg_sv', $phieudanhgia_sinhvien)
       ->with('nh', $namhoc)
       ->with('mp', $mauphieu)
       ->with('xl_sv', $xeploai_sv)
       ->with('sv', $sinhvien);
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
    public function update(Request $request, $id)
    {
        //
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
