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
                <h4 class="mt-5 mb-5">Chitiet Pdg Svs</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('chitiet_pdg_svs.chitiet_pdg_sv.create') }}" class="btn btn-success" title="Create New Chitiet Pdg Sv">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($chitietPdgSvs) == 0)
            <div class="panel-body text-center">
                <h4>No Chitiet Pdg Svs Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>P H I E U D A N H G I A  S I N H V I E N</th>
                            <th>N O I D U N G  P D G</th>
                            <th>D I E M  D U Y E T  P D G S V</th>
                            <th>D I E M  S V  T U D A N H G I A</th>
                            <th>G H I C H U  P D G S V</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($chitietPdgSvs as $chitietPdgSv)
                        <tr>
                            <td>{{ optional($chitietPdgSv->PhieudanhgiaSinhvien)->TEN_PDGSV }}</td>
                            <td>{{ optional($chitietPdgSv->NoidungPdg)->TEN_NDPDG }}</td>
                            <td>{{ $chitietPdgSv->DIEM_DUYET_PDGSV }}</td>
                            <td>{{ $chitietPdgSv->DIEM_SV_TUDANHGIA }}</td>
                            <td>{{ $chitietPdgSv->GHICHU_PDGSV }}</td>

                            <td>

                                <form method="POST" action="{!! route('chitiet_pdg_svs.chitiet_pdg_sv.destroy', $chitietPdgSv->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('chitiet_pdg_svs.chitiet_pdg_sv.show', $chitietPdgSv->ID ) }}" class="btn btn-info" title="Show Chitiet Pdg Sv">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('chitiet_pdg_svs.chitiet_pdg_sv.edit', $chitietPdgSv->ID ) }}" class="btn btn-primary" title="Edit Chitiet Pdg Sv">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Chitiet Pdg Sv" onclick="return confirm(&quot;Click Ok to delete Chitiet Pdg Sv.&quot;)">
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
            {!! $chitietPdgSvs->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection