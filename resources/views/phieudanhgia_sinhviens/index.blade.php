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
                <h4 class="mt-5 mb-5">Phieudanhgia Sinhviens</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('phieudanhgia_sinhviens.phieudanhgia_sinhvien.create') }}" class="btn btn-success" title="Create New Phieudanhgia Sinhvien">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($phieudanhgiaSinhviens) == 0)
            <div class="panel-body text-center">
                <h4>No Phieudanhgia Sinhviens Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>M A U P H I E U</th>
                            <th>N A M H O C</th>
                            <th>S I N H V I E N</th>
                            <th>X E P L O A I  S V</th>
                            <th>T E N  P D G S V</th>
                            <th>D I E M R E N L U Y E N</th>
                            <th>D I E M T R U N G B I N H</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($phieudanhgiaSinhviens as $phieudanhgiaSinhvien)
                        <tr>
                            <td>{{ optional($phieudanhgiaSinhvien->Mauphieu)->TEN_MP }}</td>
                            <td>{{ optional($phieudanhgiaSinhvien->nAMHOC)->namhoc }}</td>
                            <td>{{ optional($phieudanhgiaSinhvien->Sinhvien)->mssv }}</td>
                            <td>{{ optional($phieudanhgiaSinhvien->xEPLOAISV)->id }}</td>
                            <td>{{ $phieudanhgiaSinhvien->TEN_PDGSV }}</td>
                            <td>{{ $phieudanhgiaSinhvien->DIEMRENLUYEN }}</td>
                            <td>{{ $phieudanhgiaSinhvien->DIEMTRUNGBINH }}</td>

                            <td>

                                <form method="POST" action="{!! route('phieudanhgia_sinhviens.phieudanhgia_sinhvien.destroy', $phieudanhgiaSinhvien->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('phieudanhgia_sinhviens.phieudanhgia_sinhvien.show', $phieudanhgiaSinhvien->ID ) }}" class="btn btn-info" title="Show Phieudanhgia Sinhvien">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('phieudanhgia_sinhviens.phieudanhgia_sinhvien.edit', $phieudanhgiaSinhvien->ID ) }}" class="btn btn-primary" title="Edit Phieudanhgia Sinhvien">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Phieudanhgia Sinhvien" onclick="return confirm(&quot;Click Ok to delete Phieudanhgia Sinhvien.&quot;)">
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
            {!! $phieudanhgiaSinhviens->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection