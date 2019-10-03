@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Doanphi Thu Cd' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('doanphi_thu_cds.doanphi_thu_cd.destroy', $doanphiThuCd->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('doanphi_thu_cds.doanphi_thu_cd.index') }}" class="btn btn-primary" title="Show All Doanphi Thu Cd">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('doanphi_thu_cds.doanphi_thu_cd.create') }}" class="btn btn-success" title="Create New Doanphi Thu Cd">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('doanphi_thu_cds.doanphi_thu_cd.edit', $doanphiThuCd->ID ) }}" class="btn btn-primary" title="Edit Doanphi Thu Cd">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Doanphi Thu Cd" onclick="return confirm(&quot;Click Ok to delete Doanphi Thu Cd.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>C H I D O A N</dt>
            <dd>{{ optional($doanphiThuCd->Chidoan)->TEN_CD }}</dd>
            <dt>T H A N G N A M</dt>
            <dd>{{ optional($doanphiThuCd->Thangnam)->id }}</dd>
            <dt>N G A Y  D O N G  C D</dt>
            <dd>{{ $doanphiThuCd->NGAY_DONG_CD }}</dd>

        </dl>

    </div>
</div>

@endsection