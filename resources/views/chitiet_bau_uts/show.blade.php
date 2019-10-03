@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Chitiet Bau Ut' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('chitiet_bau_uts.chitiet_bau_ut.destroy', $chitietBauUt->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('chitiet_bau_uts.chitiet_bau_ut.index') }}" class="btn btn-primary" title="Show All Chitiet Bau Ut">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('chitiet_bau_uts.chitiet_bau_ut.create') }}" class="btn btn-success" title="Create New Chitiet Bau Ut">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('chitiet_bau_uts.chitiet_bau_ut.edit', $chitietBauUt->ID ) }}" class="btn btn-primary" title="Edit Chitiet Bau Ut">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Chitiet Bau Ut" onclick="return confirm(&quot;Click Ok to delete Chitiet Bau Ut.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>P H I E U D A N H G I A  D O A N V I E N</dt>
            <dd>{{ optional($chitietBauUt->PhieudanhgiaDoanvien)->TEN_PDGDV }}</dd>
            <dt>P H I E U B A U  U U T U</dt>
            <dd>{{ optional($chitietBauUt->PhieubauUutu)->SOPHIEU_TONG }}</dd>
            <dt>S O P H I E U  D O N G Y</dt>
            <dd>{{ $chitietBauUt->SOPHIEU_DONGY }}</dd>
            <dt>D U Y E T  B A U</dt>
            <dd>{{ $chitietBauUt->DUYET_BAU }}</dd>

        </dl>

    </div>
</div>

@endsection