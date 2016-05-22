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
            <li class="menu-item-top selected">
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
                    <span class="main-text">Product List</span>
                </h1>
            </div>
            <div class="col-md-6">
                <!-- START Main Buttons -->
                <div class="page-heading-controls">
                    <a href="../products/products_add" role="button" class="btn btn-primary">Add Product</a>
                </div>
                <!-- END Main Buttons -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <!-- START Block: Product List -->
                <div class="block">
                    <div class="block-heading">
                        <div class="main-text h2">
                            Products
                        </div>
                    </div>
                    <div class="block-content-outer">
                        <div class="block-content-inner">
                            <div class="table-responsive">
                                <form role="form">
                                    <table class="table table-condensed table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="col-xs-2">ID</th>
                                                <th class="col-xs-1">Product Name</th>
                                                <th class="text-right col-xs-2">Price</th>
                                                <th class="text-right col-xs-2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($items_list as $item): ?>
                                                <tr> 
                                                    <td><?php echo $item['ProductId']; ?></td>
                                                    <td><?php echo $item['ProductName']; ?></td>
                                                    <td class="text-right"><?php echo $item['Rate']; ?></td>
                                                    <td class="text-right">
                                                        <a role="button" class="btn btn-primary" href="<?php echo site_url('products/product_edit/' . $item['ProductId']); ?>">Edit</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Block: Product List -->
            </div>
        </div>