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
                <h4 class="mt-5 mb-5">Chitiet Pdg Dks</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('chitiet_pdg_dks.chitiet_pdg_dk.create') }}" class="btn btn-success" title="Create New Chitiet Pdg Dk">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($chitietPdgDks) == 0)
            <div class="panel-body text-center">
                <h4>No Chitiet Pdg Dks Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>P H I E U D A N H G I A  D O A N K H O A</th>
                            <th>N O I D U N G  P D G</th>
                            <th>D I E M  D U Y E T  P D G D K</th>
                            <th>D I E M  D K  T U D A N H G I A</th>
                            <th>G H I C H U  P D G D K</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($chitietPdgDks as $chitietPdgDk)
                        <tr>
                            <td>{{ optional($chitietPdgDk->PhieudanhgiaDoankhoa)->TEN_PDGDK }}</td>
                            <td>{{ optional($chitietPdgDk->NoidungPdg)->TEN_NDPDG }}</td>
                            <td>{{ $chitietPdgDk->DIEM_DUYET_PDGDK }}</td>
                            <td>{{ $chitietPdgDk->DIEM_DK_TUDANHGIA }}</td>
                            <td>{{ $chitietPdgDk->GHICHU_PDGDK }}</td>

                            <td>

                                <form method="POST" action="{!! route('chitiet_pdg_dks.chitiet_pdg_dk.destroy', $chitietPdgDk->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('chitiet_pdg_dks.chitiet_pdg_dk.show', $chitietPdgDk->ID ) }}" class="btn btn-info" title="Show Chitiet Pdg Dk">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('chitiet_pdg_dks.chitiet_pdg_dk.edit', $chitietPdgDk->ID ) }}" class="btn btn-primary" title="Edit Chitiet Pdg Dk">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Chitiet Pdg Dk" onclick="return confirm(&quot;Click Ok to delete Chitiet Pdg Dk.&quot;)">
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
            {!! $chitietPdgDks->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection