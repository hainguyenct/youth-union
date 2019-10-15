 
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
      <h4 class="mt-5 mb-5">Cập nhật mẫu phiếu</h4>
    </div>
    <div class="btn-group btn-group-sm pull-right" role="group">
      <a href="{{ route('createmauphieu_index') }}" method="post" class="btn btn-success" title="Create New Namhoc">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
      </a>
    </div>
  </div>
  <br>

  <div class="panel-body panel-body-with-table">
    <form method="" action="" >
      {!! csrf_field() !!}
      <div class="box-body">

        <div class="form-group">
          <label for="sp_ten">HỌ TÊN SINH VIÊN</label>
          <input class="form-control" id="hoten_sv" name="hoten_sv" placeholder="Nhập tên sản phẩm" type="text" value="{{old('hoten',$sinhvien->hoten) }}">
        </div>
        <div class="form-group">
          <label for="nsp_ma">MẪU PHIẾU</label>
          <div class="col-3">
            <select class="form-control" id="nsp_ma" name="nsp_ma">
              @foreach($dsnhom as $nhomsp)
              <option value="{{$nhomsp->nsp_ma}}">{{$nhomsp->nsp_ten}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="lsp_ma">NĂM HỌC</label>
          <div class="col-3">
            <select class="form-control" id="lsp_ma" name="lsp_ma">
              @foreach($dsloai as $loaisp)
              <option value="{{$loaisp->lsp_ma}}">{{$loaisp->lsp_ten}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="usr_id">XẾP LOẠI ĐOÀN VIÊN</label>
          <div class="col-3">
            <select class="form-control" id="usr_id" name="usr_id">
              @foreach($dsuser as $user)
              <option value="{{$user->id}}">{{$user->username}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="sp_mavach">TÊN PHIẾU ĐÁNH GIÁ</label>
          <input class="form-control" id="sp_mavach" name="sp_mavach" placeholder="Nhập mã vạch" type="text" value="{{old('sp_mavach') }}">
        </div>
        <div class="form-group">
          <label for="sp_donvitinh">ĐIỂM TRUNG BÌNH</label>
          <input class="form-control" id="sp_donvitinh" name="sp_donvitinh" placeholder="Nhập đơn vị tính" type="text" value="{{old('sp_donvitinh') }}">
        </div>
        <div class="form-group">
          <label for="giaban">ĐIỂM RÈN LUYỆN</label>
          <input class="form-control" id="giaban" name="giaban" placeholder="Nhập giá bán" type="text" value="{{old('giaban') }}">
        </div>
        
    <!-- /.card-body -->

    <div class="box-footer">
      <button  class="btn btn-success"><a href="{{ route('sanpham.index') }}" style="color: white;"> Come back </a></button>
      <button type="submit" class="btn btn-primary"> Submit </button>
    </div>
  </form>
</div>
</div>
</div>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection 