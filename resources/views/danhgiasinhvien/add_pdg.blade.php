 
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
      <h4 class="mt-5 mb-5">DANH SÁCH SINH VIÊN ĐÁNH GIÁ</h4>
    </div>
  </div>
  <br>

  <div class="panel-body panel-body-with-table">
    <form method="" action="" >
      {!! csrf_field() !!}
      <table id="example1" class="table table-striped table-bordered table-hover">

        <thead>
          <th>STT</th>
          <th>MSSV</th>
          <th>HỌ TÊN </th>
          <th>NĂM SINH</th>
          <th>THAO TÁC</th>


        </thead>
        <tbody>
          @foreach($sv as $sinhvien)

          <tr>

            <td>
              {{$sinhvien->id}}
            </td>
            <td>
              {{$sinhvien->mssv}}
            </td>
            <td>         
              {{$sinhvien->hoten}}          
            </td>
            <td>
              {{$sinhvien->namsinh}}
            </td>
            <td>
             <div style="align:center" class="btn-group">
              <a href="{{route('danhgia_sinhvien.create', $sinhvien->id)}}">
                <button type="button"  class="btn btn-success active" role="button">Đánh giá <span class=" glyphicon glyphicon-pencil"></span>            
                </button>
              </a>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </form>
</div>
</div>
</div>
@endsection 