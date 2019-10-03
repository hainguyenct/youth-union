@extends('layouts.layout(demo2).app(demo2)')

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
            <h4 class="mt-5 mb-5">Noidung Pdgs</h4>
        </div>

        <div class="btn-group btn-group-sm pull-right" role="group">
            <a href="{{ route('noidung_pdgs.noidung_pdg.create') }}" class="btn btn-success" title="Create New Noidung Pdg">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            </a>
        </div>

    </div>

    @if(count($noidungPdgs) == 0)
    <div class="panel-body text-center">
        <h4>No Noidung Pdgs Available.</h4>
    </div>
    @else
    <div class="panel-body panel-body-with-table">
        <div class="table-responsive">

            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Stt</th>
                        <th>N O I D U N G  C H A  P D G</th>
                        <th>L O A I  N O I D U N G  P D G</th>
                        <th>T E N  N D P D G</th>
                        <th>N O I D U N G  N D P D G</th>
                        <th>D I E M T O I D A  N D P D G</th>
                        <th>K I E U  D U L I E U</th>

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($noidungPdgs as $noidungPdg)
                    <tr>
                        <td>{{ $noidungPdg->ID }}</td>
                        <td>{{ optional($noidungPdg->ParentNoidungPdg)->TEN_NDPDG }}</td>
                        <td>{{ optional($noidungPdg->LoaiNoidungPdg)->TEN_LOAI_NDPDG }}</td>
                        <td>{{ $noidungPdg->TEN_NDPDG }}</td>
                        <td>{{ $noidungPdg->NOIDUNG_NDPDG }}</td>
                        <td>{{ $noidungPdg->DIEMTOIDA_NDPDG }}</td>
                        <td>{{ optional($noidungPdg->KieuDulieu)->ten_kieu_dulieu }}</td>

                        <td>

                            <form method="POST" action="{!! route('noidung_pdgs.noidung_pdg.destroy', $noidungPdg->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                <div class="btn-group btn-group-xs pull-right" role="group">
                                    <a href="{{ route('noidung_pdgs.noidung_pdg.show', $noidungPdg->ID ) }}" class="btn btn-info" title="Show Noidung Pdg">
                                        <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                    </a>
                                    <a href="{{ route('noidung_pdgs.noidung_pdg.edit', $noidungPdg->ID ) }}" class="btn btn-primary" title="Edit Noidung Pdg">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>

                                    <button type="submit" class="btn btn-danger" title="Delete Noidung Pdg" onclick="return confirm(&quot;Click Ok to delete Noidung Pdg.&quot;)">
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
        {!! $noidungPdgs->render() !!}
    </div>

    @endif
    
</div>
@endsection