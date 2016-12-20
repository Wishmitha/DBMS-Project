<div class="row register-form" >

    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
        <form class="form-horizontal custom-form" method="post" action="{{ route('insert_activity') }}">
            {{ csrf_field() }}

            <h1>Insert Activity</h1>
            <div class="form-group">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">

                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">
                    <input  name="index" type="hidden" value={{$student->getID()}}>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                    <label class="control-label" for="dropdown-input-field">Activity </label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">

                    <select class="form-control" id="activity"name="activityList">
                        <?php
                        use App\Http\Controllers\StudentViewController;
                        $allActivities = StudentViewController::getActivityData();
                        foreach($allActivities as $activity){ ?>

                        <option value="{{$activity->getID()}}"> <?php echo $activity->getActivity() ?></option>
                        <?php

                        }

                        ?>


                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                    <label class="control-label" for="name-input-field">Role </label>
                </div>
                <div class="col-sm-8 col-xs-12 input-column">
                    <input class="form-control input" type="text" name="role">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                    <label class="control-label" for="name-input-field">Effort </label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">
                    <input class="form-control input" type="text" name="effort" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                    <label class="control-label" for="name-input-field">Joined </label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">
                    <input class="form-control" type="date" name="joined">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                    <label class="control-label" for="name-input-field">Description </label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">
                    <textarea class="form-control input" name="description"></textarea>
                </div>
            </div>

            <input class="btn btn-default submit-button" type="submit">Submit Form</input>
        </form>
    </div>
</div>
