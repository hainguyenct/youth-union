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
                <h4 class="mt-5 mb-5">Phieudanhgia Doanviens</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('phieudanhgia_doanviens.phieudanhgia_doanvien.create') }}" class="btn btn-success" title="Create New Phieudanhgia Doanvien">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($phieudanhgiaDoanviens) == 0)
            <div class="panel-body text-center">
                <h4>No Phieudanhgia Doanviens Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>N A M H O C</th>
                            <th>S I N H V I E N</th>
                            <th>T E N  P D G D V</th>
                            <th>D I E M R E N L U Y E N</th>
                            <th>D I E M T R U N G B I N H</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($phieudanhgiaDoanviens as $phieudanhgiaDoanvien)
                        <tr>
                            <td>{{ optional($phieudanhgiaDoanvien->Namhoc)->namhoc }}</td>
                            <td>{{ optional($phieudanhgiaDoanvien->Sinhvien)->mssv }}</td>
                            <td>{{ $phieudanhgiaDoanvien->TEN_PDGDV }}</td>
                            <td>{{ $phieudanhgiaDoanvien->DIEMRENLUYEN }}</td>
                            <td>{{ $phieudanhgiaDoanvien->DIEMTRUNGBINH }}</td>

                            <td>

                                <form method="POST" action="{!! route('phieudanhgia_doanviens.phieudanhgia_doanvien.destroy', $phieudanhgiaDoanvien->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('phieudanhgia_doanviens.phieudanhgia_doanvien.show', $phieudanhgiaDoanvien->ID ) }}" class="btn btn-info" title="Show Phieudanhgia Doanvien">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('phieudanhgia_doanviens.phieudanhgia_doanvien.edit', $phieudanhgiaDoanvien->ID ) }}" class="btn btn-primary" title="Edit Phieudanhgia Doanvien">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Phieudanhgia Doanvien" onclick="return confirm(&quot;Click Ok to delete Phieudanhgia Doanvien.&quot;)">
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
            {!! $phieudanhgiaDoanviens->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection