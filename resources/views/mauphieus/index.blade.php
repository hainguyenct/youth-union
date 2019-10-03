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
                <h4 class="mt-5 mb-5">Mauphieus</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('mauphieus.mauphieu.create') }}" class="btn btn-success" title="Create New Mauphieu">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($mauphieus) == 0)
            <div class="panel-body text-center">
                <h4>No Mauphieus Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>T E N  M P</th>
                            <th>N G A Y T A O  M P</th>
                            <th>N G A Y C A O N H A T  M P</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($mauphieus as $mauphieu)
                        <tr>
                            <td>{{ $mauphieu->TEN_MP }}</td>
                            <td>{{ $mauphieu->NGAYTAO_MP }}</td>
                            <td>{{ $mauphieu->NGAYCAONHAT_MP }}</td>

                            <td>

                                <form method="POST" action="{!! route('mauphieus.mauphieu.destroy', $mauphieu->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('mauphieus.mauphieu.show', $mauphieu->ID ) }}" class="btn btn-info" title="Show Mauphieu">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('mauphieus.mauphieu.edit', $mauphieu->ID ) }}" class="btn btn-primary" title="Edit Mauphieu">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Mauphieu" onclick="return confirm(&quot;Click Ok to delete Mauphieu.&quot;)">
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
            {!! $mauphieus->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection