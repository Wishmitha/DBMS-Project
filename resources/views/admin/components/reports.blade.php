<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="nav nav-tabs">
            <li class><a href="javascript:void(0)" onclick="switchToStudentReports()">Student</a></li></li>
            <li class><a href="javascript:void(0)" onclick="switchToActivityReports()">Activity</a></li></li>
        </ul>
    </div>
</div>

<div id="studentReports">

    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form" method="post" action="{{ route('student_report') }}">
                <h1>Student Report</h1>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Type </label>
                    </div>
                    <div class="col-sm-6 input-column">

                        <select class="form-control" id="studentReportType" onchange="updateStudentForm()" name="type">
                            <option value="Ind" selected="">Individual</option>
                            <option value="Comp">Comparison</option>
                        </select>

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="email-input-field">Student ID</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <select class="form-control" name="studentID">

                            @foreach($admin->getStudents() as $student)

                                <option value={{$student->getID()}} >{{$student->getID()}}</option>

                            @endforeach


                        </select>
                    </div>
                </div>

                <div class="form-group" id="otherStudent" style="display: none;">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="pawssword-input-field">Other Student ID</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <select class="form-control" name="otherStudentID">

                            @foreach($admin->getStudents() as $student)

                                <option value={{$student->getID()}}>{{$student->getID()}}</option>

                            @endforeach

                        </select>
                    </div>
                </div>

                {{ csrf_field() }}

                <button class="btn btn-default submit-button" type="submit">Generate </button>
            </form>
        </div>
    </div>

</div>


<div id="activityReports" style="display: none;">

    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form" method="post" action="{{ route('activity_report') }}">
                <input type="hidden" name="adminID" value={{$admin->getID()}}>
                <h1>Activity Report</h1>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Type </label>
                    </div>
                    <div class="col-sm-6 input-column">

                        <select class="form-control" id="activityReportType" onchange="updateActivityForm()" name="type">

                            <option value="Ind" selected="">Individual</option>
                            <option value="Count">Student Count</option>

                        </select>

                    </div>
                </div>

                <div class="form-group" id="firstActivity">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="email-input-field">Activity Name</label>
                    </div>
                    <div class="col-sm-6 input-column">

                        <select class="form-control" name="activityID" value="{{$activity->getID()}}">

                            @foreach($admin->getActivities() as $activityType)

                                @foreach($activityType as $activity)

                                    <option value={{$activity->getID()}} selected="">{{$activity->getActivity()}}</option>

                                @endforeach

                            @endforeach

                        </select>
                    </div>
                </div>

                {{ csrf_field() }}

                <button class="btn btn-default submit-button" type="submit">Generate </button>
            </form>
        </div>
    </div>

</div>