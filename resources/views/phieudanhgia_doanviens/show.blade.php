@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Phieudanhgia Doanvien' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('phieudanhgia_doanviens.phieudanhgia_doanvien.destroy', $phieudanhgiaDoanvien->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('phieudanhgia_doanviens.phieudanhgia_doanvien.index') }}" class="btn btn-primary" title="Show All Phieudanhgia Doanvien">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('phieudanhgia_doanviens.phieudanhgia_doanvien.create') }}" class="btn btn-success" title="Create New Phieudanhgia Doanvien">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('phieudanhgia_doanviens.phieudanhgia_doanvien.edit', $phieudanhgiaDoanvien->ID ) }}" class="btn btn-primary" title="Edit Phieudanhgia Doanvien">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Phieudanhgia Doanvien" onclick="return confirm(&quot;Click Ok to delete Phieudanhgia Doanvien.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>N A M H O C</dt>
            <dd>{{ optional($phieudanhgiaDoanvien->Namhoc)->namhoc }}</dd>
            <dt>S I N H V I E N</dt>
            <dd>{{ optional($phieudanhgiaDoanvien->Sinhvien)->mssv }}</dd>
            <dt>T E N  P D G D V</dt>
            <dd>{{ $phieudanhgiaDoanvien->TEN_PDGDV }}</dd>
            <dt>D I E M R E N L U Y E N</dt>
            <dd>{{ $phieudanhgiaDoanvien->DIEMRENLUYEN }}</dd>
            <dt>D I E M T R U N G B I N H</dt>
            <dd>{{ $phieudanhgiaDoanvien->DIEMTRUNGBINH }}</dd>

        </dl>

    </div>
</div>

@endsection