@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Tongiao' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('tongiaos.tongiao.destroy', $tongiao->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('tongiaos.tongiao.index') }}" class="btn btn-primary" title="Show All Tongiao">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('tongiaos.tongiao.create') }}" class="btn btn-success" title="Create New Tongiao">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('tongiaos.tongiao.edit', $tongiao->ID ) }}" class="btn btn-primary" title="Edit Tongiao">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Tongiao" onclick="return confirm(&quot;Click Ok to delete Tongiao.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>T E N  T G</dt>
            <dd>{{ $tongiao->TEN_TG }}</dd>

        </dl>

    </div>
</div>

@endsection