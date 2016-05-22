<!-- START Left Column -->
<div id="left-column" class=""> <!-- NOTE TO READER: Accepts the following class(es) "menu-icon-only", "fixed" class -->
    <div id="mainnav">
        <ul class="mainnav"> <!-- NOTE TO READER: Accepts the following class(es) "animate" class -->
            <li id="home" class="menu-item-top">
                <a href="../home" class="top">
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
                    <li><a href="../orders/order_add">Add Order</a></li>
                    <li><a href="../orders/orders_paid_list">Paid List</a></li>
                    <li><a href="../orders/orders_unpaid_list">Unpaid List</a></li>
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
                    <li><a href="../products/products_add">Product Add</a></li>
                    <li><a href="../products/products_list">Product List</a></li>
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
                    <li></li>
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
                    <span class="main-text">Order List</span>
                </h1>
            </div>
            <div class="col-md-6">
                <!-- START Main Buttons -->
                <div class="page-heading-controls">
                    <a href="pages-invoice.html" role="button" class="btn btn-primary">
                        <span class="glyphicon glyphicon-print"></span>
                        Print Invoice
                    </a>
                    <a href="#" role="button" class="btn btn-danger">Delete</a>
                </div>
            </div>
            <!-- END Main Buttons -->

        </div>
        <div class="row">
            <div class="col-md-12">

                <!-- START Block: Orders -->
                <div class="block">
                    <div class="block-heading">
                        <div class="main-text h2">
                            Orders
                        </div>
                    </div>
                    <div class="block-content-outer">
                        <div class="block-content-inner">
                            <div class="table-responsive">
                                <form role="form">
                                    <table class="table table-condensed table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    <input type="checkbox" class="list-select-all">
                                                </th>
                                                <th class="text-right col-xs-1">Order ID</th>
                                                <th class="col-xs-2">Customer</th>
                                                <th class="col-xs-1">Status</th>
                                                <th class="text-right col-xs-2">Total</th>
                                                <th class="col-xs-2">Date Added</th>
                                                <th class="col-xs-2">Date Modified</th>
                                                <th class="text-right col-xs-2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <input type="text" class="form-control input-sm text-right" placeholder="ID" size="2" />
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm" placeholder="Customer Name" size="5" />
                                                </td>
                                                <td>
                                                    <select id="input-demo-v" class="form-control">
                                                        <option>-- Status --</option>
                                                        <option>Completed</option>
                                                        <option>Cancelled</option>
                                                        <option>Pending</option>
                                                        <option>Action Required</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control input-sm text-right" placeholder="Total" size="3" />
                                                </td>
                                                <td>
                                                    <div id="date-added-from" class="input-group">
                                                        <input type="text" class="form-control input-sm" placeholder="From Date" size="4" />
                                                        <span class="input-group-addon input-group-icon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                    <div id="date-added-to" class="input-group">
                                                        <input type="text" class="form-control input-sm" placeholder="To Date" size="4" />
                                                        <span class="input-group-addon input-group-icon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div id="date-modified-from" class="input-group">
                                                        <input type="text" class="form-control input-sm" placeholder="From Date" size="4" />
                                                        <span class="input-group-addon input-group-icon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                    <div id="date-modified-to" class="input-group">
                                                        <input type="text" class="form-control input-sm" placeholder="To Date" size="4" />
                                                        <span class="input-group-addon input-group-icon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <button type="button" class="btn btn-default">Filter</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-right">10999</td>
                                                <td>Samantha Carter</td>
                                                <td>
                                                    <span class="label label-success">Completed</span>
                                                </td>
                                                <td class="text-right">$105.00</td>
                                                <td>27/09/2014 08:13</td>
                                                <td>27/09/2014 08:45</td>
                                                <td class="text-right">
                                                    <a href="ecommerce-order-view.html" class="btn btn-primary btn-sm" role="button">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-right">10998</td>
                                                <td>Jonas Quinn</td>
                                                <td>
                                                    <span class="label label-danger">Cancelled</span>
                                                </td>
                                                <td class="text-right">$785.00</td>
                                                <td>26/09/2014 09:45</td>
                                                <td>26/09/2014 09:45</td>
                                                <td class="text-right">
                                                    <a href="ecommerce-order-view.html" class="btn btn-primary btn-sm" role="button">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-right">10997</td>
                                                <td>George Hammond</td>
                                                <td>
                                                    <span class="label label-warning">Pending</span>
                                                </td>
                                                <td class="text-right">$5,623.00</td>
                                                <td>26/09/2014 08:13</td>
                                                <td>26/09/2014 08:45</td>
                                                <td class="text-right">
                                                    <a href="ecommerce-order-view.html" class="btn btn-primary btn-sm" role="button">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-right">10996</td>
                                                <td>Teal'c Jafar</td>
                                                <td>
                                                    <span class="label label-info">Action Required</span>
                                                </td>
                                                <td class="text-right">$928.77</td>
                                                <td>22/09/2014 08:13</td>
                                                <td>22/09/2014 08:45</td>
                                                <td class="text-right">
                                                    <a href="ecommerce-order-view.html" class="btn btn-primary btn-sm" role="button">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-right">10995</td>
                                                <td>Daniel Jackson</td>
                                                <td>
                                                    <span class="label label-primary">Processing</span>
                                                </td>
                                                <td class="text-right">$1200.28</td>
                                                <td>20/09/2014 08:13</td>
                                                <td>20/09/2014 08:45</td>
                                                <td class="text-right">
                                                    <a href="ecommerce-order-view.html" class="btn btn-primary btn-sm" role="button">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-right">10994</td>
                                                <td>Samantha Carter</td>
                                                <td>
                                                    <span class="label label-success">Completed</span>
                                                </td>
                                                <td class="text-right">$105.00</td>
                                                <td>27/09/2014 08:13</td>
                                                <td>27/09/2014 08:45</td>
                                                <td class="text-right">
                                                    <a href="ecommerce-order-view.html" class="btn btn-primary btn-sm" role="button">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-right">10993</td>
                                                <td>Jonas Quinn</td>
                                                <td>
                                                    <span class="label label-danger">Cancelled</span>
                                                </td>
                                                <td class="text-right">$785.00</td>
                                                <td>26/09/2014 09:45</td>
                                                <td>26/09/2014 09:45</td>
                                                <td class="text-right">
                                                    <a href="ecommerce-order-view.html" class="btn btn-primary btn-sm" role="button">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-right">10992</td>
                                                <td>George Hammond</td>
                                                <td>
                                                    <span class="label label-warning">Pending</span>
                                                </td>
                                                <td class="text-right">$5,623.00</td>
                                                <td>26/09/2014 08:13</td>
                                                <td>26/09/2014 08:45</td>
                                                <td class="text-right">
                                                    <a href="ecommerce-order-view.html" class="btn btn-primary btn-sm" role="button">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-right">10991</td>
                                                <td>Teal'c Jafar</td>
                                                <td>
                                                    <span class="label label-info">Action Required</span>
                                                </td>
                                                <td class="text-right">$928.77</td>
                                                <td>22/09/2014 08:13</td>
                                                <td>22/09/2014 08:45</td>
                                                <td class="text-right">
                                                    <a href="ecommerce-order-view.html" class="btn btn-primary btn-sm" role="button">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-right">10990</td>
                                                <td>Daniel Jackson</td>
                                                <td>
                                                    <span class="label label-primary">Processing</span>
                                                </td>
                                                <td class="text-right">$1200.28</td>
                                                <td>20/09/2014 08:13</td>
                                                <td>20/09/2014 08:45</td>
                                                <td class="text-right">
                                                    <a href="ecommerce-order-view.html" class="btn btn-primary btn-sm" role="button">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-right">10989</td>
                                                <td>Samantha Carter</td>
                                                <td>
                                                    <span class="label label-success">Completed</span>
                                                </td>
                                                <td class="text-right">$105.00</td>
                                                <td>27/09/2014 08:13</td>
                                                <td>27/09/2014 08:45</td>
                                                <td class="text-right">
                                                    <a href="ecommerce-order-view.html" class="btn btn-primary btn-sm" role="button">View</a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <div class="help-text">Showing 1 - 20 of 98</div>
                                    <ul class="pagination">
                                        <li class="disabled"><a href="#">&laquo;</a></li>
                                        <li class="active"><a href="#"><span>1 <span class="sr-only">(current)</span></span></a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Block: Orders -->
            </div>
        </div>