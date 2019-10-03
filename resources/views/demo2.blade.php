@extends('layouts.app')

@section('content')

@if(Session::has('success_message'))
<div class="alert alert-success">
  <span class="glyphicon glyphicon-ok"></span>
  {!! session('success_message') !!}

  <button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times;</span>
  </button>

</div>
@endif

<div class="panel panel-default">

  <div class="panel-heading clearfix">

    <div class="pull-left">
      <h4 class="mt-5 mb-5">Namhocs</h4>
    </div>

  </div>


  <div class="panel-body panel-body-with-table">
    <div >
      <form method="post" action="" >
       <label class="col-md-2 control-label">Chọn Năm học</label>
       <div class="col-md-4">
        <select class="form-control" name="namhoc_id" id="namhoc_id">
          @foreach($nh as $val)
          <option @if($tndp->namhoc_id == $val->id ) selected @endif value="{{$val->id}}">{{$val->namhoc}}</option>
          @endforeach
        </select>
      </div>
      
      {!! csrf_field() !!}
      <table class="table" border="0" style="border-color: gray"  >

        <tr>
          <th id="blank">&nbsp;</th>
          @foreach($t as $thangnam)
          <th id="co1" headers="blank">{{$thangnam->thangnam}}</th>
          @endforeach
        </tr>
        @foreach($sv as $sinhvien)
        <tr>
          <th id="c1" headers="blank">{{$sinhvien->mssv}} - {{$sinhvien->hoten}}</th>
          @foreach($dp as $doanphi)
          <td>
            <input type="checkbox"
            @foreach($ddp as $dongdp)
            @if($dongdp->sinhvien_id == $sinhvien->id && $dongdp->id == $doanphi->id)
            checked
            @endif
            @endforeach 
            
            name="doanphithu[{{$sinhvien->id}}][{{ $thangnam->id }}]" value="doanphithu[{{$sinhvien->id}}][{{ $thangnam->id }}]">
            <input type="hidden" name="thangnamdp" value="$tndp->id">  
          </td>
          @endforeach

        </tr>
        @endforeach
       

      </table>
      
      <div class="form-group">
        <div class="col-md-offset-6 col-md-6">
          <input class="btn btn-primary" type="submit" value="Lưu lại">
        </div>
      </div>
    </form>


  </div>
</div>

<div class="panel-footer">
  {!! $sv->render() !!}
</div>



</div>
@endsection