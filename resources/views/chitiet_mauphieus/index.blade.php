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
                <h4 class="mt-5 mb-5">Chitiet Mauphieus</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('chitiet_mauphieus.chitiet_mauphieu.create') }}" class="btn btn-success" title="Create New Chitiet Mauphieu">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($chitietMauphieus) == 0)
            <div class="panel-body text-center">
                <h4>No Chitiet Mauphieus Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>M A U P H I E U</th>
                            <th>N O I D U N G  P D G</th>
                            <th>T H U T U  N O I D U N G</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($chitietMauphieus as $chitietMauphieu)
                        <tr>
                            <td>{{ optional($chitietMauphieu->Mauphieu)->TEN_MP }}</td>
                            <td>{{ optional($chitietMauphieu->NoidungPdg)->TEN_NDPDG }}</td>
                            <td>{{ $chitietMauphieu->THUTU_NOIDUNG }}</td>

                            <td>

                                <form method="POST" action="{!! route('chitiet_mauphieus.chitiet_mauphieu.destroy', $chitietMauphieu->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('chitiet_mauphieus.chitiet_mauphieu.show', $chitietMauphieu->ID ) }}" class="btn btn-info" title="Show Chitiet Mauphieu">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('chitiet_mauphieus.chitiet_mauphieu.edit', $chitietMauphieu->ID ) }}" class="btn btn-primary" title="Edit Chitiet Mauphieu">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Chitiet Mauphieu" onclick="return confirm(&quot;Click Ok to delete Chitiet Mauphieu.&quot;)">
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
            {!! $chitietMauphieus->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection