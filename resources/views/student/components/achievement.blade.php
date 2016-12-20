<div class="row register-form">
    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
        <form class="form-horizontal custom-form" method="post" action="{{ route('insert_achievement') }}">
            {{ csrf_field() }}
            <h1>Insert Achivements</h1>
            <div class="form-group">

                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">
                    <input type="hidden" name="index" value={{$student->getID()}}>
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
                        $allActivities = StudentViewController::getStudentActivity($student->getID());
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
                    <label class="control-label" for="name-input-field">Date </label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">
                    <input class="form-control" type="date" name="date" min="2011-01-01" max={{date("Y-m-d")}} required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 label-column">
                    <label class="control-label" for="name-input-field">Achievement </label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-column">
                    <input class="form-control input" type="text" name="position" placeholder="Ex: Winner, Runners Up" required onkeypress='return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >=97 && event.charCode <= 122) || event.charCode ==32'>
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



            <button class="btn btn-default submit-button" type="SUBMIT">Submit Form</button>
        </form>
    </div>
</div>