@extends('layouts.layout')

@section('style')

    @include('styles.admin')

@endsection

@include('admin.components.navbar')

@section('content')

    <div id="students">

        @foreach($admin->getStudents() as $student)

           @include('admin.components.student')

        @endforeach

    </div>

    <div id="activities" style="display: none;">

        @foreach($admin->getActivities() as $activityType)

            @foreach($activityType as $activity)

                @include('admin.components.activity')

            @endforeach

        @endforeach

    </div>

    <div id="assignSupervisors" style="display: none;">

        @include('admin.components.assignSupervisors')

    </div>

    <div id="addActivity" style="display: none;">

        @include('admin.components.addActivity')

    </div>

    <div id="reports" style="display: none;">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand navbar-link" href="#"> </a>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">

                        <li class><a href="javascript:void(0)" onclick="switchToStudentReports()">Student</a></li></li>

                        <li class><a href="javascript:void(0)" onclick="switchToActivityReports()">Activity</a></li></li>

                    </ul>
                </div>
            </div>
        </nav>


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
                                <select class="form-control" >

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
                    <form class="form-horizontal custom-form">
                        <h1>Activity Report</h1>
                        <div class="form-group">
                            <div class="col-sm-4 label-column">
                                <label class="control-label" for="name-input-field">Type </label>
                            </div>
                            <div class="col-sm-6 input-column">

                                <select class="form-control" id="activityReportType" onchange="updateActivityForm()">

                                    <option value="Ind" selected="">Individual</option>
                                    <option value="Comp">Comparison</option>
                                    <option value="Count">Student Count</option>

                                </select>

                            </div>
                        </div>

                        <div class="form-group" id="firstActivity">
                            <div class="col-sm-4 label-column">
                                <label class="control-label" for="email-input-field">Activity Name</label>
                            </div>
                            <div class="col-sm-6 input-column">
                                <select class="form-control">
                                    <option value="1" selected="">Rotaract</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" id="otherActivity" style="display: none;">
                            <div class="col-sm-4 label-column">
                                <label class="control-label" for="pawssword-input-field">Other Acivity Name</label>
                            </div>
                            <div class="col-sm-6 input-column">
                                <select class="form-control">
                                    <option value="2" selected="">AISEC</option>
                                </select>
                            </div>
                        </div>

                        <button class="btn btn-default submit-button" type="button">Generate </button>
                    </form>
                </div>
            </div>

        </div>

    </div>



    <script>
        function switchTab1() {
            document.getElementById("students").style.display = "block";
            document.getElementById("activities").style.display = "none";
            document.getElementById("assignSupervisors").style.display = "none";
            document.getElementById("addActivity").style.display = "none";
            document.getElementById("reports").style.display = "none";
        }

        function switchTab2() {
            document.getElementById("students").style.display = "none";
            document.getElementById("activities").style.display = "block";
            document.getElementById("assignSupervisors").style.display = "none";
            document.getElementById("addActivity").style.display = "none";
            document.getElementById("reports").style.display = "none";
        }

        function switchTab3() {
            document.getElementById("students").style.display = "none";
            document.getElementById("activities").style.display = "none";
            document.getElementById("assignSupervisors").style.display = "block";
            document.getElementById("addActivity").style.display = "none";
            document.getElementById("reports").style.display = "none";
        }

        function switchTab4() {
            document.getElementById("students").style.display = "none";
            document.getElementById("activities").style.display = "none";
            document.getElementById("assignSupervisors").style.display = "none";
            document.getElementById("addActivity").style.display = "block";
            document.getElementById("reports").style.display = "none";
        }

        function switchTab5() {
            document.getElementById("students").style.display = "none";
            document.getElementById("activities").style.display = "none";
            document.getElementById("assignSupervisors").style.display = "none";
            document.getElementById("addActivity").style.display = "none";
            document.getElementById("reports").style.display = "block";
        }
        
        function updateForm () {
            if(document.getElementById("type").value == "Club"){

                document.getElementById("activity").innerHTML="Club Name"
                document.getElementById("division").innerHTML="Division"

            }else if(document.getElementById("type").value == "Sport"){

                document.getElementById("activity").innerHTML="Sport Name"
                document.getElementById("division").innerHTML="Team"

            }else {

                document.getElementById("activity").innerHTML = "Competition Name"
                document.getElementById("division").innerHTML = "Hosted by"
            }
        }

        function switchToStudentReports() {
            document.getElementById("studentReports").style.display = "block";
            document.getElementById("activityReports").style.display = "none";
        }

        function switchToActivityReports() {
            document.getElementById("studentReports").style.display = "none";
            document.getElementById("activityReports").style.display = "block";
        }

        function switchStudentIndividual() {
            document.getElementById("studentIndividual").style.display = "block";
            document.getElementById("studentComparison").style.display = "none";
        }

        function switchStudentComparison() {
            document.getElementById("studentIndividual").style.display = "none";
            document.getElementById("studentComparison").style.display = "block";
        }

        function updateStudentForm() {

            if(document.getElementById("studentReportType").value == "Ind") {

                document.getElementById("otherStudent").style.display="none";

            }else{

                document.getElementById("otherStudent").style.display="block";

            }

        }

        function updateActivityForm() {

            if(document.getElementById("activityReportType").value == "Ind") {

                document.getElementById("otherActivity").style.display="none";
                document.getElementById("firstActivity").style.display="block";

            }else if(document.getElementById("activityReportType").value == "Comp") {

                document.getElementById("otherActivity").style.display="block";

            }else{

                document.getElementById("firstActivity").style.display="none";
                document.getElementById("otherActivity").style.display="none";
            }

        }


    </script>



@endsection