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
                <h4 class="mt-5 mb-5">Thangnams</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('thangnams.thangnam.create') }}" class="btn btn-success" title="Create New Thangnam">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($thangnams) == 0)
            <div class="panel-body text-center">
                <h4>No Thangnams Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Thangnam</th>
                            <th>Namhoc</th>
                            <th>Sotien</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($thangnams as $thangnam)
                        <tr>
                            <td>{{ $thangnam->thangnam }}</td>
                            <td>{{ optional($thangnam->Namhoc)->namhoc }}</td>
                            <td>{{ $thangnam->sotien }}</td>

                            <td>

                                <form method="POST" action="{!! route('thangnams.thangnam.destroy', $thangnam->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('thangnams.thangnam.show', $thangnam->id ) }}" class="btn btn-info" title="Show Thangnam">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('thangnams.thangnam.edit', $thangnam->id ) }}" class="btn btn-primary" title="Edit Thangnam">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Thangnam" onclick="return confirm(&quot;Click Ok to delete Thangnam.&quot;)">
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
            {!! $thangnams->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection