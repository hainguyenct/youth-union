@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Doanphi Thu Dv' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('doanphi_thu_dvs.doanphi_thu_dv.destroy', $doanphiThuDv->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('doanphi_thu_dvs.doanphi_thu_dv.index') }}" class="btn btn-primary" title="Show All Doanphi Thu Dv">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('doanphi_thu_dvs.doanphi_thu_dv.create') }}" class="btn btn-success" title="Create New Doanphi Thu Dv">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('doanphi_thu_dvs.doanphi_thu_dv.edit', $doanphiThuDv->ID ) }}" class="btn btn-primary" title="Edit Doanphi Thu Dv">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Doanphi Thu Dv" onclick="return confirm(&quot;Click Ok to delete Doanphi Thu Dv.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>D O A N V I E N  T H A N H N I E N</dt>
            <dd>{{ optional($doanphiThuDv->DoanvienThanhnien)->PHUONG_XA_ID_QQ }}</dd>
            <dt>T H A N G N A M</dt>
            <dd>{{ optional($doanphiThuDv->Thangnam)->id }}</dd>
            <dt>N G A Y  D O N G  D P  D V</dt>
            <dd>{{ $doanphiThuDv->NGAY_DONG_DP_DV }}</dd>

        </dl>

    </div>
</div>

@endsection