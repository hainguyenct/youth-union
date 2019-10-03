@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Quan Huyen' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('quan_huyens.quan_huyen.destroy', $quanHuyen->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('quan_huyens.quan_huyen.index') }}" class="btn btn-primary" title="Show All Quan Huyen">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('quan_huyens.quan_huyen.create') }}" class="btn btn-success" title="Create New Quan Huyen">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('quan_huyens.quan_huyen.edit', $quanHuyen->ID ) }}" class="btn btn-primary" title="Edit Quan Huyen">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Quan Huyen" onclick="return confirm(&quot;Click Ok to delete Quan Huyen.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>T I N H  T H A N H P H O</dt>
            <dd>{{ optional($quanHuyen->TinhThanhpho)->TEN_TP }}</dd>
            <dt>T E N  Q D</dt>
            <dd>{{ $quanHuyen->TEN_QD }}</dd>

        </dl>

    </div>
</div>

@endsection