
@extends('layouts.layout(demo2).app(demo2)')


@section('content')
<!--form-->
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
    <form method="get" action="{{route('doanphithu_getnam')}}" >
     <label class="col-md-2 control-label">Chọn Năm học</label>
     <div class="col-md-4">
      <select class="form-control showtick" name="namhoc_id" id="namhoc_id">
        @foreach($nh as $val)
        <option @if($tndp->namhoc_id == $val->id ) selected @endif value="{{$val->id}}">{{$val->namhoc}}</option>
        @endforeach
      </select>
    </div>
    <div class="col-md-2 control-label">
      <button type='submit' class="btn btn-info"> Liệt kê </button>
<!--       <a href="{{route('doanphithu_index')}}"><span> <i class="fa fa-repeat"></i></span></a> -->
    </div>
  </form>
<form method="post" action="{{route('doanphithu_store')}}">
  {!! csrf_field() !!}
  <table class="table" border="0" style="border-color: gray"  >
    <thead>
      <tr>
        <th id="blank">&nbsp;</th>
        @foreach($tn as $thangnam)
        <th id="co1" headers="blank">{{$thangnam->thangnam}}</th>
        @endforeach
        <th>Số tháng thiếu</th>
      </tr>
    </thead>
    <tbody>
      @foreach($sv as $sinhvien)
      <tr>
        <th id="c1" headers="blank">{{$sinhvien->hoten}} - {{$sinhvien->mssv}}</th>
        
        @foreach($dp as $doanphi)
        <td>

          <input type="checkbox" 
          @foreach($dpt as $doanphithu)
          @if($doanphithu->sinhvien_id == $sinhvien->id && $doanphithu->thangnam_id == $doanphi->id && $doanphithu->dadong == 1)
          checked
          @endif
          @endforeach
          name="doanphi[{{$sinhvien->id}}][{{ $doanphi->id }}]">

          <!--               <input type="hidden" name="thangnamdp" value="{{ $doanphi->id }}">   -->

        </td>
        @endforeach
        
      </tr>
      @endforeach
    </tbody>

    <div class="form-group">

      <label class="col-md-2 control-label">Happy</label>
      
      <div class="col-md-4">

        <input class="form-control" type="checkbox" >

      </div>

    </div>
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

