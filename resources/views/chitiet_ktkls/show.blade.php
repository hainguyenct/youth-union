@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Chitiet Ktkl' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('chitiet_ktkls.chitiet_ktkl.destroy', $chitietKtkl->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('chitiet_ktkls.chitiet_ktkl.index') }}" class="btn btn-primary" title="Show All Chitiet Ktkl">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('chitiet_ktkls.chitiet_ktkl.create') }}" class="btn btn-success" title="Create New Chitiet Ktkl">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('chitiet_ktkls.chitiet_ktkl.edit', $chitietKtkl->ID ) }}" class="btn btn-primary" title="Edit Chitiet Ktkl">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Chitiet Ktkl" onclick="return confirm(&quot;Click Ok to delete Chitiet Ktkl.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>D O A N V I E N  T H A N H N I E N</dt>
            <dd>{{ optional($chitietKtkl->DoanvienThanhnien)->PHUONG_XA_ID_QQ }}</dd>
            <dt>K H E N T H U O N G  K Y L U A T</dt>
            <dd>{{ optional($chitietKtkl->KhenthuongKyluat)->TEN_KTKL }}</dd>
            <dt>N O I D U N G  K T K L</dt>
            <dd>{{ $chitietKtkl->NOIDUNG_KTKL }}</dd>
            <dt>N G A Y B A T D A U</dt>
            <dd>{{ $chitietKtkl->NGAYBATDAU }}</dd>

        </dl>

    </div>
</div>

@endsection