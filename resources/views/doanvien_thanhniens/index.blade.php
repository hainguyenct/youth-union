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
                <h4 class="mt-5 mb-5">Doanvien Thanhniens</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('doanvien_thanhniens.doanvien_thanhnien.create') }}" class="btn btn-success" title="Create New Doanvien Thanhnien">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($doanvienThanhniens) == 0)
            <div class="panel-body text-center">
                <h4>No Doanvien Thanhniens Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>P H U O N G  X A</th>
                            <th>C H I D O A N</th>
                            <th>T O N G I A O</th>
                            <th>P H U O N G  X A</th>
                            <th>D A N T O C</th>
                            <th>T E N  S V</th>
                            <th>N G A Y S I N H  S V</th>
                            <th>D I A C H I  S V</th>
                            <th>P H A I  S V</th>
                            <th>S D T  S V</th>
                            <th>E M A I L  S V</th>
                            <th>N G A Y V A O D O A N  S V</th>
                            <th>N O I V A O D O A N  S V</th>
                            <th>M A T K H A U  D V</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($doanvienThanhniens as $doanvienThanhnien)
                        <tr>
                            <td>{{ optional($doanvienThanhnien->PhuongXa)->TEN_PX }}</td>
                            <td>{{ optional($doanvienThanhnien->Chidoan)->TEN_CD }}</td>
                            <td>{{ optional($doanvienThanhnien->Tongiao)->TEN_TG }}</td>
                            <td>{{ optional($doanvienThanhnien->PhuongXa)->TEN_PX }}</td>
                            <td>{{ optional($doanvienThanhnien->Dantoc)->TEN_DT }}</td>
                            <td>{{ $doanvienThanhnien->TEN_SV }}</td>
                            <td>{{ $doanvienThanhnien->NGAYSINH_SV }}</td>
                            <td>{{ $doanvienThanhnien->DIACHI_SV }}</td>
                            <td>{{ $doanvienThanhnien->PHAI_SV }}</td>
                            <td>{{ $doanvienThanhnien->SDT_SV }}</td>
                            <td>{{ $doanvienThanhnien->EMAIL_SV }}</td>
                            <td>{{ $doanvienThanhnien->NGAYVAODOAN_SV }}</td>
                            <td>{{ $doanvienThanhnien->NOIVAODOAN_SV }}</td>
                            <td>{{ $doanvienThanhnien->MATKHAU_DV }}</td>

                            <td>

                                <form method="POST" action="{!! route('doanvien_thanhniens.doanvien_thanhnien.destroy', $doanvienThanhnien->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('doanvien_thanhniens.doanvien_thanhnien.show', $doanvienThanhnien->ID ) }}" class="btn btn-info" title="Show Doanvien Thanhnien">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('doanvien_thanhniens.doanvien_thanhnien.edit', $doanvienThanhnien->ID ) }}" class="btn btn-primary" title="Edit Doanvien Thanhnien">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Doanvien Thanhnien" onclick="return confirm(&quot;Click Ok to delete Doanvien Thanhnien.&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $doanvienThanhniens->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection