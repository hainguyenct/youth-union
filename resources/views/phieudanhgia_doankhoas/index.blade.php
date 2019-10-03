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
                <h4 class="mt-5 mb-5">Phieudanhgia Doankhoas</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('phieudanhgia_doankhoas.phieudanhgia_doankhoa.create') }}" class="btn btn-success" title="Create New Phieudanhgia Doankhoa">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($phieudanhgiaDoankhoas) == 0)
            <div class="panel-body text-center">
                <h4>No Phieudanhgia Doankhoas Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>X E P L O A I  D K</th>
                            <th>M A U P H I E U</th>
                            <th>T E N  P D G D K</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($phieudanhgiaDoankhoas as $phieudanhgiaDoankhoa)
                        <tr>
                            <td>{{ optional($phieudanhgiaDoankhoa->XeploaiDk)->TEN_XLDK }}</td>
                            <td>{{ optional($phieudanhgiaDoankhoa->Mauphieu)->TEN_MP }}</td>
                            <td>{{ $phieudanhgiaDoankhoa->TEN_PDGDK }}</td>

                            <td>

                                <form method="POST" action="{!! route('phieudanhgia_doankhoas.phieudanhgia_doankhoa.destroy', $phieudanhgiaDoankhoa->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('phieudanhgia_doankhoas.phieudanhgia_doankhoa.show', $phieudanhgiaDoankhoa->ID ) }}" class="btn btn-info" title="Show Phieudanhgia Doankhoa">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('phieudanhgia_doankhoas.phieudanhgia_doankhoa.edit', $phieudanhgiaDoankhoa->ID ) }}" class="btn btn-primary" title="Edit Phieudanhgia Doankhoa">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Phieudanhgia Doankhoa" onclick="return confirm(&quot;Click Ok to delete Phieudanhgia Doankhoa.&quot;)">
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
            {!! $phieudanhgiaDoankhoas->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection