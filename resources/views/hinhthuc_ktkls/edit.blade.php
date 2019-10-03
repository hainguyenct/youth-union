@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
  
        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">{{ !empty($title) ? $title : 'Hinhthuc Ktkl' }}</h4>
            </div>
            <div class="btn-group btn-group-sm pull-right" role="group">

                <a href="{{ route('hinhthuc_ktkls.hinhthuc_ktkl.index') }}" class="btn btn-primary" title="Show All Hinhthuc Ktkl">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('hinhthuc_ktkls.hinhthuc_ktkl.create') }}" class="btn btn-success" title="Create New Hinhthuc Ktkl">
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

            <form method="POST" action="{{ route('hinhthuc_ktkls.hinhthuc_ktkl.update', $hinhthucKtkl->ID) }}" id="edit_hinhthuc_ktkl_form" name="edit_hinhthuc_ktkl_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('hinhthuc_ktkls.form', [
                                        'hinhthucKtkl' => $hinhthucKtkl,
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