@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Phieudanhgia Sinhvien' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('phieudanhgia_sinhviens.phieudanhgia_sinhvien.destroy', $phieudanhgiaSinhvien->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('phieudanhgia_sinhviens.phieudanhgia_sinhvien.index') }}" class="btn btn-primary" title="Show All Phieudanhgia Sinhvien">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('phieudanhgia_sinhviens.phieudanhgia_sinhvien.create') }}" class="btn btn-success" title="Create New Phieudanhgia Sinhvien">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('phieudanhgia_sinhviens.phieudanhgia_sinhvien.edit', $phieudanhgiaSinhvien->ID ) }}" class="btn btn-primary" title="Edit Phieudanhgia Sinhvien">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Phieudanhgia Sinhvien" onclick="return confirm(&quot;Click Ok to delete Phieudanhgia Sinhvien.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>M A U P H I E U</dt>
            <dd>{{ optional($phieudanhgiaSinhvien->Mauphieu)->TEN_MP }}</dd>
            <dt>N A M H O C</dt>
            <dd>{{ optional($phieudanhgiaSinhvien->nAMHOC)->namhoc }}</dd>
            <dt>S I N H V I E N</dt>
            <dd>{{ optional($phieudanhgiaSinhvien->Sinhvien)->mssv }}</dd>
            <dt>X E P L O A I  S V</dt>
            <dd>{{ optional($phieudanhgiaSinhvien->xEPLOAISV)->id }}</dd>
            <dt>T E N  P D G S V</dt>
            <dd>{{ $phieudanhgiaSinhvien->TEN_PDGSV }}</dd>
            <dt>D I E M R E N L U Y E N</dt>
            <dd>{{ $phieudanhgiaSinhvien->DIEMRENLUYEN }}</dd>
            <dt>D I E M T R U N G B I N H</dt>
            <dd>{{ $phieudanhgiaSinhvien->DIEMTRUNGBINH }}</dd>

        </dl>

    </div>
</div>

@endsection