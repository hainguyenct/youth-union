@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Doanphi Thu Dk' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('doanphi_thu_dks.doanphi_thu_dk.destroy', $doanphiThuDk->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('doanphi_thu_dks.doanphi_thu_dk.index') }}" class="btn btn-primary" title="Show All Doanphi Thu Dk">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('doanphi_thu_dks.doanphi_thu_dk.create') }}" class="btn btn-success" title="Create New Doanphi Thu Dk">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('doanphi_thu_dks.doanphi_thu_dk.edit', $doanphiThuDk->ID ) }}" class="btn btn-primary" title="Edit Doanphi Thu Dk">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Doanphi Thu Dk" onclick="return confirm(&quot;Click Ok to delete Doanphi Thu Dk.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>D O A N K H O A</dt>
            <dd>{{ optional($doanphiThuDk->Doankhoa)->TEN_DK }}</dd>
            <dt>T H A N G N A M</dt>
            <dd>{{ optional($doanphiThuDk->Thangnam)->id }}</dd>
            <dt>N G A Y  D O N G  D K</dt>
            <dd>{{ $doanphiThuDk->NGAY_DONG_DK }}</dd>

        </dl>

    </div>
</div>

@endsection