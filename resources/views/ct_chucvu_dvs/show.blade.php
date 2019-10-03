@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Ct Chucvu Dv' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('ct_chucvu_dvs.ct_chucvu_dv.destroy', $ctChucvuDv->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('ct_chucvu_dvs.ct_chucvu_dv.index') }}" class="btn btn-primary" title="Show All Ct Chucvu Dv">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('ct_chucvu_dvs.ct_chucvu_dv.create') }}" class="btn btn-success" title="Create New Ct Chucvu Dv">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('ct_chucvu_dvs.ct_chucvu_dv.edit', $ctChucvuDv->ID ) }}" class="btn btn-primary" title="Edit Ct Chucvu Dv">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Ct Chucvu Dv" onclick="return confirm(&quot;Click Ok to delete Ct Chucvu Dv.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>D O A N V I E N  T H A N H N I E N</dt>
            <dd>{{ optional($ctChucvuDv->DoanvienThanhnien)->PHUONG_XA_ID_QQ }}</dd>
            <dt>C H U C V U  D V</dt>
            <dd>{{ optional($ctChucvuDv->ChucvuDv)->TEN_CHUCVU }}</dd>
            <dt>N G A Y B D  C V</dt>
            <dd>{{ $ctChucvuDv->NGAYBD_CV }}</dd>
            <dt>N G A Y K T  C V</dt>
            <dd>{{ $ctChucvuDv->NGAYKT_CV }}</dd>

        </dl>

    </div>
</div>

@endsection