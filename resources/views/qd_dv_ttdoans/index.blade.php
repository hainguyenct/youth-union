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
                <h4 class="mt-5 mb-5">Qd Dv Ttdoans</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('qd_dv_ttdoans.qd_dv_ttdoan.create') }}" class="btn btn-success" title="Create New Qd Dv Ttdoan">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($qdDvTtdoans) == 0)
            <div class="panel-body text-center">
                <h4>No Qd Dv Ttdoans Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>D V  T T  D O A N</th>
                            <th>D O A N V I E N  T H A N H N I E N</th>
                            <th>D U Y E T  T T D</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($qdDvTtdoans as $qdDvTtdoan)
                        <tr>
                            <td>{{ optional($qdDvTtdoan->DvTtDoan)->NGAYTTDOAN }}</td>
                            <td>{{ optional($qdDvTtdoan->DoanvienThanhnien)->PHUONG_XA_ID_QQ }}</td>
                            <td>{{ $qdDvTtdoan->DUYET_TTD }}</td>

                            <td>

                                <form method="POST" action="{!! route('qd_dv_ttdoans.qd_dv_ttdoan.destroy', $qdDvTtdoan->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('qd_dv_ttdoans.qd_dv_ttdoan.show', $qdDvTtdoan->ID ) }}" class="btn btn-info" title="Show Qd Dv Ttdoan">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('qd_dv_ttdoans.qd_dv_ttdoan.edit', $qdDvTtdoan->ID ) }}" class="btn btn-primary" title="Edit Qd Dv Ttdoan">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Qd Dv Ttdoan" onclick="return confirm(&quot;Click Ok to delete Qd Dv Ttdoan.&quot;)">
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
            {!! $qdDvTtdoans->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection