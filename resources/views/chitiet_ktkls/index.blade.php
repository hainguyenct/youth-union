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
                <h4 class="mt-5 mb-5">Chitiet Ktkls</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('chitiet_ktkls.chitiet_ktkl.create') }}" class="btn btn-success" title="Create New Chitiet Ktkl">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($chitietKtkls) == 0)
            <div class="panel-body text-center">
                <h4>No Chitiet Ktkls Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>D O A N V I E N  T H A N H N I E N</th>
                            <th>K H E N T H U O N G  K Y L U A T</th>
                            <th>N O I D U N G  K T K L</th>
                            <th>N G A Y B A T D A U</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($chitietKtkls as $chitietKtkl)
                        <tr>
                            <td>{{ optional($chitietKtkl->DoanvienThanhnien)->PHUONG_XA_ID_QQ }}</td>
                            <td>{{ optional($chitietKtkl->KhenthuongKyluat)->TEN_KTKL }}</td>
                            <td>{{ $chitietKtkl->NOIDUNG_KTKL }}</td>
                            <td>{{ $chitietKtkl->NGAYBATDAU }}</td>

                            <td>

                                <form method="POST" action="{!! route('chitiet_ktkls.chitiet_ktkl.destroy', $chitietKtkl->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('chitiet_ktkls.chitiet_ktkl.show', $chitietKtkl->ID ) }}" class="btn btn-info" title="Show Chitiet Ktkl">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('chitiet_ktkls.chitiet_ktkl.edit', $chitietKtkl->ID ) }}" class="btn btn-primary" title="Edit Chitiet Ktkl">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Chitiet Ktkl" onclick="return confirm(&quot;Click Ok to delete Chitiet Ktkl.&quot;)">
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
            {!! $chitietKtkls->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection