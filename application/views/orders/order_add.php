<!-- START Left Column -->
<div id="left-column" class=""> <!-- NOTE TO READER: Accepts the following class(es) "menu-icon-only", "fixed" class -->
    <div id="mainnav">
        <ul class="mainnav"> <!-- NOTE TO READER: Accepts the following class(es) "animate" class -->
            <li id="home" class="menu-item-top">
                <a href="<?php echo base_url(); ?>home" class="top">
                    <span class="main-menu-icon">
                        <span aria-hidden="true" class="icon icon-grid-big"></span>
                    </span>
                    <span class="main-menu-text">Dashboard</span>
                </a>
            </li>
            <li class="menu-item-top selected">
                <a href="#" class="top">
                    <span class="main-menu-icon">
                        <span aria-hidden="true" class="icon icon-star"></span>
                    </span>
                    <span class="main-menu-text">Order Management</span>
                </a>
                <ul>
                    <li><a href="<?php echo base_url(); ?>orders/order_add">Add Order</a></li>
                    <li><a href="<?php echo base_url(); ?>orders/orders_paid_list">Paid List</a></li>
                    <li><a href="<?php echo base_url(); ?>orders/orders_unpaid_list">Unpaid List</a></li>
                </ul>
            </li>
            <li class="menu-item-top">
                <a href="#" class="top">
                    <span class="main-menu-icon">
                        <span aria-hidden="true" class="icon icon-dollar"></span>
                    </span>
                    <span class="main-menu-text">Product Management</span>
                </a>
                <ul>
                    <li><a href="<?php echo base_url(); ?>products/products_add">Product Add</a></li>
                    <li><a href="<?php echo base_url(); ?>products/products_list">Product List</a></li>
                </ul>
            </li>
            <li class="menu-item-top">
                <a href="#" class="top">
                    <span class="main-menu-icon">
                        <span aria-hidden="true" class="icon icon-star"></span>
                    </span>
                    <span class="main-menu-text">History</span>
                </a>
                <ul>
                    <li><a href="<?php echo base_url(); ?>history/history_paid_list">Paid List</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div>
<!-- END Left Column -->

<div id="right-column">
    <div class="right-column-content">
        <div class="row">
            <div class="col-md-6">
                <h1>
                    <span aria-hidden="true" class="icon icon-dollar"></span>
                    <span class="main-text">Add Order</span>
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- START Block: Orders -->
                <div class="block">
                    <div class="block-heading">
                        <div class="main-text h2">Add Order</div>
                    </div>
                    <div class="block-content-outer">
                        <div class="block-content-inner">
                            <div class="table-responsive">
                                <?php echo form_open('orders/create'); ?>
                                <div class="tab-pane" id="product-edit-tabs-data">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="product-model" class="col-md-4 control-label">
                                                Customer Name
                                            </label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="customername" name="customername" placeholder="Customer Name" value=''>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="product-sku" class="col-md-4 control-label">
                                                Mobile Number
                                            </label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Mobile Number" value=''>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label for="product-sku" class="col-md-4 control-label">
                                                Home Delivery
                                            </label>
                                            <div class="col-md-8">
                                                <select id="homedelivery" name="homedelivery" class="form-control">
                                                    <option value="true">Yes</option>
                                                    <option value="false">No</option>
                                                </select>													
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="product-sku" class="col-md-4 control-label">
                                                Editable
                                            </label>
                                            <div class="col-md-8">
                                                <select id="editable" name="editable" class="form-control">
                                                    <option value="true">Yes</option>
                                                    <option value="false">No</option>
                                                </select>													
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <table class="table table-condensed table-striped table-bordered table-hover" id="tab_logic">
                                                <tr>
                                                    <th><input class='check_all' type='checkbox' onclick="select_all()"/></th>
                                                    <th>S. No</th>
                                                    <th>Product Name</th>
                                                    <th>Product ID</th>
                                                    <th>Unit Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total Price</th>
                                                </tr>
                                                <tr>
                                                    <td><input type='checkbox' class='case'/></td>
                                                    <td><span id='snum'>1.</span></td>
                                                    <td><input type='text' data-type="productname" class="form-control autocomplete_txt" id='productname_1' name='productname[]'/></td>
                                                    <td><input type='text' data-type="product_id" class="form-control autocomplete_txt" id='product_id_1' name='product_id[]' readonly/></td>
                                                    <td><input type='text' data-type="product_rate" class="form-control autocomplete_txt" id='product_rate_1' name='product_rate[]' readonly/></td>
                                                    <td><input type='number' data-type="product_qty" class="form-control changesNo" id='product_qty_1' name='product_qty[]' /> </td>
                                                    <td><input type='text' data-type="total_price" class="form-control totalLinePrice" id='total_price_1' name='total_price[]' readonly/> </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                            <button class="btn btn-danger delete" type="button">- Delete</button>
                                            <button class="btn btn-success addmore" type="button">+ Add More</button>
                                        </div>
                                        <div class="col-xs-12 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 col-sm-5 col-md-5 col-lg-5">
                                            <div class="form-group">
                                                <label>Subtotal: &nbsp;</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">$</div>
                                                    <input type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Tax Amount: &nbsp;</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="tax" name="tax" value="15" placeholder="Tax" onkeyup="calculateTotal()" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" readonly>
                                                    <div class="input-group-addon">%</div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Discount Type: &nbsp;</label>
                                                <select name="discounttype" id="discounttype" class="form-control" onchange="resetDiscountValue()">
                                                    <option value="NONE">None</option>
                                                    <option value="PERCENTAGE">Percentage</option>
                                                    <option value="AMOUNT">Amount</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Discount Amount: &nbsp;</label>
                                                <div class="input-group">
                                                    <input type="number" class="form-control" id="discountAmount" name="discountAmount" min="0" placeholder="Dicount Amount" onkeyup="calculateTotal()" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
                                                    <div class="input-group-addon">%</div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Minimum Amount: &nbsp;</label>
                                                <div class="input-group">
                                                    <input type="number" class="form-control" id="discountMinAmount" name="discountMinAmount" min="0" placeholder="Minimum Amount" onkeyup="calculateTotal()" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
                                                    <div class="input-group-addon">%</div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Total: &nbsp;</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">$</div>
                                                    <input type="number" class="form-control" name="total" id="totalAftertax" placeholder="Total" onkeypress="return IsNumeric(event);" onkeyup="applyDiscount()" ondrop="return false;" onpaste="return false;" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="page-heading-controls">
                                        <input type="submit" class="btn btn-primary"/>
                                    </div>

                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Block: Orders -->
            </div>
        </div>