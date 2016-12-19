@extends('layouts.layout')

@section('content')

    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

            @include('admin.reports.components.student')

        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

            @include('admin.reports.components.other_students');

        </div>

    </div>

@endsection