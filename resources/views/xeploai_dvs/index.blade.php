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
                <h4 class="mt-5 mb-5">Xeploai Dvs</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('xeploai_dvs.xeploai_dv.create') }}" class="btn btn-success" title="Create New Xeploai Dv">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($xeploaiDvs) == 0)
            <div class="panel-body text-center">
                <h4>No Xeploai Dvs Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>T E N  X L D V</th>
                            <th>D I E M D A T  D V</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($xeploaiDvs as $xeploaiDv)
                        <tr>
                            <td>{{ $xeploaiDv->TEN_XLDV }}</td>
                            <td>{{ $xeploaiDv->DIEMDAT_DV }}</td>

                            <td>

                                <form method="POST" action="{!! route('xeploai_dvs.xeploai_dv.destroy', $xeploaiDv->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('xeploai_dvs.xeploai_dv.show', $xeploaiDv->ID ) }}" class="btn btn-info" title="Show Xeploai Dv">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('xeploai_dvs.xeploai_dv.edit', $xeploaiDv->ID ) }}" class="btn btn-primary" title="Edit Xeploai Dv">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Xeploai Dv" onclick="return confirm(&quot;Click Ok to delete Xeploai Dv.&quot;)">
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
            {!! $xeploaiDvs->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection