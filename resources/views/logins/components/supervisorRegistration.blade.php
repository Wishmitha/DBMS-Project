<div class="row register-form">
    <div class="col-md-8 col-md-offset-2">
        <form class="form-horizontal custom-form" method="post" action="{{ route('supervisor_register') }}">
            <h1>Supervisor Registration Form</h1>

            <!--<div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="field-input-field">Field</label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text" name="field">
                </div>
            </div>-->

            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="field-input-field">Field</label>
                </div>
                <div class="col-sm-6 input-column">
                    <select class="form-control" name="field">
                        <option value="Club" selected="">Club</option>
                        <option value="Sport" selected="">Sport</option>
                        <option value="Competition" selected="">Competition</option>
                    </select>
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
                    <label class="control-label" for="field-input-field">Username</label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text" name="username" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="password-input-field">Password </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="password" name="password" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="repeat-password-input-field">Repeat Password </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="password" name="repassword" required>
                </div>
            </div>
            {{ csrf_field() }}
            <button class="btn btn-default submit-button" type="submit">Register</button>
        </form>
    </div>
</div>

