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
                <h4 class="mt-5 mb-5">Doankhoas</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('doankhoas.doankhoa.create') }}" class="btn btn-success" title="Create New Doankhoa">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($doankhoas) == 0)
            <div class="panel-body text-center">
                <h4>No Doankhoas Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>P H I E U D A N H G I A  D O A N K H O A</th>
                            <th>T E N  D K</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($doankhoas as $doankhoa)
                        <tr>
                            <td>{{ optional($doankhoa->PhieudanhgiaDoankhoa)->TEN_PDGDK }}</td>
                            <td>{{ $doankhoa->TEN_DK }}</td>

                            <td>

                                <form method="POST" action="{!! route('doankhoas.doankhoa.destroy', $doankhoa->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('doankhoas.doankhoa.show', $doankhoa->ID ) }}" class="btn btn-info" title="Show Doankhoa">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('doankhoas.doankhoa.edit', $doankhoa->ID ) }}" class="btn btn-primary" title="Edit Doankhoa">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Doankhoa" onclick="return confirm(&quot;Click Ok to delete Doankhoa.&quot;)">
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
            {!! $doankhoas->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection