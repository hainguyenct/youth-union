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
                <h4 class="mt-5 mb-5">Doanphi Thu Dvs</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('doanphi_thu_dvs.doanphi_thu_dv.create') }}" class="btn btn-success" title="Create New Doanphi Thu Dv">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($doanphiThuDvs) == 0)
            <div class="panel-body text-center">
                <h4>No Doanphi Thu Dvs Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>D O A N V I E N  T H A N H N I E N</th>
                            <th>T H A N G N A M</th>
                            <th>N G A Y  D O N G  D P  D V</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($doanphiThuDvs as $doanphiThuDv)
                        <tr>
                            <td>{{ optional($doanphiThuDv->DoanvienThanhnien)->PHUONG_XA_ID_QQ }}</td>
                            <td>{{ optional($doanphiThuDv->Thangnam)->id }}</td>
                            <td>{{ $doanphiThuDv->NGAY_DONG_DP_DV }}</td>

                            <td>

                                <form method="POST" action="{!! route('doanphi_thu_dvs.doanphi_thu_dv.destroy', $doanphiThuDv->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('doanphi_thu_dvs.doanphi_thu_dv.show', $doanphiThuDv->ID ) }}" class="btn btn-info" title="Show Doanphi Thu Dv">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('doanphi_thu_dvs.doanphi_thu_dv.edit', $doanphiThuDv->ID ) }}" class="btn btn-primary" title="Edit Doanphi Thu Dv">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Doanphi Thu Dv" onclick="return confirm(&quot;Click Ok to delete Doanphi Thu Dv.&quot;)">
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
            {!! $doanphiThuDvs->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection