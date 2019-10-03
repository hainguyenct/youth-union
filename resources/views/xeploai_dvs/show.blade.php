@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Xeploai Dv' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('xeploai_dvs.xeploai_dv.destroy', $xeploaiDv->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('xeploai_dvs.xeploai_dv.index') }}" class="btn btn-primary" title="Show All Xeploai Dv">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('xeploai_dvs.xeploai_dv.create') }}" class="btn btn-success" title="Create New Xeploai Dv">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('xeploai_dvs.xeploai_dv.edit', $xeploaiDv->ID ) }}" class="btn btn-primary" title="Edit Xeploai Dv">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Xeploai Dv" onclick="return confirm(&quot;Click Ok to delete Xeploai Dv.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>T E N  X L D V</dt>
            <dd>{{ $xeploaiDv->TEN_XLDV }}</dd>
            <dt>D I E M D A T  D V</dt>
            <dd>{{ $xeploaiDv->DIEMDAT_DV }}</dd>

        </dl>

    </div>
</div>

@endsection