@extends('layouts.layout')

@section('content')

    <div class="row">
        <h3 align="center"> Activity Student Count Report </h3>
    </div>

    <div class="row">
        <h4 align="center">{{'Date : '.date("Y-m-d")}}</h4>
    </div>

    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> <h4 align="center">Activity</h4> </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> <h4 align="center">Student Count</h4> </div>

    </div>

    @foreach($admin->getActivities() as $activityClass)
        @foreach($activityClass as $activity)

            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><img class="img-circle" width="40" height="40" src={{$activity->getLogo()}}></div>
                                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                    <h4 class="text-left">{{$activity->getActivity()}}</h4></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                                            <h4>{{count($activity->getStudents())}}</h4></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

    @endforeach



@endsection