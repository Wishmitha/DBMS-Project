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

                        <form  method="post" action="{{ route('delete_supervisor_activity') }}">

                            <input name="supervisorID" type="hidden" value={{$supervisor->getID()}} >

                            <input name="adminID" type="hidden" value={{$admin->getID()}} >

                            <input name="activityID" type="hidden" value={{$activity->getID()}} >

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                                        <h4>{{$supervisor->getName()}}</h4></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

                                        {{ csrf_field() }}

                                        <button class="btn btn-default" type="submit">Delete </button>
                                    </div>
                                </div>
                            </li>

                        </form>

                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</div>