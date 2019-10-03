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
        $thangnam_dp = thangnam::orderBy('id','aSC')->first();
        $nam_dp = namhoc::orderBy('id','asc')->first();
        $namhoc = namhoc::all();
        $thangnam = thangnam::all();
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
        $doanphithu = doanphithu::all();
        $nam_dp = namhoc::find($request->namhoc_id);
        $namhoc = namhoc::all();
        $thangnam = thangnam::all();
        $sinhvien = sinhvien::paginate(10);
        // $doanphi = doanphithu::with('thangnam')->get();
        $doanphi = doanphithu::where('thangnam_id','=',$thangnam_dp->id)->get();
        // $doanphi = DB::table('doanphithu')
        // ->join('thangnam','doanphithu.thangnam_id','=','thangnam.id')
        // ->where('thangnam.namhoc_id','=',$nam_dp->id)
        // ->get();
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
       // $thangnam = thangnam::select('id');
        //$sinhvien = sinhvien::select('id');
        // SELECT LAY 1 COT
         // $thangnam= thangnam::pluck('ID')->all();
         // $sinhvien = sinhvien::pluck('ID')->all();
       // dd($sinhvien);
    //  $doanphithu = doanphithu::where('thangnam_id',$request->id)->get();
    //  foreach($doanphithu as $value){
    //     $value->delete();
    // }

        // $doanphithu = doanphithu::where('thangnam_id','$idtn')->get();
        // foreach($doanphithu as $value){
        //     $value->delete();
        // }
        $doanphi =  $request->doanphi;
    //dd($doanphi);
    // $all_chain = array("nguyen") ;
        if($doanphi != NULL){
            foreach($doanphi as $idsv => $value)
            {
                //echo "<br/>".$idsv;
                foreach($value as $idtn => $gt)
                {
                    $data = new doanphithu();
                //($data);
                    $data->sinhvien_id = $idsv;
                    $data->thangnam_id = $idtn;
                    $data->dadong = 1;
                // $ghepchuoi=  (string)($idsv) . "_" . (string)($idtn);
                // array_push ($all_chain, $ghepchuoi);
                    $data->save();
                    // $doanphi = Doanphi::find($iddp);
                    // $doanvien = Doanvien::find($idsv);
                    // echo "<br/>".$doanvien->name."->".$doanphi->thang->thang;
                }

            }
        }
    //dd($all_chain);
    //dd($sinhvien);
    // foreach ($sinhvien as $sv){
    //     foreach ($thangnam as $tn) {
    //         $gc=  (string)($sv) . "_" . (string)($tn);
    //         //dd($gc);
    //         $data = new doanphithu();
    //         if (in_array($gc, $all_chain)){
    //             $data->dadong = 1;
    //             echo "Hello";
    //         }else{
    //             $data->dadong = 0;   
    //             echo "no no";
    //         }
    //        //$data = new doanphithu();
    //             //($data);
    //         ///dd($data);
    //         $data->sinhvien_id = $sv;
    //         $data->thangnam_id = $tn;
    //         $data->save();

    //     }
    // }
        session()->flash('flash_mesage','Cập nhật dữ liệu thành công');
        return redirect()->back();
    }
    // public function update(Request $request)
    // {
    //     $dongdp = Dong_Doanphi::where('namdp',$request->namdp)->get();
    //3     foreach($dongdp as $value){
    //         $value->delete();
    //     }

    //     $doanphi =  $request->doanphi;
    //     if($doanphi != NULL){
    //         foreach($doanphi as $idsv => $value)
    //         {
    //             //echo "<br/>".$idsv;
    //             foreach($value as $iddp => $gt)
    //             {
    //                 $data = new Dong_Doanphi();
    //                 $data->doanvien_id = $idsv;
    //                 $data->doanphi_id = $iddp;
    //                 $data->namdp = $request->namdp;
    //                 $data->save();
    //                 // $doanphi = Doanphi::find($iddp);
    //                 // $doanvien = Doanvien::find($idsv);
    //                 // echo "<br/>".$doanvien->name."->".$doanphi->thang->thang;
    //             }
    //         }
    //     }
    //     session()->flash('flash_mesage','Cập nhật dữ liệu thành công');
    //     return redirect()->back();
    //     }

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
