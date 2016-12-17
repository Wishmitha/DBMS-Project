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
        <div class="row register-form">
            <div class="col-md-8 col-md-offset-2">

                <form class="form-horizontal custom-form" method="post" action="{{ route('add_activity') }}">
                    <h1>Add Activity</h1>
                    <div class="form-group">

                        <input name="adminID" type="hidden" value={{$admin->getID()}} >

                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="name-input-field">Type </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <select class="form-control" id="type" onchange="updateForm()" name="type">
                                <option value="Sport" selected="">Sport</option>
                                <option value="Club">Club</option>
                                <option value="Comp">Competition</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="email-input-field" id="activity">Sport Name</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" name="activity">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="pawssword-input-field">Logo URL</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="url" name="logo">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="email-input-field" id="division">Team</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" name="division">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="email-input-field">Required Effort <em>(Hours per Week)</em></label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="number" name="effort">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="email-input-field">Description </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                    </div>

                    {{ csrf_field() }}

                    <button class="btn btn-default submit-button" type="submit">Add</button>
                </form>
            </div>
        </div>
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

    </script>



@endsection