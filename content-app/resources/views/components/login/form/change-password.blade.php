<form action="{{ route('change.password') }}" method="POST">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"><strong>Reset Password</strong></h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <strong>-</strong>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Current Password -->
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Current Password:</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password" placeholder="input your current password">
                        </div>
                    </div>

                    <!-- New Password -->
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">New Password:</label>

                        <div class="col-md-6">
                            <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password" placeholder="input your new password">
                        </div>
                    </div>

                    <!-- New Confirm Password -->
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password:</label>

                        <div class="col-md-6">
                            <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password" placeholder="Confirm Password">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-bottom: 40px;">
            <button type="submit" class="btn btn-success">Reset Password</button>
        </div>
    </div>
</form>
