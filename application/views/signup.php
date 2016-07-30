<div id="body-container">
    <div class="standalone-page registration-page">
        <div class="standalone-page-logo">
            <a href="index.html">
                <h2 style="color:#fff;">MobilePay</h2>
            </a>
        </div>
        <div class="standalone-page-content" data-border-top="multi">
            <div class="standalone-page-block">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="heading">
                            <span class="main-text">Create a new account.</span>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-12 center-block">
                            <h4 class="error-message"><?php echo $signup_error; ?></h4>
                            <h4 class="error-message"><?php echo validation_errors(); ?></h4>
                        </div>

                        <?php echo form_open_multipart('signup'); ?>
                        <div class="form-group">
                            <label for="inputUsername" class="col-sm-3 control-label">Shop Name <span>*</span></label>
                            <div class="col-sm-9">
                                <input autocomplete="off" class="form-control" id="inputShopname" placeholder="Shop Name" type="text" name="merchantName" required>
                                <span class="help-block text-muted"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUsername" class="col-sm-3 control-label">Shop Address <span>*</span></label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="inputShopAddress" name="merchantAddress" required></textarea>
                                <span class="help-block text-muted"> </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUsername" class="col-sm-3 control-label">Shop Area <span>*</span></label>
                            <div class="col-sm-9">
                                <input autocomplete="off" class="form-control" id="inputShopArea" placeholder="Shop Area" type="text" name="area" required>
                                <span class="help-block text-muted"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUsername" class="col-sm-3 control-label">Postal Code <span>*</span></label>
                            <div class="col-sm-9">
                                <input autocomplete="off" class="form-control" id="inputPostalCode" placeholder="Postal Code" type="text" name="pinCode" required>
                                <span class="help-block text-muted"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUsername" class="col-sm-3 control-label">Mobile Number<span>*</span></label>
                            <div class="col-sm-9">
                                <input autocomplete="off" class="form-control" id="inputmobileNumber" placeholder="Mobile Number" type="number" name="mobileNumber" required>
                                <span class="help-block text-muted"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUsername" class="col-sm-3 control-label">Landline Number <span>*</span></label>
                            <div class="col-sm-9">
                                <input autocomplete="off" class="form-control" id="inputLandlineNumber" placeholder="Landline Number" type="number" name="landLineNumber" required>
                                <span class="help-block text-muted"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-3 control-label">Password  <span>*</span></label>
                            <div class="col-sm-9">
                                <input autocomplete="off" class="form-control" id="inputPassword" placeholder="Password" type="password" name="password" required>
                                <span class="help-block text-muted"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-3 control-label">Shop Type <span>*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category">
                                    <option value="0">Select One</option>
                                    <option value="Dinning">Dinning</option>
                                    <option value="Shopping">Shopping</option>
                                </select>
                                <span class="help-block text-muted"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-3 control-label">Delivery Option<span>*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="deliveryOption" id="deliveryOption" onchange="deliveryOptionVal();" required>
                                    <option value="0">Select One</option>
                                    <option value="NONE">NONE</option>
                                    <option value="HOME">HOME</option>
                                    <option value="COUNTER_COLLECTION">COUNTER_COLLECTION</option>
                                    <option value="BOTH">BOTH</option>
                                </select>
                                <span class="help-block text-muted"></span>
                            </div>
                        </div>


                        <div class="form-group" id="deliveryCondition123">
                            <label for="inputPassword" class="col-sm-3 control-label">Delivery Condition<span>*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="deliveryCondition" id="deliveryCondition" onchange="deliveryConditionEvent();">
                                    <option value="0">Select One</option>
                                    <option value="FREE">FREE</option>
                                    <option value="FIXED">FIXED</option>
                                    <option value="CONDITIONAL">CONDITIONAL</option>
                                </select>
                                <span class="help-block text-muted"></span>
                            </div>
                        </div>

                        <div class="form-group" id="amount123">
                            <label for="inputUsername" class="col-sm-3 control-label">Amount <span>*</span></label>
                            <div class="col-sm-9">
                                <input autocomplete="off" class="form-control" id="inputAmount" value="0" placeholder="Amount" type="text" name="inputAmount">
                                <span class="help-block text-muted"></span>
                            </div>
                        </div>

                        <div class="form-group" id="maxDistance">
                            <label for="inputUsername" class="col-sm-3 control-label">Maximum Distance <span>*</span></label>
                            <div class="col-sm-9">
                                <input autocomplete="off" class="form-control" id="inputMaxDistance" value="0" placeholder="Maximum Distance" type="text" name="inputMaxDistance">
                                <span class="help-block text-muted"></span>
                            </div>
                        </div>

                        <div class="form-group" id="minAmount">
                            <label for="inputUsername" class="col-sm-3 control-label">Minimum Amount <span>*</span></label>
                            <div class="col-sm-9">
                                <input autocomplete="off" class="form-control" id="inputMinAmount" value="0" placeholder="Minimum Amount" type="text" name="inputMinAmount">
                                <span class="help-block text-muted"></span>
                            </div>
                        </div>


                        <!--                        <div class="form-group">
                                                    <label for="inputUsername" class="col-sm-3 control-label">Shop Logo</label>
                                                    <div class="col-sm-9">
                                                        <input autocomplete="off" class="form-control" id="inputLogo" placeholder="Logo" type="file" name="file">
                                                        <span class="help-block text-muted"></span>
                                                    </div>
                                                </div>-->

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">Create Account</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="change-section">
                            <h3 class="heading">Already Have An Account?</h3>
                            <a href="signin" class="btn btn-default btn-block">Sign In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>