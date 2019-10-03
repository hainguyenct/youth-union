@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
  
        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">{{ !empty($title) ? $title : 'Doanphi Chi Cd' }}</h4>
            </div>
            <div class="btn-group btn-group-sm pull-right" role="group">

                <a href="{{ route('doanphi_chi_cds.doanphi_chi_cd.index') }}" class="btn btn-primary" title="Show All Doanphi Chi Cd">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('doanphi_chi_cds.doanphi_chi_cd.create') }}" class="btn btn-success" title="Create New Doanphi Chi Cd">
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

            <form method="POST" action="{{ route('doanphi_chi_cds.doanphi_chi_cd.update', $doanphiChiCd->ID) }}" id="edit_doanphi_chi_cd_form" name="edit_doanphi_chi_cd_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('doanphi_chi_cds.form', [
                                        'doanphiChiCd' => $doanphiChiCd,
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