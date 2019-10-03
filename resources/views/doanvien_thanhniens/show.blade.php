@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Doanvien Thanhnien' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('doanvien_thanhniens.doanvien_thanhnien.destroy', $doanvienThanhnien->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('doanvien_thanhniens.doanvien_thanhnien.index') }}" class="btn btn-primary" title="Show All Doanvien Thanhnien">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('doanvien_thanhniens.doanvien_thanhnien.create') }}" class="btn btn-success" title="Create New Doanvien Thanhnien">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('doanvien_thanhniens.doanvien_thanhnien.edit', $doanvienThanhnien->ID ) }}" class="btn btn-primary" title="Edit Doanvien Thanhnien">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Doanvien Thanhnien" onclick="return confirm(&quot;Click Ok to delete Doanvien Thanhnien.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>P H U O N G  X A</dt>
            <dd>{{ optional($doanvienThanhnien->PhuongXa)->TEN_PX }}</dd>
            <dt>C H I D O A N</dt>
            <dd>{{ optional($doanvienThanhnien->Chidoan)->TEN_CD }}</dd>
            <dt>T O N G I A O</dt>
            <dd>{{ optional($doanvienThanhnien->Tongiao)->TEN_TG }}</dd>
            <dt>P H U O N G  X A</dt>
            <dd>{{ optional($doanvienThanhnien->PhuongXa)->TEN_PX }}</dd>
            <dt>D A N T O C</dt>
            <dd>{{ optional($doanvienThanhnien->Dantoc)->TEN_DT }}</dd>
            <dt>T E N  S V</dt>
            <dd>{{ $doanvienThanhnien->TEN_SV }}</dd>
            <dt>N G A Y S I N H  S V</dt>
            <dd>{{ $doanvienThanhnien->NGAYSINH_SV }}</dd>
            <dt>D I A C H I  S V</dt>
            <dd>{{ $doanvienThanhnien->DIACHI_SV }}</dd>
            <dt>P H A I  S V</dt>
            <dd>{{ $doanvienThanhnien->PHAI_SV }}</dd>
            <dt>S D T  S V</dt>
            <dd>{{ $doanvienThanhnien->SDT_SV }}</dd>
            <dt>E M A I L  S V</dt>
            <dd>{{ $doanvienThanhnien->EMAIL_SV }}</dd>
            <dt>N G A Y V A O D O A N  S V</dt>
            <dd>{{ $doanvienThanhnien->NGAYVAODOAN_SV }}</dd>
            <dt>N O I V A O D O A N  S V</dt>
            <dd>{{ $doanvienThanhnien->NOIVAODOAN_SV }}</dd>
            <dt>M A T K H A U  D V</dt>
            <dd>{{ $doanvienThanhnien->MATKHAU_DV }}</dd>

        </dl>

    </div>
</div>

@endsection