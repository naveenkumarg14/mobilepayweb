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
                    <span class="main-text">Product Edit</span>
                </h1>
            </div>
            <div class="col-md-6">
                <!-- START Main Buttons -->
                <div class="page-heading-controls">
                    <a href="" role="button" class="btn btn-primary">Save</a>
                    <a href="../products/products_list" role="button" class="btn btn-danger">Cancel</a>
                </div>
                <!-- END Main Buttons -->

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <!-- START Block: Product Edit -->
                <div class="block">
                    <div class="block-heading">
                        <div class="main-text h2">
                            <?php echo $item_details['ProductName']; ?>
                        </div>
                    </div>
                    <div class="block-content-outer">
                        <div class="block-content-inner">
                            <form class="form-horizontal product-edit" role="form">

                                <div class="form-group">
                                    <label for="product-name" class="col-sm-2 col-md-2 control-label">
                                        Product Name
                                        <span class="required-item">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="product-name" placeholder="Product Name" value='Apple Cinema 30"'>
                                        <span class="help-block">This will also be used for SEO</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="meta-desc" class="col-sm-2 col-md-2 control-label">
                                        Meta Tag Description
                                    </label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" id="meta-desc" rows="4" placeholder="This will be shows as your product description in search engines"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="meta-keywords" class="col-sm-2 col-md-2 control-label">
                                        Meta Tag Keywords
                                    </label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" id="meta-keywords" rows="4" placeholder="Enter keywords to used by search engines"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ckeditor1" class="col-sm-2 col-md-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea id="ckeditor1" class="form-control ckeditor-enabled" name="ckeditor1" rows="5"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END Block: Product Edit -->

            </div>
        </div>