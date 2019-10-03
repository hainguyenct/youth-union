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
                <h4 class="mt-5 mb-5">Khenthuong Kyluats</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('khenthuong_kyluats.khenthuong_kyluat.create') }}" class="btn btn-success" title="Create New Khenthuong Kyluat">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($khenthuongKyluats) == 0)
            <div class="panel-body text-center">
                <h4>No Khenthuong Kyluats Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>L O A I  K T K L</th>
                            <th>H I N H T H U C  K T K L</th>
                            <th>T E N  K T K L</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($khenthuongKyluats as $khenthuongKyluat)
                        <tr>
                            <td>{{ optional($khenthuongKyluat->LoaiKtkl)->TEN_LOAIKTKL }}</td>
                            <td>{{ optional($khenthuongKyluat->HinhthucKtkl)->TEN_HT }}</td>
                            <td>{{ $khenthuongKyluat->TEN_KTKL }}</td>

                            <td>

                                <form method="POST" action="{!! route('khenthuong_kyluats.khenthuong_kyluat.destroy', $khenthuongKyluat->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('khenthuong_kyluats.khenthuong_kyluat.show', $khenthuongKyluat->ID ) }}" class="btn btn-info" title="Show Khenthuong Kyluat">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('khenthuong_kyluats.khenthuong_kyluat.edit', $khenthuongKyluat->ID ) }}" class="btn btn-primary" title="Edit Khenthuong Kyluat">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Khenthuong Kyluat" onclick="return confirm(&quot;Click Ok to delete Khenthuong Kyluat.&quot;)">
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
            {!! $khenthuongKyluats->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection