<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">EXACUTOR</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class><a>{{$admin->getName()}}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class><a href="javascript:void(0)" onclick="switchTab1()">Students</a></li></li>
                <li class><a href="javascript:void(0)" onclick="switchTab2()">Activities</a></li></li>
                <li class><a href='/supervisor_login'>Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>


@extends('layouts.layout')

@section('content')

    <div id="students">

        @foreach($admin->getStudents() as $student)


            <div  class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <h4>{{$student->getName()}}</h4></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <h4>{{'\''.$student->getBatchID().' '.'Batch'}}</h4></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <h4>{{$student->getID()}}</h4></div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <button class="btn btn-default" type="button">Delete </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


        @endforeach

    </div>

    <div id="activities" style="display: none;">

        @foreach($admin->getActivities() as $activityType)

            @foreach($activityType as $activity)

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

                                        @if(count($activity->getSupervisors())==0)

                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                                                        <h4>No Supervisors Assigned</h4>
                                                    </div>
                                                </div>
                                            </li>

                                        @endif

                                        @foreach($activity->getSupervisors() as $supervisor)

                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                                                        <h4>{{$supervisor->getName()}}</h4></div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                        <button class="btn btn-default" type="button">Delete </button>
                                                    </div>
                                                </div>
                                            </li>

                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

            @endforeach

        @endforeach

    </div>

        <script>
            function switchTab1() {
                document.getElementById("activities").style.display = "none";
                document.getElementById("students").style.display = "block";
            }

            function switchTab2() {
                document.getElementById("students").style.display = "none";
                document.getElementById("activities").style.display = "block";
            }
        </script>



@endsection