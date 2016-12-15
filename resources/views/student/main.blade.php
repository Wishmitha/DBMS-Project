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
                <li class><a>{{$student->getName()}}</a></li>
                <li class><a>{{'\''.$student->getBatchID().' Batch'}}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class><a href="javascript:void(0)" onclick="switchTab1()">Show Activities</a></li></li>
                <li class><a href="javascript:void(0)" onclick="switchTab2()">Add Activities</a></li></li>
                <li class><a href='/student_login'>Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>

@extends('layouts.layout')

@section('content')

    <div id="showActivities">
        @foreach($student->getActivities() as $activity)

            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">

                                        @if($activity->getVerification()==1)

                                            <img class="img-circle" src="http://www.ultimatetech.org/file/2016/01/Verify-Facebook-Page-or-Profile.png" width="40" height="40">

                                        @endif

                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-4 col-xs-offset-0">
                                    <h4 class="text-left"><strong>{{$activity->getRole()}}</strong> </h4></div>

                                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5">
                                    <h4 class="text-nowrap text-right"><strong>{{$activity->getActivity()}}</strong></h4></div>

                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 hidden-xs"><img class="img-circle" src={{$activity->getLogo()}} width="40" height="40"></div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                                    <h4 class="text-right">{{$activity->getDiv()}}</h4></div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-3"><span> </span></div>
                                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4">

                                    <h5 class="text-right"><strong>Since</strong> </h5></div>
                                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                                    <h5 class="text-right">{{$activity->getJoinedDate()}} </h5></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-3"><span> </span></div>
                                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                                    <h5 class="text-right"><strong>Effort</strong> </h5></div>
                                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                                    <h5 class="text-right">{{$activity->getActualEffort().'/'.$activity->getDefinedEffort()}} </h5></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>{{$activity->getStudentDescription()}}</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    @if(count($activity->getAchievements())>0)

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Achivements</strong> </h3></div>
                            <div class="panel-body">
                                <ul class="list-group">

                                    @foreach($activity->getAchievements() as $achievement)

                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                                    <h5 class="text-left"><strong>{{$achievement->getPosition()}} </strong></h5></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs"><span> </span></div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                                    <h5 class="text-right"><strong>{{$achievement->getDate()}} </strong></h5></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12"><span> </span></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>{{$achievement->getDescription()}}</p>
                                                </div>
                                            </div>
                                        </li>

                                    @endforeach

                                </ul>
                            </div>
                        </div>

                    @endif

                </div>
            </div>

        @endforeach

     </div>


    <div id = "addActivities" style="display: none;">

        <div class="row register-form">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                <form class="form-horizontal custom-form">
                    <h1>Insert Activity</h1>
                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                            <label class="control-label" for="name-input-field">Index Number</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">
                            <input class="form-control input-lg" type="text" >
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                            <label class="control-label" for="dropdown-input-field">Activity </label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">
                            <input class="form-control" type="text" list="activity"/>
                            <datalist class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="activity">

                                <?php
                                use App\Http\Controllers\StudentActivityInsertController;
                                $allActivities = StudentActivityInsertController::getActivityData();
                                foreach($allActivities as $activity){ ?>

                                <option value="<?php echo $activity->getActivity() ?>"> <?php echo $activity->getType() ?></option>
                                <?php

                                }

                                ?>


                            </datalist>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                            <label class="control-label" for="name-input-field">Role </label>
                        </div>
                        <div class="col-sm-8 col-xs-12 input-column">
                            <input class="form-control input-lg" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                            <label class="control-label" for="name-input-field">Effort </label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">
                            <input class="form-control input-lg" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                            <label class="control-label" for="name-input-field">Joined </label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">
                            <input class="form-control" type="date">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                            <label class="control-label" for="name-input-field">Description </label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">
                            <textarea class="form-control input-lg"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-default submit-button" type="button">Submit Form</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function switchTab1() {
            document.getElementById("addActivities").style.display = "none";
            document.getElementById("showActivities").style.display = "block";
        }

        function switchTab2() {
            document.getElementById("showActivities").style.display = "none";
            document.getElementById("addActivities").style.display = "block";
        }
    </script>

@endsection