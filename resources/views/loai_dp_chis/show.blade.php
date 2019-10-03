@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Loai Dp Chi' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('loai_dp_chis.loai_dp_chi.destroy', $loaiDpChi->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('loai_dp_chis.loai_dp_chi.index') }}" class="btn btn-primary" title="Show All Loai Dp Chi">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('loai_dp_chis.loai_dp_chi.create') }}" class="btn btn-success" title="Create New Loai Dp Chi">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('loai_dp_chis.loai_dp_chi.edit', $loaiDpChi->ID ) }}" class="btn btn-primary" title="Edit Loai Dp Chi">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Loai Dp Chi" onclick="return confirm(&quot;Click Ok to delete Loai Dp Chi.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>T E N  L O A I  D P</dt>
            <dd>{{ $loaiDpChi->TEN_LOAI_DP }}</dd>

        </dl>

    </div>
</div>

@endsection