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
                <h4 class="mt-5 mb-5">Chucvu Dvs</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('chucvu_dvs.chucvu_dv.create') }}" class="btn btn-success" title="Create New Chucvu Dv">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($chucvuDvs) == 0)
            <div class="panel-body text-center">
                <h4>No Chucvu Dvs Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>T E N  C H U C V U</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($chucvuDvs as $chucvuDv)
                        <tr>
                            <td>{{ $chucvuDv->TEN_CHUCVU }}</td>

                            <td>

                                <form method="POST" action="{!! route('chucvu_dvs.chucvu_dv.destroy', $chucvuDv->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('chucvu_dvs.chucvu_dv.show', $chucvuDv->ID ) }}" class="btn btn-info" title="Show Chucvu Dv">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('chucvu_dvs.chucvu_dv.edit', $chucvuDv->ID ) }}" class="btn btn-primary" title="Edit Chucvu Dv">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Chucvu Dv" onclick="return confirm(&quot;Click Ok to delete Chucvu Dv.&quot;)">
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
            {!! $chucvuDvs->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection