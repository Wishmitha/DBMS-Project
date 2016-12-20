<div class="row register-form" >

    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">

        <form class="form-horizontal custom-form" method="post" action="{{ route('update_activity') }}">
            {{ csrf_field() }}

            <h1>Update Activity</h1>

            <div class="form-group">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                    <label class="control-label" for="dropdown-input-field">Activity </label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">

                    <select class="form-control" id="activity"name="activityList">
                        <?php
                        use App\Http\Controllers\SupervisorViewController;
                        $allActivities = SupervisorViewController::getSupActivities($supervisor->getID());
                        foreach($allActivities as $activity){ ?>

                        <option value="{{$activity->getID()}}"> {{$activity->getActivity()}} </option>
                        <?php

                        }

                            ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                    <label class="control-label" for="name-input-field">Defined Effort </label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">
                    <input class="form-control input" type="number" name="effort" placeholder="Enter changed defined effort"  min="1" max="168">
                </div>
            </div>

            <input class="btn btn-default submit-button" type="submit" value="Update">

        </form>
    </div>
</div>
