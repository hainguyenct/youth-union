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
                <h4 class="mt-5 mb-5">Pt Chidoans</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('pt_chidoans.pt_chidoan.create') }}" class="btn btn-success" title="Create New Pt Chidoan">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($ptChidoans) == 0)
            <div class="panel-body text-center">
                <h4>No Pt Chidoans Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>H O C K Y</th>
                            <th>L O A I  P T</th>
                            <th>C H I D O A N</th>
                            <th>D O A N P H I  C H I  C D</th>
                            <th>T E N  P T  C D</th>
                            <th>N G A Y  B D  P T  C D</th>
                            <th>N G A Y  K T  P T  C D</th>
                            <th>G H I C H U  P T  C D</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($ptChidoans as $ptChidoan)
                        <tr>
                            <td>{{ optional($ptChidoan->Hocky)->TEN_HK }}</td>
                            <td>{{ optional($ptChidoan->LoaiPt)->TEN_LOAI_PT }}</td>
                            <td>{{ optional($ptChidoan->Chidoan)->TEN_CD }}</td>
                            <td>{{ optional($ptChidoan->DoanphiChiCd)->SOTIEN_CHI_CD }}</td>
                            <td>{{ $ptChidoan->TEN_PT_CD }}</td>
                            <td>{{ $ptChidoan->NGAY_BD_PT_CD }}</td>
                            <td>{{ $ptChidoan->NGAY_KT_PT_CD }}</td>
                            <td>{{ $ptChidoan->GHICHU_PT_CD }}</td>

                            <td>

                                <form method="POST" action="{!! route('pt_chidoans.pt_chidoan.destroy', $ptChidoan->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('pt_chidoans.pt_chidoan.show', $ptChidoan->ID ) }}" class="btn btn-info" title="Show Pt Chidoan">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('pt_chidoans.pt_chidoan.edit', $ptChidoan->ID ) }}" class="btn btn-primary" title="Edit Pt Chidoan">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Pt Chidoan" onclick="return confirm(&quot;Click Ok to delete Pt Chidoan.&quot;)">
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
            {!! $ptChidoans->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection