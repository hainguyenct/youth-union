@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Phuong Xa' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('phuong_xas.phuong_xa.destroy', $phuongXa->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('phuong_xas.phuong_xa.index') }}" class="btn btn-primary" title="Show All Phuong Xa">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('phuong_xas.phuong_xa.create') }}" class="btn btn-success" title="Create New Phuong Xa">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('phuong_xas.phuong_xa.edit', $phuongXa->ID ) }}" class="btn btn-primary" title="Edit Phuong Xa">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Phuong Xa" onclick="return confirm(&quot;Click Ok to delete Phuong Xa.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Q U A N  H U Y E N</dt>
            <dd>{{ optional($phuongXa->QuanHuyen)->TEN_QD }}</dd>
            <dt>T E N  P X</dt>
            <dd>{{ $phuongXa->TEN_PX }}</dd>

        </dl>

    </div>
</div>

@endsection