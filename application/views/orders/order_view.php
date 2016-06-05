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
                    <span class="main-text">Order View</span>
                </h1>
            </div>
            <div class="col-md-6">
                <!-- START Main Buttons -->
                <div class="page-heading-controls">
                    <a href="pages-invoice.html" role="button" class="btn btn-primary">Print Invoice</a>
                    <a href="ecommerce-order-list.html" role="button" class="btn btn-danger">Cancel</a>
                </div>
                <!-- END Main Buttons -->

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <!-- START Block: Order View -->
                <div class="block">
                    <div class="block-heading">
                        <div class="main-text h2">
                            Order #10999 - Samantha Carter
                        </div>
                    </div>
                    <div class="block-content-outer">
                        <div class="block-content-inner">
                            <div id="order-view-content" class="table-responsive">
                                <ul id="order-view-tabs" class="nav nav-tabs tabs-left">
                                    <li class="active"><a href="#order-view-tabs-order-details" data-toggle="tab">Order Details</a></li>
                                    <li><a href="#order-view-tabs-payment" data-toggle="tab">Payment</a></li>
                                    <li><a href="#order-view-tabs-products" data-toggle="tab">Product List</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="order-view-tabs-order-details" class="tab-pane active">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <td class="col-md-3">Order ID:</td>
                                                    <td class="col-md-9">#10999</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Invoice #:</td>
                                                    <td class="col-md-9">INV-10999-01</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Customer Name:</td>
                                                    <td class="col-md-9">Samantha Carter</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Customer Group:</td>
                                                    <td class="col-md-9">Default</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Email:</td>
                                                    <td class="col-md-9">samantha.c@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Telephone:</td>
                                                    <td class="col-md-9">01-0987 6543</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">IP Address:</td>
                                                    <td class="col-md-9">127.0.0.1</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Total:</td>
                                                    <td class="col-md-9">$4,000.20</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Order Status:</td>
                                                    <td class="col-md-9">
                                                        <span class="label label-success">Completed</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Date Added:</td>
                                                    <td class="col-md-9">27/09/2014 08:13</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Date Modified:</td>
                                                    <td class="col-md-9">27/09/2014 08:45</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="order-view-tabs-payment">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <td class="col-md-3">First Name:</td>
                                                    <td class="col-md-9">Samantha</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Last Name:</td>
                                                    <td class="col-md-9">Carter</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Address:</td>
                                                    <td class="col-md-9">No 1, Sesame Street</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">City:</td>
                                                    <td class="col-md-9">New York City</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Postcode:</td>
                                                    <td class="col-md-9">109-80-A2</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Region / State:</td>
                                                    <td class="col-md-9">New York</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Country:</td>
                                                    <td class="col-md-9">United States</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Payment Method:</td>
                                                    <td class="col-md-9">Cash On Delivery</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="order-view-tabs-products">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>SKU</th>
                                                    <th class="text-right">Quantity</th>
                                                    <th class="text-right">Unit Price</th>
                                                    <th class="text-right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>iPod Classic</td>
                                                    <td>APLIPODC</td>
                                                    <td class="text-right">20</td>
                                                    <td class="text-right">$1,000.05</td>
                                                    <td class="text-right">$4,000.20</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="4">Sub-Total:</td>
                                                    <td class="text-right">$4,000.20</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="4">Shipping Rate:</td>
                                                    <td class="text-right">$100.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="4">Total:</td>
                                                    <td class="text-right">$4,100.20</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Block: Order View -->

            </div>
        </div>