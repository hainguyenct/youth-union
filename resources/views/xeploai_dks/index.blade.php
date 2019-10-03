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
                <h4 class="mt-5 mb-5">Xeploai Dks</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('xeploai_dks.xeploai_dk.create') }}" class="btn btn-success" title="Create New Xeploai Dk">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($xeploaiDks) == 0)
            <div class="panel-body text-center">
                <h4>No Xeploai Dks Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>T E N  X L D K</th>
                            <th>D I E M D A T  D K</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($xeploaiDks as $xeploaiDk)
                        <tr>
                            <td>{{ $xeploaiDk->TEN_XLDK }}</td>
                            <td>{{ $xeploaiDk->DIEMDAT_DK }}</td>

                            <td>

                                <form method="POST" action="{!! route('xeploai_dks.xeploai_dk.destroy', $xeploaiDk->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('xeploai_dks.xeploai_dk.show', $xeploaiDk->ID ) }}" class="btn btn-info" title="Show Xeploai Dk">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('xeploai_dks.xeploai_dk.edit', $xeploaiDk->ID ) }}" class="btn btn-primary" title="Edit Xeploai Dk">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Xeploai Dk" onclick="return confirm(&quot;Click Ok to delete Xeploai Dk.&quot;)">
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
            {!! $xeploaiDks->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection