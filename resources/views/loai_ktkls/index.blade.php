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
                <h4 class="mt-5 mb-5">Loai Ktkls</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('loai_ktkls.loai_ktkl.create') }}" class="btn btn-success" title="Create New Loai Ktkl">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($loaiKtkls) == 0)
            <div class="panel-body text-center">
                <h4>No Loai Ktkls Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>T E N  L O A I K T K L</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($loaiKtkls as $loaiKtkl)
                        <tr>
                            <td>{{ $loaiKtkl->TEN_LOAIKTKL }}</td>

                            <td>

                                <form method="POST" action="{!! route('loai_ktkls.loai_ktkl.destroy', $loaiKtkl->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('loai_ktkls.loai_ktkl.show', $loaiKtkl->ID ) }}" class="btn btn-info" title="Show Loai Ktkl">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('loai_ktkls.loai_ktkl.edit', $loaiKtkl->ID ) }}" class="btn btn-primary" title="Edit Loai Ktkl">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Loai Ktkl" onclick="return confirm(&quot;Click Ok to delete Loai Ktkl.&quot;)">
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
            {!! $loaiKtkls->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection