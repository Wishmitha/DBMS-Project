@extends('layouts.layout')

@include('student.components.navbar')

@section('style')

    @include('styles.admin')

@endsection

@section('content')

    <div id="showActivities">

        @foreach($student->getActivities() as $activity)

            @include('student.components.activity')

        @endforeach

     </div>


    <div id = "addActivities" style="display: none;">

        @include('student.components.InsertActivity')

    </div>

    <div id = "addAchievements" style="display: none;">

        @include('student.components.achievement')

    </div>

    <script>
        function switchTab1() {
            document.getElementById("showActivities").style.display = "block";
            document.getElementById("addActivities").style.display = "none";
            document.getElementById("addAchievements").style.display = "none";
        }

        function switchTab2() {
            document.getElementById("showActivities").style.display = "none";
            document.getElementById("addActivities").style.display = "block";
            document.getElementById("addAchievements").style.display = "none";
        }

        function switchTab3() {
            document.getElementById("showActivities").style.display = "none";
            document.getElementById("addActivities").style.display = "none";
            document.getElementById("addAchievements").style.display = "block";
        }
    </script>

@endsection