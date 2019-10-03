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
                <h4 class="mt-5 mb-5">Vaitros</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('vaitros.vaitro.create') }}" class="btn btn-success" title="Create New Vaitro">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($vaitros) == 0)
            <div class="panel-body text-center">
                <h4>No Vaitros Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>D O A N V I E N  T H A N H N I E N</th>
                            <th>T E N  V T</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($vaitros as $vaitro)
                        <tr>
                            <td>{{ optional($vaitro->DoanvienThanhnien)->PHUONG_XA_ID_QQ }}</td>
                            <td>{{ $vaitro->TEN_VT }}</td>

                            <td>

                                <form method="POST" action="{!! route('vaitros.vaitro.destroy', $vaitro->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('vaitros.vaitro.show', $vaitro->ID ) }}" class="btn btn-info" title="Show Vaitro">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('vaitros.vaitro.edit', $vaitro->ID ) }}" class="btn btn-primary" title="Edit Vaitro">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Vaitro" onclick="return confirm(&quot;Click Ok to delete Vaitro.&quot;)">
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
            {!! $vaitros->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection