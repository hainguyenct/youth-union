@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Qd Dv Ttdoan' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('qd_dv_ttdoans.qd_dv_ttdoan.destroy', $qdDvTtdoan->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('qd_dv_ttdoans.qd_dv_ttdoan.index') }}" class="btn btn-primary" title="Show All Qd Dv Ttdoan">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('qd_dv_ttdoans.qd_dv_ttdoan.create') }}" class="btn btn-success" title="Create New Qd Dv Ttdoan">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('qd_dv_ttdoans.qd_dv_ttdoan.edit', $qdDvTtdoan->ID ) }}" class="btn btn-primary" title="Edit Qd Dv Ttdoan">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Qd Dv Ttdoan" onclick="return confirm(&quot;Click Ok to delete Qd Dv Ttdoan.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>D V  T T  D O A N</dt>
            <dd>{{ optional($qdDvTtdoan->DvTtDoan)->NGAYTTDOAN }}</dd>
            <dt>D O A N V I E N  T H A N H N I E N</dt>
            <dd>{{ optional($qdDvTtdoan->DoanvienThanhnien)->PHUONG_XA_ID_QQ }}</dd>
            <dt>D U Y E T  T T D</dt>
            <dd>{{ $qdDvTtdoan->DUYET_TTD }}</dd>

        </dl>

    </div>
</div>

@endsection