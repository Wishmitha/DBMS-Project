@include('supervisor.components.navbar')

@extends('layouts.layout')

@section('content')

    <div id="showActivities">
        @foreach($supervisor->getActivities() as $activity)

            @include('supervisor.components.activity')

        @endforeach
    </div>

    <div id="editActivities" style="display: none;">
        EditActivities
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