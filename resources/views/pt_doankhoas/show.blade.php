@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Pt Doankhoa' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('pt_doankhoas.pt_doankhoa.destroy', $ptDoankhoa->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('pt_doankhoas.pt_doankhoa.index') }}" class="btn btn-primary" title="Show All Pt Doankhoa">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('pt_doankhoas.pt_doankhoa.create') }}" class="btn btn-success" title="Create New Pt Doankhoa">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('pt_doankhoas.pt_doankhoa.edit', $ptDoankhoa->ID ) }}" class="btn btn-primary" title="Edit Pt Doankhoa">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Pt Doankhoa" onclick="return confirm(&quot;Click Ok to delete Pt Doankhoa.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>L O A I  P T</dt>
            <dd>{{ optional($ptDoankhoa->LoaiPt)->TEN_LOAI_PT }}</dd>
            <dt>D O A N K H O A</dt>
            <dd>{{ optional($ptDoankhoa->Doankhoa)->TEN_DK }}</dd>
            <dt>D O A N P H I  C H I  D K</dt>
            <dd>{{ optional($ptDoankhoa->DoanphiChiDk)->SOTIEN_CHI_DK }}</dd>
            <dt>H O C K Y</dt>
            <dd>{{ optional($ptDoankhoa->Hocky)->TEN_HK }}</dd>
            <dt>T E N  P T  D K</dt>
            <dd>{{ $ptDoankhoa->TEN_PT_DK }}</dd>
            <dt>N G A Y  B T  P T  D K</dt>
            <dd>{{ $ptDoankhoa->NGAY_BT_PT_DK }}</dd>
            <dt>N G A Y  K T  P T  D K</dt>
            <dd>{{ $ptDoankhoa->NGAY_KT_PT_DK }}</dd>
            <dt>G H I C H U  P T  D K</dt>
            <dd>{{ $ptDoankhoa->GHICHU_PT_DK }}</dd>

        </dl>

    </div>
</div>

@endsection