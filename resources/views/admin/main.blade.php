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

       @include('admin.components.reports')

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