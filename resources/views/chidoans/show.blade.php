@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Chidoan' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('chidoans.chidoan.destroy', $chidoan->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('chidoans.chidoan.index') }}" class="btn btn-primary" title="Show All Chidoan">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('chidoans.chidoan.create') }}" class="btn btn-success" title="Create New Chidoan">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('chidoans.chidoan.edit', $chidoan->ID ) }}" class="btn btn-primary" title="Edit Chidoan">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Chidoan" onclick="return confirm(&quot;Click Ok to delete Chidoan.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>P H I E U D A N H G I A  C H I D O A N</dt>
            <dd>{{ optional($chidoan->PhieudanhgiaChidoan)->TEN_PDGCD }}</dd>
            <dt>D O A N P H I  C H I  C D</dt>
            <dd>{{ optional($chidoan->DoanphiChiCd)->SOTIEN_CHI_CD }}</dd>
            <dt>D O A N K H O A</dt>
            <dd>{{ optional($chidoan->Doankhoa)->TEN_DK }}</dd>
            <dt>K H O A</dt>
            <dd>{{ optional($chidoan->Khoa)->TEN_KHOA }}</dd>
            <dt>T E N  C D</dt>
            <dd>{{ $chidoan->TEN_CD }}</dd>

        </dl>

    </div>
</div>

@endsection