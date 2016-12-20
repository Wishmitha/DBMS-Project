@extends('layouts.layout')

@section('style')

    @include('styles.admin')

@endsection

@include('supervisor.components.navbar')

@section('content')

    <div id="showActivities">
        @foreach($supervisor->getActivities() as $activity)

            @include('supervisor.components.activity')

        @endforeach
    </div>

    <div id="editActivities" style="display: none;">
        @include('supervisor.components.editActivity')
    </div>

    <script>
        function switchTab1() {
            document.getElementById("showActivities").style.display = "block";
            document.getElementById("editActivities").style.display = "none";
        }

        function switchTab2() {
            document.getElementById("showActivities").style.display = "none";
            document.getElementById("editActivities").style.display = "block";
        }

    </script>

@endsection