 
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

<div class="panel panel-default">

  <div class="panel-heading clearfix">

    <div class="pull-left">
      <h4 class="mt-5 mb-5">TẠO PHIẾU ĐÁNH GIÁ SINH VIÊN</h4>
    </div>
  </div>
  <br>

  <div class="panel-body panel-body-with-table">
    <form method="" action="" >
      {!! csrf_field() !!}
      <div class="box-body">

        <div class="form-group">
          <label for="sinhvien_id">HỌ TÊN SINH VIÊN</label>
          <input class="form-control" id="sinhvien_id" name="sinhvien_id" placeholder="Nhập tên sản phẩm" type="text" value="{{$sv->hoten}}">
        </div>
        <div class="form-group">
          <label for="mauphieu">MẪU PHIẾU</label>
          <div class="col-3">
            <select class="form-control" id="mauphieu" name="mauphieu">
              @foreach($mp as $mauphieu)
              <option value="{{$mauphieu->ID}}">{{$mauphieu->TEN_MP}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="namhoc">NĂM HỌC</label>
          <div class="col-3">
            <select class="form-control" id="namhoc" name="namhoc">
              @foreach($nh as $namhoc)
              <option value="{{$namhoc->id}}">{{$namhoc->namhoc}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="xeploai">XẾP LOẠI ĐOÀN VIÊN</label>
          <div class="col-3">
            <select class="form-control" id="xeploai" name="xeploai">
              @foreach($xl_sv as $xeploai_sv)
              <option value="{{$xeploai_sv->ID}}">{{$xeploai_sv->TEN_XLSV}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="ten_pdgsv">TÊN PHIẾU ĐÁNH GIÁ</label>
          <input class="form-control" id="ten_pdgsv" name="ten_pdgsv" placeholder="Nhập mã vạch" type="text" value="{{old('ten_pdgsv') }}">
        </div>
        <div class="form-group">
          <label for="diemrenluyen">ĐIỂM TRUNG BÌNH</label>
          <input class="form-control" id="diemrenluyen" name="diemrenluyen" placeholder="Nhập đơn vị tính" type="text" value="{{old('diemrenluyen') }}">
        </div>
        <div class="form-group">
          <label for="diemrenluyen">ĐIỂM RÈN LUYỆN</label>
          <input class="form-control" id="diemrenluyen" name="diemrenluyen" placeholder="Nhập giá bán" type="text" value="{{old('diemrenluyen') }}">
        </div>
        
        <!-- /.card-body -->

        <div class="box-footer">
          <button  class="btn btn-success"><a href="" style="color: white;"> Come back </a></button>
          <button type="submit" class="btn btn-primary"> Submit </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection 