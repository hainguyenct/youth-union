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
                <h4 class="mt-5 mb-5">Doanphi Thu Cds</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('doanphi_thu_cds.doanphi_thu_cd.create') }}" class="btn btn-success" title="Create New Doanphi Thu Cd">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($doanphiThuCds) == 0)
            <div class="panel-body text-center">
                <h4>No Doanphi Thu Cds Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>C H I D O A N</th>
                            <th>T H A N G N A M</th>
                            <th>N G A Y  D O N G  C D</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($doanphiThuCds as $doanphiThuCd)
                        <tr>
                            <td>{{ optional($doanphiThuCd->Chidoan)->TEN_CD }}</td>
                            <td>{{ optional($doanphiThuCd->Thangnam)->id }}</td>
                            <td>{{ $doanphiThuCd->NGAY_DONG_CD }}</td>

                            <td>

                                <form method="POST" action="{!! route('doanphi_thu_cds.doanphi_thu_cd.destroy', $doanphiThuCd->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('doanphi_thu_cds.doanphi_thu_cd.show', $doanphiThuCd->ID ) }}" class="btn btn-info" title="Show Doanphi Thu Cd">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('doanphi_thu_cds.doanphi_thu_cd.edit', $doanphiThuCd->ID ) }}" class="btn btn-primary" title="Edit Doanphi Thu Cd">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Doanphi Thu Cd" onclick="return confirm(&quot;Click Ok to delete Doanphi Thu Cd.&quot;)">
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
            {!! $doanphiThuCds->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection