@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Phieudanhgia Doankhoa' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('phieudanhgia_doankhoas.phieudanhgia_doankhoa.destroy', $phieudanhgiaDoankhoa->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('phieudanhgia_doankhoas.phieudanhgia_doankhoa.index') }}" class="btn btn-primary" title="Show All Phieudanhgia Doankhoa">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('phieudanhgia_doankhoas.phieudanhgia_doankhoa.create') }}" class="btn btn-success" title="Create New Phieudanhgia Doankhoa">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('phieudanhgia_doankhoas.phieudanhgia_doankhoa.edit', $phieudanhgiaDoankhoa->ID ) }}" class="btn btn-primary" title="Edit Phieudanhgia Doankhoa">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Phieudanhgia Doankhoa" onclick="return confirm(&quot;Click Ok to delete Phieudanhgia Doankhoa.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>X E P L O A I  D K</dt>
            <dd>{{ optional($phieudanhgiaDoankhoa->XeploaiDk)->TEN_XLDK }}</dd>
            <dt>M A U P H I E U</dt>
            <dd>{{ optional($phieudanhgiaDoankhoa->Mauphieu)->TEN_MP }}</dd>
            <dt>T E N  P D G D K</dt>
            <dd>{{ $phieudanhgiaDoankhoa->TEN_PDGDK }}</dd>

        </dl>

    </div>
</div>

@endsection