@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Hinhthuc Ktkl' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('hinhthuc_ktkls.hinhthuc_ktkl.destroy', $hinhthucKtkl->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('hinhthuc_ktkls.hinhthuc_ktkl.index') }}" class="btn btn-primary" title="Show All Hinhthuc Ktkl">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('hinhthuc_ktkls.hinhthuc_ktkl.create') }}" class="btn btn-success" title="Create New Hinhthuc Ktkl">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('hinhthuc_ktkls.hinhthuc_ktkl.edit', $hinhthucKtkl->ID ) }}" class="btn btn-primary" title="Edit Hinhthuc Ktkl">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Hinhthuc Ktkl" onclick="return confirm(&quot;Click Ok to delete Hinhthuc Ktkl.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>T E N  H T</dt>
            <dd>{{ $hinhthucKtkl->TEN_HT }}</dd>

        </dl>

    </div>
</div>

@endsection