@extends('layouts.layout(demo2).app(demo2)')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading clearfix">
            
            <span class="pull-left">
                <h4 class="mt-5 mb-5">Create New Loai Noidung Pdg</h4>
            </span>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('loai_noidung_pdgs.loai_noidung_pdg.index') }}" class="btn btn-primary" title="Show All Loai Noidung Pdg">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
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

            <form method="POST" action="{{ route('loai_noidung_pdgs.loai_noidung_pdg.store') }}" accept-charset="UTF-8" id="create_loai_noidung_pdg_form" name="create_loai_noidung_pdg_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('loai_noidung_pdgs.form', [
                                        'loaiNoidungPdg' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Add">
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection


