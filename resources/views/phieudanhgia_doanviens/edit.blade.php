@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
  
        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">{{ !empty($title) ? $title : 'Phieudanhgia Doanvien' }}</h4>
            </div>
            <div class="btn-group btn-group-sm pull-right" role="group">

                <a href="{{ route('phieudanhgia_doanviens.phieudanhgia_doanvien.index') }}" class="btn btn-primary" title="Show All Phieudanhgia Doanvien">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('phieudanhgia_doanviens.phieudanhgia_doanvien.create') }}" class="btn btn-success" title="Create New Phieudanhgia Doanvien">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>

            </div>
        </div>

        <div class="panel-body">

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('phieudanhgia_doanviens.phieudanhgia_doanvien.update', $phieudanhgiaDoanvien->ID) }}" id="edit_phieudanhgia_doanvien_form" name="edit_phieudanhgia_doanvien_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('phieudanhgia_doanviens.form', [
                                        'phieudanhgiaDoanvien' => $phieudanhgiaDoanvien,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection