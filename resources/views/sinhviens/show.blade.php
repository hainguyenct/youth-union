@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Sinhvien' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('sinhviens.sinhvien.destroy', $sinhvien->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('sinhviens.sinhvien.index') }}" class="btn btn-primary" title="Show All Sinhvien">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('sinhviens.sinhvien.create') }}" class="btn btn-success" title="Create New Sinhvien">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('sinhviens.sinhvien.edit', $sinhvien->id ) }}" class="btn btn-primary" title="Edit Sinhvien">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Sinhvien" onclick="return confirm(&quot;Click Ok to delete Sinhvien.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Mssv</dt>
            <dd>{{ $sinhvien->mssv }}</dd>
            <dt>Hoten</dt>
            <dd>{{ $sinhvien->hoten }}</dd>
            <dt>Namsinh</dt>
            <dd>{{ $sinhvien->namsinh }}</dd>

        </dl>

    </div>
</div>

@endsection