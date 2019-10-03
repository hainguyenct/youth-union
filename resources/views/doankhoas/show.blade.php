@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Doankhoa' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('doankhoas.doankhoa.destroy', $doankhoa->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('doankhoas.doankhoa.index') }}" class="btn btn-primary" title="Show All Doankhoa">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('doankhoas.doankhoa.create') }}" class="btn btn-success" title="Create New Doankhoa">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('doankhoas.doankhoa.edit', $doankhoa->ID ) }}" class="btn btn-primary" title="Edit Doankhoa">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Doankhoa" onclick="return confirm(&quot;Click Ok to delete Doankhoa.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>P H I E U D A N H G I A  D O A N K H O A</dt>
            <dd>{{ optional($doankhoa->PhieudanhgiaDoankhoa)->TEN_PDGDK }}</dd>
            <dt>T E N  D K</dt>
            <dd>{{ $doankhoa->TEN_DK }}</dd>

        </dl>

    </div>
</div>

@endsection