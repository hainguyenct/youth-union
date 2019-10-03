@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Pt Chidoan' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('pt_chidoans.pt_chidoan.destroy', $ptChidoan->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('pt_chidoans.pt_chidoan.index') }}" class="btn btn-primary" title="Show All Pt Chidoan">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('pt_chidoans.pt_chidoan.create') }}" class="btn btn-success" title="Create New Pt Chidoan">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('pt_chidoans.pt_chidoan.edit', $ptChidoan->ID ) }}" class="btn btn-primary" title="Edit Pt Chidoan">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Pt Chidoan" onclick="return confirm(&quot;Click Ok to delete Pt Chidoan.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>H O C K Y</dt>
            <dd>{{ optional($ptChidoan->Hocky)->TEN_HK }}</dd>
            <dt>L O A I  P T</dt>
            <dd>{{ optional($ptChidoan->LoaiPt)->TEN_LOAI_PT }}</dd>
            <dt>C H I D O A N</dt>
            <dd>{{ optional($ptChidoan->Chidoan)->TEN_CD }}</dd>
            <dt>D O A N P H I  C H I  C D</dt>
            <dd>{{ optional($ptChidoan->DoanphiChiCd)->SOTIEN_CHI_CD }}</dd>
            <dt>T E N  P T  C D</dt>
            <dd>{{ $ptChidoan->TEN_PT_CD }}</dd>
            <dt>N G A Y  B D  P T  C D</dt>
            <dd>{{ $ptChidoan->NGAY_BD_PT_CD }}</dd>
            <dt>N G A Y  K T  P T  C D</dt>
            <dd>{{ $ptChidoan->NGAY_KT_PT_CD }}</dd>
            <dt>G H I C H U  P T  C D</dt>
            <dd>{{ $ptChidoan->GHICHU_PT_CD }}</dd>

        </dl>

    </div>
</div>

@endsection