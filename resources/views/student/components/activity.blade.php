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

                <div class="row">

                    <form method="post" action="{{ route('delete_student_activity') }}">

                        <input type="hidden" name="studentID" value={{$student->getID()}}>
                        <input type="hidden" name="activityID" value={{$activity->getID()}}>

                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11"></div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                            {{ csrf_field() }}
                            <button class="btn btn-default" type="submit">Delete </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>



    </div>
</div>