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
            <li class="menu-item-top">
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
                </ul>
            </li>
            <li class="menu-item-top selected">
                <a href="#" class="top">
                    <span class="main-menu-icon">
                        <span aria-hidden="true" class="icon icon-star"></span>
                    </span>
                    <span class="main-menu-text">History</span>
                </a>
                <ul>
                    <li><a href="../history/history_paid_list">Paid List</a></li>
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
                    <span class="main-text">History Paid List</span>
                </h1>
            </div>
            <div class="col-md-6">
                <!-- START Main Buttons -->
                <div class="page-heading-controls">
                    <a href="pages-invoice.html" role="button" class="btn btn-primary"><span class="glyphicon glyphicon-print"></span>Print Invoice</a>
                    <a href="#" role="button" class="btn btn-danger">Delete</a>
                </div>
            </div>
            <!-- END Main Buttons -->
        </div>

        <div class="row">
            <div class="col-md-12">

                <!-- START Block: Orders -->
                <div class="block">
                    <div class="block-content-outer">
                        <div class="block-content-inner">
                            <div class="table-responsive">
                                <form role="form">
                                    <table class="table table-condensed table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="col-xs-3">Order ID</th>
                                                <th class="col-xs-2">Customer</th>
                                                <th class="col-xs-1">Status</th>
                                                <th class="col-xs-2">Total</th>
                                                <th class="col-xs-2">Date Added</th>
                                                <th class="col-xs-2">Date Modified</th>
                                                <th class="col-xs-1">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($paid_data->data as $value) {
                                                $view_url = site_url('history/history_paid_view/' . $value->purchaseId);

                                                echo "<tr>";
                                                echo "<td>" . $value->purchaseId . "</td>";
                                                echo "<td>" . $value->users->name . "</td>";

                                                $isDiscard = $value->isDiscard;
                                                if ($isDiscard == true)
                                                    echo "<td>" . '<span class="label label-danger">Declined</span>' . "</td>";
                                                else
                                                    echo "<td>" . '<span class="label label-success">Delivered</span>' . "</td>";


                                                echo "<td>" . $value->totalAmount . "</td>";

                                                $purchaseDateTime = $value->purchaseDate;
                                                $seconds = $purchaseDateTime / 1000;
                                                $purchaseDate = date("d/m/Y H:i:s", $seconds);

                                                $lastModifiedDateTime = $value->lastModifiedDateTime;
                                                $seconds = $lastModifiedDateTime / 1000;
                                                $lastModified = date("d/m/Y H:i:s", $seconds);

                                                echo "<td>" . $purchaseDate . "</td>";
                                                echo "<td>" . $lastModified . "</td>";
                                                echo "<td>" . '<a href="' . $view_url . '" class="btn btn-primary btn-sm" role="button">View</a>' . "</td>";
                                                echo "</tr>";
                                            }
                                            ?>
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