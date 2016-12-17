@include('admin.components.navbar')


@extends('layouts.layout')

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
        assignSupervisors
    </div>

    <div id="addActivity" style="display: none;">
        addActivity
    </div>

    <div id="reports" style="display: none;">
        reports
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
    </script>



@endsection