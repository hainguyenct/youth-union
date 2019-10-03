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
                <h4 class="mt-5 mb-5">Phieubau Uutus</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('phieubau_uutus.phieubau_uutu.create') }}" class="btn btn-success" title="Create New Phieubau Uutu">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($phieubauUutus) == 0)
            <div class="panel-body text-center">
                <h4>No Phieubau Uutus Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>C H I D O A N</th>
                            <th>S O P H I E U  T O N G</th>
                            <th>N G A Y  B A U</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($phieubauUutus as $phieubauUutu)
                        <tr>
                            <td>{{ optional($phieubauUutu->Chidoan)->TEN_CD }}</td>
                            <td>{{ $phieubauUutu->SOPHIEU_TONG }}</td>
                            <td>{{ $phieubauUutu->NGAY_BAU }}</td>

                            <td>

                                <form method="POST" action="{!! route('phieubau_uutus.phieubau_uutu.destroy', $phieubauUutu->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('phieubau_uutus.phieubau_uutu.show', $phieubauUutu->ID ) }}" class="btn btn-info" title="Show Phieubau Uutu">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('phieubau_uutus.phieubau_uutu.edit', $phieubauUutu->ID ) }}" class="btn btn-primary" title="Edit Phieubau Uutu">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Phieubau Uutu" onclick="return confirm(&quot;Click Ok to delete Phieubau Uutu.&quot;)">
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
            {!! $phieubauUutus->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection