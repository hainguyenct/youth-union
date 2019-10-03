@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Xeploai Cd' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('xeploai_cds.xeploai_cd.destroy', $xeploaiCd->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('xeploai_cds.xeploai_cd.index') }}" class="btn btn-primary" title="Show All Xeploai Cd">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('xeploai_cds.xeploai_cd.create') }}" class="btn btn-success" title="Create New Xeploai Cd">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('xeploai_cds.xeploai_cd.edit', $xeploaiCd->ID ) }}" class="btn btn-primary" title="Edit Xeploai Cd">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Xeploai Cd" onclick="return confirm(&quot;Click Ok to delete Xeploai Cd.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>T E N  P H</dt>
            <dd>{{ $xeploaiCd->TEN_PH }}</dd>
            <dt>D I E M D A T  C D</dt>
            <dd>{{ $xeploaiCd->DIEMDAT_CD }}</dd>

        </dl>

    </div>
</div>

@endsection