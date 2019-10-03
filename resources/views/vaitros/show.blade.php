@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Vaitro' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('vaitros.vaitro.destroy', $vaitro->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('vaitros.vaitro.index') }}" class="btn btn-primary" title="Show All Vaitro">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('vaitros.vaitro.create') }}" class="btn btn-success" title="Create New Vaitro">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('vaitros.vaitro.edit', $vaitro->ID ) }}" class="btn btn-primary" title="Edit Vaitro">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Vaitro" onclick="return confirm(&quot;Click Ok to delete Vaitro.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>D O A N V I E N  T H A N H N I E N</dt>
            <dd>{{ optional($vaitro->DoanvienThanhnien)->PHUONG_XA_ID_QQ }}</dd>
            <dt>T E N  V T</dt>
            <dd>{{ $vaitro->TEN_VT }}</dd>

        </dl>

    </div>
</div>

@endsection