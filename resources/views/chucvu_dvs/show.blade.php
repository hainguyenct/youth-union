@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Chucvu Dv' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('chucvu_dvs.chucvu_dv.destroy', $chucvuDv->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('chucvu_dvs.chucvu_dv.index') }}" class="btn btn-primary" title="Show All Chucvu Dv">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('chucvu_dvs.chucvu_dv.create') }}" class="btn btn-success" title="Create New Chucvu Dv">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('chucvu_dvs.chucvu_dv.edit', $chucvuDv->ID ) }}" class="btn btn-primary" title="Edit Chucvu Dv">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Chucvu Dv" onclick="return confirm(&quot;Click Ok to delete Chucvu Dv.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>T E N  C H U C V U</dt>
            <dd>{{ $chucvuDv->TEN_CHUCVU }}</dd>

        </dl>

    </div>
</div>

@endsection