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
                <h4 class="mt-5 mb-5">Chidoans</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('chidoans.chidoan.create') }}" class="btn btn-success" title="Create New Chidoan">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($chidoans) == 0)
            <div class="panel-body text-center">
                <h4>No Chidoans Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>P H I E U D A N H G I A  C H I D O A N</th>
                            <th>D O A N P H I  C H I  C D</th>
                            <th>D O A N K H O A</th>
                            <th>K H O A</th>
                            <th>T E N  C D</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($chidoans as $chidoan)
                        <tr>
                            <td>{{ optional($chidoan->PhieudanhgiaChidoan)->TEN_PDGCD }}</td>
                            <td>{{ optional($chidoan->DoanphiChiCd)->SOTIEN_CHI_CD }}</td>
                            <td>{{ optional($chidoan->Doankhoa)->TEN_DK }}</td>
                            <td>{{ optional($chidoan->Khoa)->TEN_KHOA }}</td>
                            <td>{{ $chidoan->TEN_CD }}</td>

                            <td>

                                <form method="POST" action="{!! route('chidoans.chidoan.destroy', $chidoan->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('chidoans.chidoan.show', $chidoan->ID ) }}" class="btn btn-info" title="Show Chidoan">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('chidoans.chidoan.edit', $chidoan->ID ) }}" class="btn btn-primary" title="Edit Chidoan">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Chidoan" onclick="return confirm(&quot;Click Ok to delete Chidoan.&quot;)">
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
            {!! $chidoans->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection