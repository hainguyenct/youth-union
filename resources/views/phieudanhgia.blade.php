 
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
      <a href="{{ route('createmauphieu_create') }}" class="btn btn-success" title="Create New Mẫu Phiếu">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
      </a>
    </div>
  </div>
  <br>

  <div class="panel-body panel-body-with-table">
    <form method="post" action="{{route('show_chitiet_mauphieu')}}" >
      {!! csrf_field() !!}
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Họ Tên</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <table id="example1" class="table table-striped table-bordered table-hover">
          <div class="col-lg-6">
            <div class="input-group">
              <span class="input-group-addon">
                <label for="dtb1">Điểm trung bình hk1</label>
              </span>
              <input type="text" class="form-control" id="dtb1">
            </div>
            <!-- /input-group -->
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-lg-6">
            <div class="input-group">
              <span class="input-group-addon">
                <label for="dtb2">Điểm trung bình hk2
                </span>
                <input type="text" class="form-control" id="dtb2">
              </div>
              <!-- /input-group -->
            </div>
            <!-- /.col-lg-6 -->
            <br><br><br>
            <div class="col-lg-6">
              <div class="input-group">
                <span class="input-group-addon">
                  <label for="drl1">Điểm rèn luyện hk1</label>
                </span>
                <input type="text" class="form-control" id="drl1">
              </div>
              <!-- /input-group -->
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
              <div class="input-group">
                <span class="input-group-addon">
                  <label for="drl2">Điểm rèn luyện hk2
                  </span>
                  <input type="text" class="form-control" id="drl2">
                </div>
                <!-- /input-group -->
              </div>
              <!-- /.col-lg-6 -->
              <br><br><br>

              <thead>
                <th>Stt</th>
                <th>Nội dung</th>


              </thead>
              <tbody>
                <?php// dd($ct_mp)?>
                @foreach($ct_mp as $chitiet_mauphieu)

                <tr>

                  <td>{{$chitiet_mauphieu->THUTU_NOIDUNG}}</td>
                  <td id="c1" headers="blank">         
                    {{$chitiet_mauphieu->TEN_NDPDG}}          
                  </td>
                  <td><input type="{{$chitiet_mauphieu->TEN_KIEU_DULIEU}}" name="noidung"></td>

                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="form-group">
              <div class="col-md-offset-6 col-md-6">
                <input class="btn btn-primary" type="submit" value="Lưu lại">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection 