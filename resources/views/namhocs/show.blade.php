@extends('layouts.app(demo)')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Namhoc' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('namhocs.namhoc.destroy', $namhoc->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('namhocs.namhoc.index') }}" class="btn btn-primary" title="Show All Namhoc">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('namhocs.namhoc.create') }}" class="btn btn-success" title="Create New Namhoc">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('namhocs.namhoc.edit', $namhoc->id ) }}" class="btn btn-primary" title="Edit Namhoc">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Namhoc" onclick="return confirm(&quot;Click Ok to delete Namhoc.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Namhoc</dt>
            <dd>{{ $namhoc->namhoc }}</dd>

        </dl>

    </div>
</div>

@endsection