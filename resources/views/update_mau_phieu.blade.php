 
@extends('layouts.layout(demo2).app(demo2)')


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
@if(Session::has('error_message'))
<div class="alert alert-danger">
  <span class="glyphicon glyphicon-remove"></span>
  {!! session('error_message') !!}

  <button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times;</span>
  </button>

</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="panel panel-default">

  <div class="panel-heading clearfix">

    <div class="pull-left">
      <h4 class="mt-5 mb-5">Tạo mẫu phiếu</h4>
    </div>

  </div>
  <br>

  <div class="panel-body panel-body-with-table">
    <form method="post" action="{{route('createmauphieu_update')}}" >
      {!! csrf_field() !!}
      <label class="col-md-2 control-label">Chọn mẫu phiếu</label>
      <div class="col-md-4">
        <select class="form-control" name="mauphieu">
          <option disabled selected>--Chọn mẫu phiếu--</option>
          @foreach($mp as $mauphieu)
          <option  value="{{$mauphieu->ID}}">
            {{$mauphieu->TEN_MP}}
          </option>
          @endforeach
        </select>
      </div>
      <div class="col-md-2 control-label">
        <button type='submit' class="btn btn-info" href="{{ route('sanpham.edit',['chitiet' => $sanpham->sp_ma]) }}"> Liệt kê </button>
        <!--       <a href="{{route('doanphithu_index')}}"><span> <i class="fa fa-repeat"></i></span></a> -->
      </div>
      <br><br><br>
      <table id="example1" class="table table-striped table-bordered table-hover">
        <thead>
          <th>Stt</th>
          <th>Nội dung</th>
          <th></th>


        </thead>
        <tbody>
          @foreach($nd_pdg as $noidung_pdg)

          <tr>
            <td>{{$noidung_pdg->ID}}</td>
            <td id="c1" headers="blank">{{$noidung_pdg->TEN_NDPDG}}</td>
            <td><input type="checkbox" name="noidung_pdg[]" value="{{ $noidung_pdg->ID }}"></td>

          </tr>
          @endforeach
        </tbody>

      </table>
      <div class="form-group">
        <div class="col-md-offset-6 col-md-6">
          <input class="btn btn-primary" type="submit" value="Lưu lại">
        </div>
      </div>
    </form>

  </div>


</div>




</div>
@endsection 