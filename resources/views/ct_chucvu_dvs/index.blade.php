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
                <h4 class="mt-5 mb-5">Ct Chucvu Dvs</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('ct_chucvu_dvs.ct_chucvu_dv.create') }}" class="btn btn-success" title="Create New Ct Chucvu Dv">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($ctChucvuDvs) == 0)
            <div class="panel-body text-center">
                <h4>No Ct Chucvu Dvs Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>D O A N V I E N  T H A N H N I E N</th>
                            <th>C H U C V U  D V</th>
                            <th>N G A Y B D  C V</th>
                            <th>N G A Y K T  C V</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($ctChucvuDvs as $ctChucvuDv)
                        <tr>
                            <td>{{ optional($ctChucvuDv->DoanvienThanhnien)->PHUONG_XA_ID_QQ }}</td>
                            <td>{{ optional($ctChucvuDv->ChucvuDv)->TEN_CHUCVU }}</td>
                            <td>{{ $ctChucvuDv->NGAYBD_CV }}</td>
                            <td>{{ $ctChucvuDv->NGAYKT_CV }}</td>

                            <td>

                                <form method="POST" action="{!! route('ct_chucvu_dvs.ct_chucvu_dv.destroy', $ctChucvuDv->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('ct_chucvu_dvs.ct_chucvu_dv.show', $ctChucvuDv->ID ) }}" class="btn btn-info" title="Show Ct Chucvu Dv">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('ct_chucvu_dvs.ct_chucvu_dv.edit', $ctChucvuDv->ID ) }}" class="btn btn-primary" title="Edit Ct Chucvu Dv">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Ct Chucvu Dv" onclick="return confirm(&quot;Click Ok to delete Ct Chucvu Dv.&quot;)">
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
            {!! $ctChucvuDvs->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection