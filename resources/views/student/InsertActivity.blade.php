@extends('layouts.layout')

@section('content')
    <div class="row register-form">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
            <form class="form-horizontal custom-form">
                <h1>Insert Activity</h1>
                <div class="form-group">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                        <label class="control-label" for="name-input-field">Index Number</label>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">
                        <input class="form-control input-lg" type="text" >
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                        <label class="control-label" for="dropdown-input-field">Activity </label>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">
                        <input class="form-control" type="text" list="activity"/>
                        <datalist class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="activity">

                            <?php
                            use App\Http\Controllers\StudentActivityInsertController;
                            $allActivities = StudentActivityInsertController::getActivityData();
                            foreach($allActivities as $activity){ ?>

                                <option value="<?php echo $activity->getActivity() ?>"> <?php echo $activity->getType() ?></option>
                            <?php

                                }

                            ?>


                        </datalist>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                        <label class="control-label" for="name-input-field">Role </label>
                    </div>
                    <div class="col-sm-8 col-xs-12 input-column">
                        <input class="form-control input-lg" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                        <label class="control-label" for="name-input-field">Effort </label>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">
                        <input class="form-control input-lg" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                        <label class="control-label" for="name-input-field">Joined </label>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">
                        <input class="form-control" type="date">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                        <label class="control-label" for="name-input-field">Description </label>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">
                        <textarea class="form-control input-lg"></textarea>
                    </div>
                </div>
                <button class="btn btn-default submit-button" type="button">Submit Form</button>
            </form>
        </div>
    </div>

@endsection