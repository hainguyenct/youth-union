<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\namhoc;
use App\Models\thangnam;
use App\Models\sinhvien;
use App\Models\doanphithu;
use Illuminate\Http\Request;
use DB;
use Exception;


class doanphiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doanphithu = doanphithu::all();
        $nam_dp = namhoc::orderBy('id','asc')->first();
        $thangnam_dp = thangnam::orderBy('id','aSC')->where('namhoc_id','=',$nam_dp->id)->first();
        $namhoc = namhoc::all();
        $thangnam = thangnam::all()->where('namhoc_id','=',$nam_dp->id);
        $sinhvien = sinhvien::paginate(10);
        // $doanphi = doanphithu::with('thangnam')->get();
        $doanphi = thangnam::where('namhoc_id','=',$nam_dp->id)->get();
        // ->where('id','=',$thangnam_dp->id)
                    // ->where('namhoc_id','=',$nam_dp->id)
        // ->get();
        // $doanphi = DB::table('doanphithu')
        // ->join('thangnam','doanphithu.thangnam_id','=','thangnam.id')
        // ->where('thangnam.namhoc_id','=',$nam_dp->id)
        // ->get();
            // var_dump($dongdp);
        return view('demo(index)')
        ->with('dpt', $doanphithu)
        ->with('ndp', $nam_dp)
        ->with('tndp', $thangnam_dp)
        ->with('nh', $namhoc)
        ->with('tn', $thangnam)
        ->with('sv', $sinhvien)
        ->with('nda', $nam_dp)
        ->with('dp', $doanphi);
    }

    //     public function index(Request $request)
    // {
    //     $dongdp = Dong_Doanphi::all();
    //     $namhoc = Namhoc::all();
    //     $thang = Thang::all();
    //     $nam_dp = Namhoc::orderBy('namhoc_id','aSC')->first();
    //     $doanphi = Doanphi::where('nam_id',$nam_dp->namhoc_id)->get();
    //     $doanvien = Doanvien::paginate(10);
    //     // var_dump($dongdp);
    //     return view('backend.dongdoanphi.index')
    //     ->with('ddp', $dongdp)
    //     ->with('nh', $namhoc)
    //     ->with('dp', $doanphi)
    //     ->with('t', $thang)
    //     ->with('dv', $doanvien)
    //     ->with('ndp', $nam_dp);
    // }


    public function getNam(Request $request)
    {
        $nam_dp = namhoc::find($request->namhoc_id);
        $doanphithu = doanphithu::all();

        $thangnam_dp = thangnam::orderBy('id','aSC')->where('namhoc_id','=',$request->namhoc_id)->first();
        $namhoc = namhoc::all();
        $thangnam = thangnam::all()->where('namhoc_id','=',$nam_dp->id);
        $sinhvien = sinhvien::paginate(10);
        // $doanphi = doanphithu::with('thangnam')->get();
        // $doanphi = doanphithu::where('thangnam_id','=',$thangnam_dp->id)->get();
        $doanphi = thangnam::where('namhoc_id','=',$nam_dp->id)->get();
            // var_dump($dongdp);
        return view('demo(index)')
        ->with('dpt', $doanphithu)
        ->with('tndp', $thangnam_dp)
        ->with('nh', $namhoc)
        ->with('tn', $thangnam)
        ->with('sv', $sinhvien)
        ->with('dp', $doanphi);
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
    //  $doanphithu = doanphithu::where('thangnam_id',$idtn)->get();
    //  foreach($doanphithu as $value){
    //     $value->delete();
    // }
        //$doanphithu = doanphithu::all();
        // $doanphithu = doanphithu::where('sinhvien_id','=',$doanphithu1->sinhvien_id)->where('thangnam_id','=',$doanphithu1->thangnam_id)->get();
         $nam_dp = namhoc::find($request->namhoc_id);
        $doanphithu = DB::table('doanphithu')
        ->join('thangnam','doanphithu.thangnam_id','=','thangnam.id')
        ->where('thangnam.namhoc_id','=',$nam_dp )
        ->get();
        foreach($doanphithu as $value){
            $value->delete();
        }
        $doanphi =  $request->doanphi;

        if($doanphi != NULL){
            foreach($doanphi as $idsv => $value)
            {
                foreach($value as $idtn => $gt)
                {
                    $data = new doanphithu();
                    $data->sinhvien_id = $idsv;
                    $data->thangnam_id = $idtn;
                    $data->dadong = 1;
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
