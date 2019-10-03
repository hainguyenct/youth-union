@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Khoa' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('khoas.khoa.destroy', $khoa->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('khoas.khoa.index') }}" class="btn btn-primary" title="Show All Khoa">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('khoas.khoa.create') }}" class="btn btn-success" title="Create New Khoa">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('khoas.khoa.edit', $khoa->ID ) }}" class="btn btn-primary" title="Edit Khoa">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Khoa" onclick="return confirm(&quot;Click Ok to delete Khoa.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>T E N  K H O A</dt>
            <dd>{{ $khoa->TEN_KHOA }}</dd>

        </dl>

    </div>
</div>

@endsection