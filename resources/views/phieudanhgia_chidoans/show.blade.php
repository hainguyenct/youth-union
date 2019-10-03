@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Phieudanhgia Chidoan' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('phieudanhgia_chidoans.phieudanhgia_chidoan.destroy', $phieudanhgiaChidoan->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('phieudanhgia_chidoans.phieudanhgia_chidoan.index') }}" class="btn btn-primary" title="Show All Phieudanhgia Chidoan">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('phieudanhgia_chidoans.phieudanhgia_chidoan.create') }}" class="btn btn-success" title="Create New Phieudanhgia Chidoan">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('phieudanhgia_chidoans.phieudanhgia_chidoan.edit', $phieudanhgiaChidoan->ID ) }}" class="btn btn-primary" title="Edit Phieudanhgia Chidoan">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Phieudanhgia Chidoan" onclick="return confirm(&quot;Click Ok to delete Phieudanhgia Chidoan.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>N A M H O C</dt>
            <dd>{{ optional($phieudanhgiaChidoan->Namhoc)->TEN_NH }}</dd>
            <dt>X E P L O A I  C D</dt>
            <dd>{{ optional($phieudanhgiaChidoan->XeploaiCd)->TEN_PH }}</dd>
            <dt>M A U P H I E U</dt>
            <dd>{{ optional($phieudanhgiaChidoan->Mauphieu)->TEN_MP }}</dd>
            <dt>T E N  P D G C D</dt>
            <dd>{{ $phieudanhgiaChidoan->TEN_PDGCD }}</dd>

        </dl>

    </div>
</div>

@endsection