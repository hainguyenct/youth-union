@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Chitiet Mauphieu' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('chitiet_mauphieus.chitiet_mauphieu.destroy', $chitietMauphieu->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('chitiet_mauphieus.chitiet_mauphieu.index') }}" class="btn btn-primary" title="Show All Chitiet Mauphieu">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('chitiet_mauphieus.chitiet_mauphieu.create') }}" class="btn btn-success" title="Create New Chitiet Mauphieu">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('chitiet_mauphieus.chitiet_mauphieu.edit', $chitietMauphieu->ID ) }}" class="btn btn-primary" title="Edit Chitiet Mauphieu">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Chitiet Mauphieu" onclick="return confirm(&quot;Click Ok to delete Chitiet Mauphieu.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>M A U P H I E U</dt>
            <dd>{{ optional($chitietMauphieu->Mauphieu)->TEN_MP }}</dd>
            <dt>N O I D U N G  P D G</dt>
            <dd>{{ optional($chitietMauphieu->NoidungPdg)->TEN_NDPDG }}</dd>
            <dt>T H U T U  N O I D U N G</dt>
            <dd>{{ $chitietMauphieu->THUTU_NOIDUNG }}</dd>

        </dl>

    </div>
</div>

@endsection