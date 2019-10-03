@extends('layouts.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Doanphi Chi Cds</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('doanphi_chi_cds.doanphi_chi_cd.create') }}" class="btn btn-success" title="Create New Doanphi Chi Cd">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($doanphiChiCds) == 0)
            <div class="panel-body text-center">
                <h4>No Doanphi Chi Cds Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>L O A I  D P  C H I</th>
                            <th>S O T I E N  C H I  C D</th>
                            <th>N G A Y  C H I  C D</th>
                            <th>N G U O I  N H A N  P H I E U  C H I  C D</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($doanphiChiCds as $doanphiChiCd)
                        <tr>
                            <td>{{ optional($doanphiChiCd->LoaiDpChi)->TEN_LOAI_DP }}</td>
                            <td>{{ $doanphiChiCd->SOTIEN_CHI_CD }}</td>
                            <td>{{ $doanphiChiCd->NGAY_CHI_CD }}</td>
                            <td>{{ $doanphiChiCd->NGUOI_NHAN_PHIEU_CHI_CD }}</td>

                            <td>

                                <form method="POST" action="{!! route('doanphi_chi_cds.doanphi_chi_cd.destroy', $doanphiChiCd->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('doanphi_chi_cds.doanphi_chi_cd.show', $doanphiChiCd->ID ) }}" class="btn btn-info" title="Show Doanphi Chi Cd">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('doanphi_chi_cds.doanphi_chi_cd.edit', $doanphiChiCd->ID ) }}" class="btn btn-primary" title="Edit Doanphi Chi Cd">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Doanphi Chi Cd" onclick="return confirm(&quot;Click Ok to delete Doanphi Chi Cd.&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $doanphiChiCds->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection