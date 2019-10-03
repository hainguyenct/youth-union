@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Hocky' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('hockies.hocky.destroy', $hocky->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('hockies.hocky.index') }}" class="btn btn-primary" title="Show All Hocky">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('hockies.hocky.create') }}" class="btn btn-success" title="Create New Hocky">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('hockies.hocky.edit', $hocky->ID ) }}" class="btn btn-primary" title="Edit Hocky">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Hocky" onclick="return confirm(&quot;Click Ok to delete Hocky.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>N A M H O C</dt>
            <dd>{{ optional($hocky->Namhoc)->TEN_NH }}</dd>
            <dt>T E N  H K</dt>
            <dd>{{ $hocky->TEN_HK }}</dd>

        </dl>

    </div>
</div>

@endsection