@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Thangnam' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('thangnams.thangnam.destroy', $thangnam->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('thangnams.thangnam.index') }}" class="btn btn-primary" title="Show All Thangnam">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('thangnams.thangnam.create') }}" class="btn btn-success" title="Create New Thangnam">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('thangnams.thangnam.edit', $thangnam->id ) }}" class="btn btn-primary" title="Edit Thangnam">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Thangnam" onclick="return confirm(&quot;Click Ok to delete Thangnam.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Thangnam</dt>
            <dd>{{ $thangnam->thangnam }}</dd>
            <dt>Namhoc</dt>
            <dd>{{ optional($thangnam->Namhoc)->namhoc }}</dd>
            <dt>Sotien</dt>
            <dd>{{ $thangnam->sotien }}</dd>

        </dl>

    </div>
</div>

@endsection