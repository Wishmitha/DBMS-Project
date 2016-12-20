<div class="row register-form">
    <div class="col-md-8 col-md-offset-2">
        <form class="form-horizontal custom-form" method="post" action="{{ route('student_register') }}">
            <h1>Student Registration Form</h1>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="ID-input-field">Student ID</label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text" name="stu_id" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="batch-input-field">Batch ID</label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text" name="batch_id" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="fname-input-field">First Name</label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text" name="f_name" required onkeypress='return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >=97 && event.charCode <= 122)'>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="lname-input-field">Last Name</label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text" name="l_name" required onkeypress='return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >=97 && event.charCode <= 122)'>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="pawssword-input-field">Password </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="password" name="password" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="repeat-pawssword-input-field">Repeat Password </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="password" name="re_password" required>
                </div>
            </div>
            {{ csrf_field() }}
            <button class="btn btn-default submit-button" type="submit">Register</button>
        </form>
    </div>
</div>
