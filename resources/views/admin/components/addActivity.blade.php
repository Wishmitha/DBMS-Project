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
                        <option value="Competition">Competition</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="email-input-field" id="activity" >Sport Name</label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text" name="activity" required onkeypress='return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >=97 && event.charCode <= 122) || event.charCode ==32'>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="pawssword-input-field">Logo URL</label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="url" name="logo" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="email-input-field" id="division">Team</label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text" name="division" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="email-input-field">Required Effort <em>(Hours per Week)</em></label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="number" name="effort"  min="1" max="168" required>
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