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
                    <span class="main-text">Orders</span>
                </h1>
                
                 <button class="btn btn-success" data-toggle="modal" data-target="#default-modal">
                                                View Demo
                                            </button>
            </div>

            <!-- END Main Buttons -->
        </div>

        
    </div>
   
</div>
</div>
</div><!-- /.container -->

<!-- START: Modal -->
<!-- 
        Check Circloid's documentation for details. You can also check Bootstraps official documentation if you need more help.
        Bootstrap URL: http://getbootstrap.com/javascript/#modals
-->

<!-- Modal default-modal-->
<div class="modal fade" id="default-modal" tabindex="-1" role="dialog" aria-labelledby="default-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" data-border-top="multi">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="default-modal-label">Default Modal Box</h4>
            </div>
            <div class="modal-body">
                <p>Here I am. This is me.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


