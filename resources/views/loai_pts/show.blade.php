@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Loai Pt' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('loai_pts.loai_pt.destroy', $loaiPt->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('loai_pts.loai_pt.index') }}" class="btn btn-primary" title="Show All Loai Pt">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('loai_pts.loai_pt.create') }}" class="btn btn-success" title="Create New Loai Pt">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('loai_pts.loai_pt.edit', $loaiPt->ID ) }}" class="btn btn-primary" title="Edit Loai Pt">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Loai Pt" onclick="return confirm(&quot;Click Ok to delete Loai Pt.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>T E N  L O A I  P T</dt>
            <dd>{{ $loaiPt->TEN_LOAI_PT }}</dd>

        </dl>

    </div>
</div>

@endsection