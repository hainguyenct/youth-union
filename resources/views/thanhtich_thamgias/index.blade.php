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
                <h4 class="mt-5 mb-5">Thanhtich Thamgias</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('thanhtich_thamgias.thanhtich_thamgia.create') }}" class="btn btn-success" title="Create New Thanhtich Thamgia">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($thanhtichThamgias) == 0)
            <div class="panel-body text-center">
                <h4>No Thanhtich Thamgias Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>D O A N V I E N  T H A N H N I E N</th>
                            <th>P T  D O A N K H O A</th>
                            <th>T H A N H T I C H</th>
                            <th>D I E N G I A I</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($thanhtichThamgias as $thanhtichThamgia)
                        <tr>
                            <td>{{ optional($thanhtichThamgia->DoanvienThanhnien)->PHUONG_XA_ID_QQ }}</td>
                            <td>{{ optional($thanhtichThamgia->PtDoankhoa)->TEN_PT_DK }}</td>
                            <td>{{ optional($thanhtichThamgia->Thanhtich)->TEN_TT }}</td>
                            <td>{{ $thanhtichThamgia->DIENGIAI }}</td>

                            <td>

                                <form method="POST" action="{!! route('thanhtich_thamgias.thanhtich_thamgia.destroy', $thanhtichThamgia->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('thanhtich_thamgias.thanhtich_thamgia.show', $thanhtichThamgia->ID ) }}" class="btn btn-info" title="Show Thanhtich Thamgia">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('thanhtich_thamgias.thanhtich_thamgia.edit', $thanhtichThamgia->ID ) }}" class="btn btn-primary" title="Edit Thanhtich Thamgia">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Thanhtich Thamgia" onclick="return confirm(&quot;Click Ok to delete Thanhtich Thamgia.&quot;)">
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
            {!! $thanhtichThamgias->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection