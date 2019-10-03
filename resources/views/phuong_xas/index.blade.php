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
                <h4 class="mt-5 mb-5">Phuong Xas</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('phuong_xas.phuong_xa.create') }}" class="btn btn-success" title="Create New Phuong Xa">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($phuongXas) == 0)
            <div class="panel-body text-center">
                <h4>No Phuong Xas Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Q U A N  H U Y E N</th>
                            <th>T E N  P X</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($phuongXas as $phuongXa)
                        <tr>
                            <td>{{ optional($phuongXa->QuanHuyen)->TEN_QD }}</td>
                            <td>{{ $phuongXa->TEN_PX }}</td>

                            <td>

                                <form method="POST" action="{!! route('phuong_xas.phuong_xa.destroy', $phuongXa->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('phuong_xas.phuong_xa.show', $phuongXa->ID ) }}" class="btn btn-info" title="Show Phuong Xa">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('phuong_xas.phuong_xa.edit', $phuongXa->ID ) }}" class="btn btn-primary" title="Edit Phuong Xa">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Phuong Xa" onclick="return confirm(&quot;Click Ok to delete Phuong Xa.&quot;)">
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
            {!! $phuongXas->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection