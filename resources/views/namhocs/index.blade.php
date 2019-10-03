<link href="{{asset('template/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@extends('layouts.layout(demo2).app(demo2)')

@section('content')


<!-- Google Fonts -->

<!-- JQuery DataTable Css -->


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
            <h4 class="mt-5 mb-5">Namhocs</h4>
        </div>

        <div class="btn-group btn-group-sm pull-right" role="group">
            <a href="{{ route('namhocs.namhoc.create') }}" class="btn btn-success" title="Create New Namhoc">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            </a>
        </div>

    </div>

    <div class="container">
        <div class="card bg-light mt-3">
<!--             <div class="card-header">
                Laravel 5.7 Import Export Excel to database Example
            </div> -->
            <div class="card-body">
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import User Data</button>
                    <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
                </form>
            </div>
        </div>
    </div>

    @if(count($namhocs) == 0)
    <div class="panel-body text-center">
        <h4>No Namhocs Available.</h4>
    </div>
    @else
    <div class="panel-body panel-body-with-table">
        <div class="table-responsive body-box">
            <!-- id="example1" -->
            <table  id="example1" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Stt</th>
                        <th>Năm học</th>

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($namhocs as $namhoc)
                    <tr>
                        <td>{{ $namhoc->id }}</td>
                        <td>{{ $namhoc->namhoc }}</td>

                        <td>

                            <form method="POST" action="{!! route('namhocs.namhoc.destroy', $namhoc->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                <div class="btn-group btn-group-xs pull-right" role="group">
                                    <a href="{{ route('namhocs.namhoc.show', $namhoc->id ) }}" class="btn btn-info" title="Show Namhoc">
                                        <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                    </a>
                                    <a href="{{ route('namhocs.namhoc.edit', $namhoc->id ) }}" class="btn btn-primary" title="Edit Namhoc">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>

                                    <button type="submit" class="btn btn-danger" title="Delete Namhoc" onclick="return confirm(&quot;Click Ok to delete Namhoc.&quot;)">
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
        {!! $namhocs->render() !!}
    </div>

    @endif
    
</div>




@endsection


