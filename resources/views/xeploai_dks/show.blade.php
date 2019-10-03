@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Xeploai Dk' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('xeploai_dks.xeploai_dk.destroy', $xeploaiDk->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('xeploai_dks.xeploai_dk.index') }}" class="btn btn-primary" title="Show All Xeploai Dk">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('xeploai_dks.xeploai_dk.create') }}" class="btn btn-success" title="Create New Xeploai Dk">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('xeploai_dks.xeploai_dk.edit', $xeploaiDk->ID ) }}" class="btn btn-primary" title="Edit Xeploai Dk">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Xeploai Dk" onclick="return confirm(&quot;Click Ok to delete Xeploai Dk.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>T E N  X L D K</dt>
            <dd>{{ $xeploaiDk->TEN_XLDK }}</dd>
            <dt>D I E M D A T  D K</dt>
            <dd>{{ $xeploaiDk->DIEMDAT_DK }}</dd>

        </dl>

    </div>
</div>

@endsection