@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Doanphi Chi Dk' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('doanphi_chi_dks.doanphi_chi_dk.destroy', $doanphiChiDk->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('doanphi_chi_dks.doanphi_chi_dk.index') }}" class="btn btn-primary" title="Show All Doanphi Chi Dk">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('doanphi_chi_dks.doanphi_chi_dk.create') }}" class="btn btn-success" title="Create New Doanphi Chi Dk">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('doanphi_chi_dks.doanphi_chi_dk.edit', $doanphiChiDk->ID ) }}" class="btn btn-primary" title="Edit Doanphi Chi Dk">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Doanphi Chi Dk" onclick="return confirm(&quot;Click Ok to delete Doanphi Chi Dk.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>L O A I  D P  C H I</dt>
            <dd>{{ optional($doanphiChiDk->LoaiDpChi)->TEN_LOAI_DP }}</dd>
            <dt>S O T I E N  C H I  D K</dt>
            <dd>{{ $doanphiChiDk->SOTIEN_CHI_DK }}</dd>
            <dt>N G A Y  C H I  D K</dt>
            <dd>{{ $doanphiChiDk->NGAY_CHI_DK }}</dd>
            <dt>N G U O I  N H A N  P H I E U  C H I  D K</dt>
            <dd>{{ $doanphiChiDk->NGUOI_NHAN_PHIEU_CHI_DK }}</dd>

        </dl>

    </div>
</div>

@endsection