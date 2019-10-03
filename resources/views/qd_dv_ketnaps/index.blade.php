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
                <h4 class="mt-5 mb-5">Qd Dv Ketnaps</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('qd_dv_ketnaps.qd_dv_ketnap.create') }}" class="btn btn-success" title="Create New Qd Dv Ketnap">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($qdDvKetnaps) == 0)
            <div class="panel-body text-center">
                <h4>No Qd Dv Ketnaps Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>D V  K E T N A P</th>
                            <th>D O A N V I E N  T H A N H N I E N</th>
                            <th>D U Y E T  K N</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($qdDvKetnaps as $qdDvKetnap)
                        <tr>
                            <td>{{ optional($qdDvKetnap->DvKetnap)->NGAYKETNAP }}</td>
                            <td>{{ optional($qdDvKetnap->DoanvienThanhnien)->PHUONG_XA_ID_QQ }}</td>
                            <td>{{ $qdDvKetnap->DUYET_KN }}</td>

                            <td>

                                <form method="POST" action="{!! route('qd_dv_ketnaps.qd_dv_ketnap.destroy', $qdDvKetnap->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('qd_dv_ketnaps.qd_dv_ketnap.show', $qdDvKetnap->ID ) }}" class="btn btn-info" title="Show Qd Dv Ketnap">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('qd_dv_ketnaps.qd_dv_ketnap.edit', $qdDvKetnap->ID ) }}" class="btn btn-primary" title="Edit Qd Dv Ketnap">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Qd Dv Ketnap" onclick="return confirm(&quot;Click Ok to delete Qd Dv Ketnap.&quot;)">
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
            {!! $qdDvKetnaps->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection