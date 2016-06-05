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
            <li class="menu-item-top">
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
            <li class="menu-item-top  selected">
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
                    <span class="main-text">Products</span>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- START Block: Orders -->
                <div class="block">
                    <div class="block-heading">
                        <div class="main-text h2">
                            Add Products
                        </div>
                    </div>
                    <div class="block-content-outer">
                        <div class="block-content-inner">
                            <div class="table-responsive">
                                <form action="" method="POST" enctype="multipart/form-data" >
                                    <div class="tab-pane" id="product-edit-tabs-data">
                                        <div class="form-group">
                                            <label for="product-model" class="col-sm-2 col-md-2 control-label">
                                                Upload File
                                            </label>
                                            <div class="col-sm-4">
                                                <input type="file" class="form-control" name="userfile" id="userfile">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="product-model" class="col-sm-2 col-md-2 control-label">

                                            </label>
                                            <div class="col-sm-4">
                                                <input type="submit" class="btn btn-primary" name="submit">
                                            </div>
                                        </div>

                                        <br>
                                        <br>
                                        <br>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Block: Orders -->
            </div>
        </div>