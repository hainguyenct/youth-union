<link href="{{asset('template/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@extends('layouts.app(demo)')

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
                <h4 class="mt-5 mb-5">Sinhviens</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('sinhviens.sinhvien.create') }}" class="btn btn-success" title="Create New Sinhvien">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($sinhviens) == 0)
            <div class="panel-body text-center">
                <h4>No Sinhviens Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-bordered table-striped table-hover js-basic-example dataTable ">
                    <thead>
                        <tr>
                            <th>Stt</th>
                            <th>Mssv</th>
                            <th>Hoten</th>
                            <th>Namsinh</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($sinhviens as $sinhvien)
                        <tr>
                            <td>{{ $sinhvien->id }}</td>
                            <td>{{ $sinhvien->mssv }}</td>
                            <td>{{ $sinhvien->hoten }}</td>
                            <td>{{ $sinhvien->hoten }}</td>

                            <td>

                                <form method="POST" action="{!! route('sinhviens.sinhvien.destroy', $sinhvien->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('sinhviens.sinhvien.show', $sinhvien->id ) }}" class="btn btn-info" title="Show Sinhvien">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('sinhviens.sinhvien.edit', $sinhvien->id ) }}" class="btn btn-primary" title="Edit Sinhvien">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Sinhvien" onclick="return confirm(&quot;Click Ok to delete Sinhvien.&quot;)">
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
            {!! $sinhviens->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection