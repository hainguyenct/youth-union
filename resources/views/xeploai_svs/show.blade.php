@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Xeploai Sv' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('xeploai_svs.xeploai_sv.destroy', $xeploaiSv->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('xeploai_svs.xeploai_sv.index') }}" class="btn btn-primary" title="Show All Xeploai Sv">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('xeploai_svs.xeploai_sv.create') }}" class="btn btn-success" title="Create New Xeploai Sv">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('xeploai_svs.xeploai_sv.edit', $xeploaiSv->ID ) }}" class="btn btn-primary" title="Edit Xeploai Sv">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Xeploai Sv" onclick="return confirm(&quot;Click Ok to delete Xeploai Sv.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>T E N  X L S V</dt>
            <dd>{{ $xeploaiSv->TEN_XLSV }}</dd>
            <dt>D I E M D A T  S V</dt>
            <dd>{{ $xeploaiSv->DIEMDAT_SV }}</dd>

        </dl>

    </div>
</div>

@endsection