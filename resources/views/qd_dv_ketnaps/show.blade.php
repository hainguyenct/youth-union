@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Qd Dv Ketnap' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('qd_dv_ketnaps.qd_dv_ketnap.destroy', $qdDvKetnap->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('qd_dv_ketnaps.qd_dv_ketnap.index') }}" class="btn btn-primary" title="Show All Qd Dv Ketnap">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('qd_dv_ketnaps.qd_dv_ketnap.create') }}" class="btn btn-success" title="Create New Qd Dv Ketnap">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('qd_dv_ketnaps.qd_dv_ketnap.edit', $qdDvKetnap->ID ) }}" class="btn btn-primary" title="Edit Qd Dv Ketnap">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Qd Dv Ketnap" onclick="return confirm(&quot;Click Ok to delete Qd Dv Ketnap.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>D V  K E T N A P</dt>
            <dd>{{ optional($qdDvKetnap->DvKetnap)->NGAYKETNAP }}</dd>
            <dt>D O A N V I E N  T H A N H N I E N</dt>
            <dd>{{ optional($qdDvKetnap->DoanvienThanhnien)->PHUONG_XA_ID_QQ }}</dd>
            <dt>D U Y E T  K N</dt>
            <dd>{{ $qdDvKetnap->DUYET_KN }}</dd>

        </dl>

    </div>
</div>

@endsection