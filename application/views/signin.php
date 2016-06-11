<div id="body-container">
    <div class="standalone-page  registration-page">
        <div class="standalone-page-logo">
            <a href="index">
                <h2 style="color:#fff;">MobilePay</h2>
            </a>
        </div>
        <div class="standalone-page-content" data-border-top="multi">
            <div class="standalone-page-block">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="heading">
                            <span class="main-text">Please enter your login details.</span>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-12 center-block">
                            <h4 class="error-message"><?php echo $error; ?></h4>
                            <h4 class="error-message"><?php echo validation_errors(); ?></h4>
                        </div>
                        <?php echo form_open('signin'); ?>
                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-3 control-label">Mobile Number</label>
                            <div class="col-sm-9">
                                <input autocomplete="off" class="form-control" id="mobileNumber" placeholder="Mobile" type="number" name="mobilenumber" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input autocomplete="off" class="form-control" id="inputPassword" placeholder="Password" type="password" name="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" name="submit" id="signin-btn" class="btn btn-success">Sign In</button>
<!--                                <a href="" class="btn btn-link btn-sm pull-right">I forgot my password</a>-->
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="change-section">
                            <h3 class="heading">Not Registered?</h3>
                            <a href="signup" class="btn btn-default btn-block">Create New Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
