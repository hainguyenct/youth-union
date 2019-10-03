@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Mauphieu' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('mauphieus.mauphieu.destroy', $mauphieu->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('mauphieus.mauphieu.index') }}" class="btn btn-primary" title="Show All Mauphieu">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('mauphieus.mauphieu.create') }}" class="btn btn-success" title="Create New Mauphieu">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('mauphieus.mauphieu.edit', $mauphieu->ID ) }}" class="btn btn-primary" title="Edit Mauphieu">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Mauphieu" onclick="return confirm(&quot;Click Ok to delete Mauphieu.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>T E N  M P</dt>
            <dd>{{ $mauphieu->TEN_MP }}</dd>
            <dt>N G A Y T A O  M P</dt>
            <dd>{{ $mauphieu->NGAYTAO_MP }}</dd>
            <dt>N G A Y C A O N H A T  M P</dt>
            <dd>{{ $mauphieu->NGAYCAONHAT_MP }}</dd>

        </dl>

    </div>
</div>

@endsection