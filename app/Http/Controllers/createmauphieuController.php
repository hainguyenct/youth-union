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


    public function show_chitiet_mauphieu(Request $request){
        $chitiet_mauphieu = chitiet_mauphieu::all();
        $noidung_mauphieu = DB::table('chitiet_mauphieu')
        ->join('mauphieu', 'mauphieu.ID', '=', 'chitiet_mauphieu.MAUPHIEU_ID')
        ->join('noidung_pdg', 'noidung_pdg.ID', '=', 'chitiet_mauphieu.NOIDUNG_PDG_ID')
        ->select('chitiet_mauphieu.*','mauphieu.TEN_MP', 'noidung_pdg.TEN_NDPDG')
        ->get();
        $mauphieu = mauphieu::all();
        return view('show_chitiet_mauphieu')
        ->with('ct_mp', $chitiet_mauphieu)
        ->with('nd_mp', $noidung_mauphieu)
        ->with('mp', $mauphieu);     
    }


    public function mauphieuform(){
        $chitiet_mauphieu = DB::table('chitiet_mauphieu')
        ->join('mauphieu', 'mauphieu.ID', '=', 'chitiet_mauphieu.MAUPHIEU_ID')
        ->join('noidung_pdg', 'noidung_pdg.ID', '=', 'chitiet_mauphieu.NOIDUNG_PDG_ID')
        ->join('kieu_dulieu', 'kieu_dulieu.ID', '=', 'noidung_pdg.KIEU_DULIEU_ID')
        ->where('chitiet_mauphieu.MAUPHIEU_ID', '=', 3)
        ->select('chitiet_mauphieu.*','mauphieu.TEN_MP', 'noidung_pdg.TEN_NDPDG', 'kieu_dulieu.TEN_KIEU_DULIEU')
        ->orderBy('THUTU_NOIDUNG')
        ->get();
        return view('phieudanhgia')
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

            $noidung_pdg = $request->noidung_pdg;
            $i = 1;
            $chitiet_mauphieu_1 = chitiet_mauphieu::where('MAUPHIEU_ID', $request->mauphieu)->where('NOIDUNG_PDG_ID',$request->noidung_pdg)->first();
            $max_offset = chitiet_mauphieu::where('MAUPHIEU_ID',$request->mauphieu)->max('THUTU_NOIDUNG');

            // dd('chao Nguyen max='.$max_offset.' cua phieu'. $request->mauphieu);
            if (!$chitiet_mauphieu_1) {
              foreach ($noidung_pdg as $nd_pdg){
                $chitiet_mauphieu = new chitiet_mauphieu();
                $chitiet_mauphieu->MAUPHIEU_ID = $request->mauphieu;
                $chitiet_mauphieu->NOIDUNG_PDG_ID = $nd_pdg;
                if($max_offset == null){
                    $chitiet_mauphieu->THUTU_NOIDUNG = $i;
                }else{
                    $chitiet_mauphieu->THUTU_NOIDUNG = $i + $max_offset;
                }

                $i++;
                $chitiet_mauphieu->save();

            }
            // return redirect("update_mau_phieu/{$id}/edit")
            return redirect(route('show_chitiet_mauphieu'))
            ->with('success_message', 'Lưu thành công ^^');
        }
        else{
         return redirect()->back()
         ->with('error_message', 'Dữ liệu bị trùng xin nhập lại!!!');
     }

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
     $mauphieu = chitiet_mauphieu::find($id);
     $chitiet_mauphieu = DB::table('chitiet_mauphieu')
     ->join('mauphieu', 'chitiet_mauphieu.MAUPHIEU_ID','=', 'mauphieu.ID')
     ->join('noidung_pdg', 'chitiet_mauphieu.NOIDUNG_PDG_ID', '=', 'noidung_pdg.ID')
     ->where('MAUPHIEU_ID', '=', $mauphieu)
     ->select('chitiet_mauphieu.*', 'mauphieu.TEN_MP', 'noidung_pdg.TEN_NDPDG')
     ->get();
     return view('update_mau_phieu')
     ->with('mp', '$mauphieu')
     ->with('ct_mp', 'chitiet_mauphieu');
 }

 public function getmauphieu(Request $request)
 {
    $mauphieu_chon = mauphieu::find($request->mauphieu);
    $chitiet_mauphieu = chitiet_mauphieu::all();
    $chitiet_mauphieu_nhap = chitiet_mauphieu::where('MAUPHIEU_ID', '=', $mauphieu_chon)->get();
    $mauphieu = mauphieu::all();
    $noidung_pdg =noidung_pdg::all();
    return view('update_mau_phieu')
    ->with('mp_c', $mauphieu_chon)
    ->with('ct_mp', $chitiet_mauphieu)
    ->with('ct_mp_n', $chitiet_mauphieu_nhap)
    ->with('mp', $mauphieu)
    ->with('nd_pdg', $noidung_pdg);


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

        // $mauphieu_chon = mauphieu::find($request->mauphieu);
        // $chitiet_mauphieu = DB::table('chitiet_mauphieu')
        // ->join('mauphieu','chitiet_mauphieu.MAUPHIEU_ID','=','mauphieu.ID')
        // ->where('MAUPHIEU_ID', '=', $mauphieu_chon)
        // ->get();
        // foreach($chitiet_mauphieu as $value){
        //     $value->delete();
        // }
        // $chitiet_mauphieu =  $request->chitiet_mauphieu;

        // if($chitiet_mauphieu != NULL){
        //     foreach($chitiet_mauphieu as $ct_mp)
        //     {
        //         $data = new chitiet_mauphieu();
        //         $data->MAUPHIEU_ID = $request->mauphieu;
        //         $data->NOIDUNG_PDG_ID = $ct_mp;
        //         $data->THUTU_NOIDUNG = $request->thutu;
        //         $data->save();

        //     }
        // }
        $mauphieu = mauphieu::find($request->mauphieu);
        $chitiet_mauphieu = DB::table('chitiet_mauphieu')
        ->join('mauphieu','chitiet_mauphieu.MAUPHIEU_ID','=','mauphieu.ID')
        ->where('MAUPHIEU_ID', '=', $mauphieu)
        ->get();
        $noidung_pdg = $request->noidung_pdg;
        foreach ($noidung_pdg as $nd_pdg) {
            $chitiet_mauphieu->MAUPHIEU_ID = $request->MAUPHIEU_ID;
            $chitiet_mauphieu->NOIDUNG_PDG_ID = $nd_pdg;
            $chitiet_mauphieu->save();
        }

        session()->flash('flash_mesage','Cập nhật dữ liệu thành công');
        return redirect()->back();
    }

    public function show_mauphieu(Request $request){
        $mauphieu_chon = mauphieu::find($request->mauphieu);
        $chitiet_mauphieu = DB::table('chitiet_mauphieu')
        ->join('mauphieu', 'mauphieu.ID', '=', 'chitiet_mauphieu.MAUPHIEU_ID')
        ->join('noidung_pdg', 'noidung_pdg.ID', '=', 'chitiet_mauphieu.NOIDUNG_PDG_ID')
        ->where('MAUPHIEU_ID', '=', $mauphieu_chon)
        ->select('chitiet_mauphieu.*','mauphieu.TEN_MP', 'noidung_pdg.TEN_NDPDG')
        ->get();
        $mauphieu = mauphieu::all();

        return view('upadte_chitiet_mauphieu')
        ->with('mp_c', $mauphieu_chon)
        ->with('ct_mp', $chitiet_mauphieu);


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
