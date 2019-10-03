@extends('layouts.layout(demo2).app(demo2)')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Loai Noidung Pdg' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('loai_noidung_pdgs.loai_noidung_pdg.destroy', $loaiNoidungPdg->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('loai_noidung_pdgs.loai_noidung_pdg.index') }}" class="btn btn-primary" title="Show All Loai Noidung Pdg">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('loai_noidung_pdgs.loai_noidung_pdg.create') }}" class="btn btn-success" title="Create New Loai Noidung Pdg">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('loai_noidung_pdgs.loai_noidung_pdg.edit', $loaiNoidungPdg->ID ) }}" class="btn btn-primary" title="Edit Loai Noidung Pdg">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Loai Noidung Pdg" onclick="return confirm(&quot;Click Ok to delete Loai Noidung Pdg.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>T E N  L O A I  N D P D G</dt>
            <dd>{{ $loaiNoidungPdg->TEN_LOAI_NDPDG }}</dd>

        </dl>

    </div>
</div>

@endsection