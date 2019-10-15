 
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
      <label class="col-md-2 control-label">Chọn mẫu phiếu</label>
      <div class="col-md-4">
        <select class="form-control" name="mauphieu">
          <option disabled selected>--Chọn mẫu phiếu--</option>
          @foreach($mp as $mauphieu)
          <option  value="{{$mauphieu->ID}}" selected>
            {{$mauphieu->TEN_MP}}
          </option>
          @endforeach
        </select>
      </div>
      <div class="col-md-2 control-label">
        <button type='submit' class="btn btn-info" href=""> Cập nhật </button>
      </div>
      <div>
        <button type='submit' class="btn btn-info"> Xem mẫu phiếu </button>
      </div class="col-md-2 control-label">
      <br><br><br>
      <table id="example1" class="table table-striped table-bordered table-hover">

        <thead>
          <th>Stt</th>
          <th>Mẫu phiếu</th>
          <th>Nội dung</th>
          <th>Thứ tự</th>


        </thead>
        <tbody>
          @foreach($nd_mp as $noidung_mauphieu)

          <tr>

            <td>
              {{$noidung_mauphieu->ID}}
            </td>
            <td>
              {{$noidung_mauphieu->TEN_MP}}
            </td>
            <td>         
              {{$noidung_mauphieu->TEN_NDPDG}}          
            </td>
            <td>
              {{$noidung_mauphieu->THUTU_NOIDUNG}}
            </td>
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