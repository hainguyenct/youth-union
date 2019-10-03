@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Phieubau Uutu' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('phieubau_uutus.phieubau_uutu.destroy', $phieubauUutu->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('phieubau_uutus.phieubau_uutu.index') }}" class="btn btn-primary" title="Show All Phieubau Uutu">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('phieubau_uutus.phieubau_uutu.create') }}" class="btn btn-success" title="Create New Phieubau Uutu">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('phieubau_uutus.phieubau_uutu.edit', $phieubauUutu->ID ) }}" class="btn btn-primary" title="Edit Phieubau Uutu">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Phieubau Uutu" onclick="return confirm(&quot;Click Ok to delete Phieubau Uutu.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>C H I D O A N</dt>
            <dd>{{ optional($phieubauUutu->Chidoan)->TEN_CD }}</dd>
            <dt>S O P H I E U  T O N G</dt>
            <dd>{{ $phieubauUutu->SOPHIEU_TONG }}</dd>
            <dt>N G A Y  B A U</dt>
            <dd>{{ $phieubauUutu->NGAY_BAU }}</dd>

        </dl>

    </div>
</div>

@endsection