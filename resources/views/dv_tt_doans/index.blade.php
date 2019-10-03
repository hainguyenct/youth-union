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
                <h4 class="mt-5 mb-5">Dv Tt Doans</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('dv_tt_doans.dv_tt_doan.create') }}" class="btn btn-success" title="Create New Dv Tt Doan">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($dvTtDoans) == 0)
            <div class="panel-body text-center">
                <h4>No Dv Tt Doans Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>N G A Y T T D O A N</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dvTtDoans as $dvTtDoan)
                        <tr>
                            <td>{{ $dvTtDoan->NGAYTTDOAN }}</td>

                            <td>

                                <form method="POST" action="{!! route('dv_tt_doans.dv_tt_doan.destroy', $dvTtDoan->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('dv_tt_doans.dv_tt_doan.show', $dvTtDoan->ID ) }}" class="btn btn-info" title="Show Dv Tt Doan">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('dv_tt_doans.dv_tt_doan.edit', $dvTtDoan->ID ) }}" class="btn btn-primary" title="Edit Dv Tt Doan">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Dv Tt Doan" onclick="return confirm(&quot;Click Ok to delete Dv Tt Doan.&quot;)">
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
            {!! $dvTtDoans->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection