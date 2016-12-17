<div class="row">
    <div class="col-lg-10 col-lg-push-1 col-md-10 col-md-push-1 col-sm-10 col-sm-push-1 col-xs-10 col-xs-push-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"><img class="img-circle" src={{$activity->getLogo()}} width="40" height="40"></div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-10">
                        <h4 class="text-right"><strong>{{$activity->getActivity()}}</strong></h4></div>
                    <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-xs-10">
                        <h4 class="text-right">{{$activity->getDiv()}}</h4></div>
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
                        <h4 class="panel-title"><strong>Recent </strong></h4></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <ul class="list-group">

                                    @foreach($activity->getStudents() as $student)

                                        <li class="list-group-item">
                                            <div class="row">


                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                    @if($student->getActivities()[0]->getVerification()==1)
                                                        <img class="img-circle" src="http://www.ultimatetech.org/file/2016/01/Verify-Facebook-Page-or-Profile.png" width="30" height="30">
                                                    @endif
                                                </div>


                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-10">
                                                    <h5><strong>{{$student->getName()}}</strong></h5></div>

                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5">
                                                    <h5><strong>{{'\''.$student->getBatchID().' Batch'}}</strong></h5></div>

                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-7">
                                                    <h5><strong>{{$student->getActivities()[0]->getRole()}} </strong></h5></div>

                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-3">
                                                    <h5><strong>{{$student->getActivities()[0]->getActualEffort().'/'.$student->getActivities()[0]->getDefinedEffort()}}</strong></h5></div>

                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                                    <h5><strong>{{$student->getActivities()[0]->getJoinedDate()}}</strong></h5></div>


                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">

                                                    @if($student->getActivities()[0]->getVerification()!=1)
                                                        <button class="btn btn-default" type="button">Verify </button>
                                                    @endif

                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><span></span></div>
                                            </div>
                                            <ul class="list-group">

                                                @foreach($student->getActivities()[0]->getAchievements() as $achievement)

                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <h5>{{$achievement->getPosition()}}</h5></div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <h5 class="text-right">{{$achievement->getDate()}} </h5></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <p>{{$achievement->getDescription()}}</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                @endforeach

                                            </ul>
                                        </li>

                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>