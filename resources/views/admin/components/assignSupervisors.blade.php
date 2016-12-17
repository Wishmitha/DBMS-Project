<div class="row register-form">
    <div class="col-md-8 col-md-offset-2">

        <form class="form-horizontal custom-form" method="post" action="{{ route('assign_supervisor') }}">

            <h1 align="center">Supervisor Assignment</h1>

            <row><br></row>
            <row><br></row>
            <row><br></row>

            <div class="form-group">

                <div class="col-sm-4 label-column">
                    <label class="control-label">Supervisor </label>
                </div>

                <div class="col-sm-6 input-column">

                    <input name="adminID" type="hidden" value={{$admin->getID()}} >

                    <select class="form-control" name="supervisorID">

                        @foreach($admin->getSupervisors() as $supervisor)

                            <option value={{$supervisor->getID()}} selected="">{{$supervisor->getName()}}</option>

                        @endforeach


                    </select>

                </div>

            </div>

            <div class="form-group">

                <div class="col-sm-4 label-column">
                    <label class="control-label" >Activity </label>
                </div>

                <div class="col-sm-6 input-column">

                    <select class="form-control" name="activityID">

                        @foreach(call_user_func_array('array_merge', $admin->getActivities()) as $activity)

                            <option value={{$activity->getID()}} selected="">{{$activity->getActivity()}}</option>

                        @endforeach

                    </select>

                </div>
            </div>

            {{ csrf_field() }}

            <button class="btn btn-default submit-button" type="submit">Assign </button>

        </form>


    </div>
</div>