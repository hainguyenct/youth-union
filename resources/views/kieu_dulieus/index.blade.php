@extends('layouts.layout(demo2).app(demo2)')

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
            <h4 class="mt-5 mb-5">Kieu Dulieus</h4>
        </div>

        <div class="btn-group btn-group-sm pull-right" role="group">
            <a href="{{ route('kieu_dulieus.kieu_dulieu.create') }}" class="btn btn-success" title="Create New Kieu Dulieu">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            </a>
        </div>

    </div>

    @if(count($kieuDulieus) == 0)
    <div class="panel-body text-center">
        <h4>No Kieu Dulieus Available.</h4>
    </div>
    @else
    <div class="panel-body panel-body-with-table">
        <div class="table-responsive">

            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Stt</th>
                        <th>Ten Kieu Dulieu</th>

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kieuDulieus as $kieuDulieu)
                    <tr>
                        <td>{{ $kieuDulieu->id }}</td>
                        <td>{{ $kieuDulieu->ten_kieu_dulieu }}</td>

                        <td>

                            <form method="POST" action="{!! route('kieu_dulieus.kieu_dulieu.destroy', $kieuDulieu->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                <div class="btn-group btn-group-xs pull-right" role="group">
                                    <a href="{{ route('kieu_dulieus.kieu_dulieu.show', $kieuDulieu->id ) }}" class="btn btn-info" title="Show Kieu Dulieu">
                                        <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                    </a>
                                    <a href="{{ route('kieu_dulieus.kieu_dulieu.edit', $kieuDulieu->id ) }}" class="btn btn-primary" title="Edit Kieu Dulieu">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>

                                    <button type="submit" class="btn btn-danger" title="Delete Kieu Dulieu" onclick="return confirm(&quot;Click Ok to delete Kieu Dulieu.&quot;)">
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
        {!! $kieuDulieus->render() !!}
    </div>

    @endif
    
</div>
@endsection