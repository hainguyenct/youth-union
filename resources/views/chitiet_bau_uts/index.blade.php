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
                <h4 class="mt-5 mb-5">Chitiet Bau Uts</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('chitiet_bau_uts.chitiet_bau_ut.create') }}" class="btn btn-success" title="Create New Chitiet Bau Ut">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($chitietBauUts) == 0)
            <div class="panel-body text-center">
                <h4>No Chitiet Bau Uts Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>P H I E U D A N H G I A  D O A N V I E N</th>
                            <th>P H I E U B A U  U U T U</th>
                            <th>S O P H I E U  D O N G Y</th>
                            <th>D U Y E T  B A U</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($chitietBauUts as $chitietBauUt)
                        <tr>
                            <td>{{ optional($chitietBauUt->PhieudanhgiaDoanvien)->TEN_PDGDV }}</td>
                            <td>{{ optional($chitietBauUt->PhieubauUutu)->SOPHIEU_TONG }}</td>
                            <td>{{ $chitietBauUt->SOPHIEU_DONGY }}</td>
                            <td>{{ $chitietBauUt->DUYET_BAU }}</td>

                            <td>

                                <form method="POST" action="{!! route('chitiet_bau_uts.chitiet_bau_ut.destroy', $chitietBauUt->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('chitiet_bau_uts.chitiet_bau_ut.show', $chitietBauUt->ID ) }}" class="btn btn-info" title="Show Chitiet Bau Ut">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('chitiet_bau_uts.chitiet_bau_ut.edit', $chitietBauUt->ID ) }}" class="btn btn-primary" title="Edit Chitiet Bau Ut">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Chitiet Bau Ut" onclick="return confirm(&quot;Click Ok to delete Chitiet Bau Ut.&quot;)">
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
            {!! $chitietBauUts->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection