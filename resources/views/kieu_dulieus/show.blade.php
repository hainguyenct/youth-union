@extends('layouts.layout(demo2).app(demo2)')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Kieu Dulieu' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('kieu_dulieus.kieu_dulieu.destroy', $kieuDulieu->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('kieu_dulieus.kieu_dulieu.index') }}" class="btn btn-primary" title="Show All Kieu Dulieu">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('kieu_dulieus.kieu_dulieu.create') }}" class="btn btn-success" title="Create New Kieu Dulieu">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('kieu_dulieus.kieu_dulieu.edit', $kieuDulieu->id ) }}" class="btn btn-primary" title="Edit Kieu Dulieu">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Kieu Dulieu" onclick="return confirm(&quot;Click Ok to delete Kieu Dulieu.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Ten Kieu Dulieu</dt>
            <dd>{{ $kieuDulieu->ten_kieu_dulieu }}</dd>

        </dl>

    </div>
</div>

@endsection