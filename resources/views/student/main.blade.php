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
                <li class><a href='#'>Add Activity</a></li>
                <li class><a href='/student_login'>Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>

@extends('layouts.layout')

@section('content')

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
                                <p>{{$activity->getDescription()}}</p>
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

@endsection