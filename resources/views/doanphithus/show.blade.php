@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Doanphithu' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('doanphithus.doanphithu.destroy', $doanphithu->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('doanphithus.doanphithu.index') }}" class="btn btn-primary" title="Show All Doanphithu">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('doanphithus.doanphithu.create') }}" class="btn btn-success" title="Create New Doanphithu">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('doanphithus.doanphithu.edit', $doanphithu->id ) }}" class="btn btn-primary" title="Edit Doanphithu">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Doanphithu" onclick="return confirm(&quot;Click Ok to delete Doanphithu.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Sinhvien</dt>
            <dd>{{ optional($doanphithu->sinhvien)->mssv }}</dd>
            <dt>Thangnam</dt>
            <dd>{{ optional($doanphithu->thangnam)->thangnam }}</dd>
            <dt>Ngaydong</dt>
            <dd>{{ $doanphithu->ngaydong }}</dd>

        </dl>

    </div>
</div>

@endsection