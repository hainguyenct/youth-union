@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading clearfix">
            
            <span class="pull-left">
                <h4 class="mt-5 mb-5">Create New Qd Dv Ketnap</h4>
            </span>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('qd_dv_ketnaps.qd_dv_ketnap.index') }}" class="btn btn-primary" title="Show All Qd Dv Ketnap">
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

            <form method="POST" action="{{ route('qd_dv_ketnaps.qd_dv_ketnap.store') }}" accept-charset="UTF-8" id="create_qd_dv_ketnap_form" name="create_qd_dv_ketnap_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('qd_dv_ketnaps.form', [
                                        'qdDvKetnap' => null,
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


