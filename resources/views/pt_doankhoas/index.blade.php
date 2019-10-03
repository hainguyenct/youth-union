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
                <h4 class="mt-5 mb-5">Pt Doankhoas</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('pt_doankhoas.pt_doankhoa.create') }}" class="btn btn-success" title="Create New Pt Doankhoa">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($ptDoankhoas) == 0)
            <div class="panel-body text-center">
                <h4>No Pt Doankhoas Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>L O A I  P T</th>
                            <th>D O A N K H O A</th>
                            <th>D O A N P H I  C H I  D K</th>
                            <th>H O C K Y</th>
                            <th>T E N  P T  D K</th>
                            <th>N G A Y  B T  P T  D K</th>
                            <th>N G A Y  K T  P T  D K</th>
                            <th>G H I C H U  P T  D K</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($ptDoankhoas as $ptDoankhoa)
                        <tr>
                            <td>{{ optional($ptDoankhoa->LoaiPt)->TEN_LOAI_PT }}</td>
                            <td>{{ optional($ptDoankhoa->Doankhoa)->TEN_DK }}</td>
                            <td>{{ optional($ptDoankhoa->DoanphiChiDk)->SOTIEN_CHI_DK }}</td>
                            <td>{{ optional($ptDoankhoa->Hocky)->TEN_HK }}</td>
                            <td>{{ $ptDoankhoa->TEN_PT_DK }}</td>
                            <td>{{ $ptDoankhoa->NGAY_BT_PT_DK }}</td>
                            <td>{{ $ptDoankhoa->NGAY_KT_PT_DK }}</td>
                            <td>{{ $ptDoankhoa->GHICHU_PT_DK }}</td>

                            <td>

                                <form method="POST" action="{!! route('pt_doankhoas.pt_doankhoa.destroy', $ptDoankhoa->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('pt_doankhoas.pt_doankhoa.show', $ptDoankhoa->ID ) }}" class="btn btn-info" title="Show Pt Doankhoa">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('pt_doankhoas.pt_doankhoa.edit', $ptDoankhoa->ID ) }}" class="btn btn-primary" title="Edit Pt Doankhoa">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Pt Doankhoa" onclick="return confirm(&quot;Click Ok to delete Pt Doankhoa.&quot;)">
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
            {!! $ptDoankhoas->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection