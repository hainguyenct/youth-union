@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Khenthuong Kyluat' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('khenthuong_kyluats.khenthuong_kyluat.destroy', $khenthuongKyluat->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('khenthuong_kyluats.khenthuong_kyluat.index') }}" class="btn btn-primary" title="Show All Khenthuong Kyluat">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('khenthuong_kyluats.khenthuong_kyluat.create') }}" class="btn btn-success" title="Create New Khenthuong Kyluat">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('khenthuong_kyluats.khenthuong_kyluat.edit', $khenthuongKyluat->ID ) }}" class="btn btn-primary" title="Edit Khenthuong Kyluat">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Khenthuong Kyluat" onclick="return confirm(&quot;Click Ok to delete Khenthuong Kyluat.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>L O A I  K T K L</dt>
            <dd>{{ optional($khenthuongKyluat->LoaiKtkl)->TEN_LOAIKTKL }}</dd>
            <dt>H I N H T H U C  K T K L</dt>
            <dd>{{ optional($khenthuongKyluat->HinhthucKtkl)->TEN_HT }}</dd>
            <dt>T E N  K T K L</dt>
            <dd>{{ $khenthuongKyluat->TEN_KTKL }}</dd>

        </dl>

    </div>
</div>

@endsection