@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Thanhtich' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('thanhtiches.thanhtich.destroy', $thanhtich->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('thanhtiches.thanhtich.index') }}" class="btn btn-primary" title="Show All Thanhtich">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('thanhtiches.thanhtich.create') }}" class="btn btn-success" title="Create New Thanhtich">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('thanhtiches.thanhtich.edit', $thanhtich->ID ) }}" class="btn btn-primary" title="Edit Thanhtich">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Thanhtich" onclick="return confirm(&quot;Click Ok to delete Thanhtich.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>T E N  T T</dt>
            <dd>{{ $thanhtich->TEN_TT }}</dd>

        </dl>

    </div>
</div>

@endsection