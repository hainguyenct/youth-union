@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Thanhtich Thamgia' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('thanhtich_thamgias.thanhtich_thamgia.destroy', $thanhtichThamgia->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('thanhtich_thamgias.thanhtich_thamgia.index') }}" class="btn btn-primary" title="Show All Thanhtich Thamgia">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('thanhtich_thamgias.thanhtich_thamgia.create') }}" class="btn btn-success" title="Create New Thanhtich Thamgia">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('thanhtich_thamgias.thanhtich_thamgia.edit', $thanhtichThamgia->ID ) }}" class="btn btn-primary" title="Edit Thanhtich Thamgia">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Thanhtich Thamgia" onclick="return confirm(&quot;Click Ok to delete Thanhtich Thamgia.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>D O A N V I E N  T H A N H N I E N</dt>
            <dd>{{ optional($thanhtichThamgia->DoanvienThanhnien)->PHUONG_XA_ID_QQ }}</dd>
            <dt>P T  D O A N K H O A</dt>
            <dd>{{ optional($thanhtichThamgia->PtDoankhoa)->TEN_PT_DK }}</dd>
            <dt>T H A N H T I C H</dt>
            <dd>{{ optional($thanhtichThamgia->Thanhtich)->TEN_TT }}</dd>
            <dt>D I E N G I A I</dt>
            <dd>{{ $thanhtichThamgia->DIENGIAI }}</dd>

        </dl>

    </div>
</div>

@endsection