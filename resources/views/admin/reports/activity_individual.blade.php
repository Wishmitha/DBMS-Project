@extends('layouts.layout')

@section('content')

    <div class="row">
        <div class="col-lg-10 col-lg-push-1 col-md-10 col-md-push-1 col-sm-10 col-sm-push-1 col-xs-10 col-xs-push-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"><img class="img-circle" src={{$activity->getLogo()}} width="40" height="40"></div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-10">
                            <h4 class="text-right"><strong>{{$activity->getActivity()}}</strong></h4></div>
                        <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-xs-10">
                            <h4 class="text-right">{{$activity->getDivision()}}</h4></div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>{{$activity->getDescription()}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><strong>Supervisors </strong></h4></div>

                        @if(count($activity->getSupervisors())>0)

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <ul class="list-group">

                                            @foreach($activity->getSupervisors() as $supervisor)

                                                <li class="list-group-item">
                                                    <div class="row">

                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-10">
                                                            <h5>{{$supervisor->getName()}}</h5></div>


                                                     </div>

                                                </li>

                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        @else

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <h3 align="center"> No Supervisors Available </h3>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        @endif

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><strong>Students </strong></h4></div>

                        @if(count($activity->getStudents())>0)

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <ul class="list-group">

                                            @foreach($activity->getStudents() as $student)

                                                <li class="list-group-item">
                                                    <div class="row">

                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-10">
                                                            <h5>{{$student->getName()}}</h5></div>

                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-10">
                                                            <h5 align="center">{{$student->getID()}}</h5></div>

                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-10">
                                                            <h5 align="center">{{'\''.$student->getBatchID().' Batch'}}</h5></div>


                                                    </div>

                                                </li>

                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        @else

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <h3 align="center"> No Students Available </h3>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        @endif

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection