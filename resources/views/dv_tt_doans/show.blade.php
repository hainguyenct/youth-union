@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Dv Tt Doan' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('dv_tt_doans.dv_tt_doan.destroy', $dvTtDoan->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('dv_tt_doans.dv_tt_doan.index') }}" class="btn btn-primary" title="Show All Dv Tt Doan">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('dv_tt_doans.dv_tt_doan.create') }}" class="btn btn-success" title="Create New Dv Tt Doan">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('dv_tt_doans.dv_tt_doan.edit', $dvTtDoan->ID ) }}" class="btn btn-primary" title="Edit Dv Tt Doan">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Dv Tt Doan" onclick="return confirm(&quot;Click Ok to delete Dv Tt Doan.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>N G A Y T T D O A N</dt>
            <dd>{{ $dvTtDoan->NGAYTTDOAN }}</dd>

        </dl>

    </div>
</div>

@endsection