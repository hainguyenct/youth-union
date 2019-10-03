@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Tinh Thanhpho' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('tinh_thanhphos.tinh_thanhpho.destroy', $tinhThanhpho->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('tinh_thanhphos.tinh_thanhpho.index') }}" class="btn btn-primary" title="Show All Tinh Thanhpho">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('tinh_thanhphos.tinh_thanhpho.create') }}" class="btn btn-success" title="Create New Tinh Thanhpho">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('tinh_thanhphos.tinh_thanhpho.edit', $tinhThanhpho->ID ) }}" class="btn btn-primary" title="Edit Tinh Thanhpho">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Tinh Thanhpho" onclick="return confirm(&quot;Click Ok to delete Tinh Thanhpho.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>T E N  T P</dt>
            <dd>{{ $tinhThanhpho->TEN_TP }}</dd>

        </dl>

    </div>
</div>

@endsection