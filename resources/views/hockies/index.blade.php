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
                <h4 class="mt-5 mb-5">Hockies</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('hockies.hocky.create') }}" class="btn btn-success" title="Create New Hocky">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($hockies) == 0)
            <div class="panel-body text-center">
                <h4>No Hockies Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>N A M H O C</th>
                            <th>T E N  H K</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($hockies as $hocky)
                        <tr>
                            <td>{{ optional($hocky->Namhoc)->TEN_NH }}</td>
                            <td>{{ $hocky->TEN_HK }}</td>

                            <td>

                                <form method="POST" action="{!! route('hockies.hocky.destroy', $hocky->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('hockies.hocky.show', $hocky->ID ) }}" class="btn btn-info" title="Show Hocky">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('hockies.hocky.edit', $hocky->ID ) }}" class="btn btn-primary" title="Edit Hocky">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Hocky" onclick="return confirm(&quot;Click Ok to delete Hocky.&quot;)">
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
            {!! $hockies->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection