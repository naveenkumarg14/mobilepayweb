<?php
foreach ($paid_data->data as $value) {
    if ($value->billNumber == $billNumber) {

        $billNumber = $value->billNumber;
        $category = $value->category;
        $isEditable = $value->isEditable;
        $isDelivered = $value->isDelivered;

        $lastModifiedDateTime = $value->lastModifiedDateTime;
        $seconds = $lastModifiedDateTime / 1000;
        $lastModified = date("d/m/Y H:i:s", $seconds);

        $purchaseDateTime = $value->purchaseDate;
        $seconds = $purchaseDateTime / 1000;
        $purchaseDate = date("d/m/Y H:i:s", $seconds);

        $isDiscard = $value->isDiscard;
        $totalAmount = $value->totalAmount;

        $taxAmount = $value->amountDetails->taxAmount;
        $discount = $value->amountDetails->discount;
        $discountType = $value->amountDetails->discountType;
        $discountMiniVal = $value->amountDetails->discountMiniVal;

        $username = $value->users->name;
        $mobilenumber = $value->users->mobileNumber;
        
        $merchantDeliveryOptions = $value->merchantDeliveryOptions;

        $userDeliveryOptions = $value->userDeliveryOptions;
        
        if($userDeliveryOptions == 'HOME'){
             $addressName = $value->addressDetails->name;
                $street = $value->addressDetails->street;
                $address = $value->addressDetails->address;
                $area = $value->addressDetails->area;
                $city = $value->addressDetails->city;
                $postalCode = $value->addressDetails->postalCode;
                $mobile = $value->addressDetails->mobile;
        }
        
    }
}
?>
<!-- Modal default-modal-->
<div class="modal fade" id="default-modal" tabindex="-1" role="dialog" aria-labelledby="default-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" data-border-top="multi">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="default-modal-label">  <?php echo "Order #" . $billNumber . " - " . $username; ?></h4>
            </div>
            <div class="modal-body">
                <h4>Order Status</h4>
                <div class="block-content-outer">
                    <div class="block-content-inner">
                        <?php echo form_open('orders/update_order_status'); ?>
                        <input type="hidden" name="orderid" value="<?php echo $billNumber; ?>"/>
                        <br>

                        <select id="orderstatusoptions" name="orderstatusoptions" class="form-control" onchange="setOrderStatus()">
                            <option>Select</option>
                            <option value="COLLECTION">COLLECTION</option>
                            <option value="DELIVERED">DELIVERED</option>
                            <option value="READY_TO_SHIPPING">READY_TO_SHIPPING</option>
                            <option value="OUT_FOR_DELIVERY">OUT_FOR_DELIVERY</option>
                        </select>

                        <br>
                        <div id="orderstatusvaluediv" style="display:none;">
                            <input type="text"  class="form-control" name="orderstatusvalue" id="orderstatusvalue" placeholder="Enter the counter number" required="true">
                        </div>
                        <br>
                        <label for="input-demo-h-1">Description</label>
                        <textarea class="form-control" rows="3" name="orderstatusdesc" id="orderstatusdesc"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Submit"/>
            </div>
            </form>
        </div> 
    </div>
</div>

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
                    <span class="main-text">
                        Paid Order View
                    </span>
                </h1>
            </div>
            <div class="col-md-6">

                <!-- START Main Buttons -->
                <div class="page-heading-controls">
                    <a href="pages-invoice.html" role="button" class="btn btn-primary">Print Invoice</a>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#default-modal">Update Order Status</button>
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
                            <?php echo "Order #" . $billNumber . " - " . $username; ?>
                        </div>
                    </div>
                    <div class="block-content-outer">
                        <div class="block-content-inner">
                            <div id="order-view-content" class="table-responsive">
                                <ul id="order-view-tabs" class="nav nav-tabs tabs-left">
                                    <li class="active"><a href="#order-view-tabs-order-details" data-toggle="tab">Order Details</a></li>
                                    <li><a href="#order-view-tabs-payment" data-toggle="tab">User Details</a></li>
                                    <li><a href="#order-view-tabs-products" data-toggle="tab">Product List</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="order-view-tabs-order-details" class="tab-pane active">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <td class="col-md-3">Order ID:</td>
                                                    <td class="col-md-9">#<?php echo $billNumber; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Invoice #:</td>
                                                    <td class="col-md-9"><?php echo $billNumber; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Customer Name:</td>
                                                    <td class="col-md-9"><?php echo $username; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Customer Group:</td>
                                                    <td class="col-md-9"><?php echo $category; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Mobile Number:</td>
                                                    <td class="col-md-9"><?php echo $mobilenumber; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Total:</td>
                                                    <td class="col-md-9"><?php echo $totalAmount; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Purchase Date:</td>
                                                    <td class="col-md-9"><?php echo $purchaseDate; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Date Modified:</td>
                                                    <td class="col-md-9"><?php echo $lastModified; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Order Status:</td>
                                                    <?php
                                                    $orderStatus = $value->orderStatus;
                                                    echo "<td>" . '<span class="label label-success">' . $orderStatus . '</span>' . "</td>";
                                                    ?>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Merchant Delivery Option:</td>
                                                    <td class="col-md-9"><?php echo $merchantDeliveryOptions; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="order-view-tabs-payment">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <td class="col-md-3">Name:</td>
                                                    <td class="col-md-9"><?php echo $username; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Mobile Number:</td>
                                                    <td class="col-md-9"><?php echo $mobilenumber; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">User Delivery Option:</td>
                                                    <td class="col-md-9"><?php echo $userDeliveryOptions; ?></td>
                                                </tr>
                                                <?php if ($userDeliveryOptions == "HOME") { ?>
                                                    <tr>
                                                        <td class="col-md-3">Address:</td>
                                                        <td class="col-md-9"><?php echo $addressName . ',<br> ' . $street . ', ' . $address . ', ' . $area . ', ' . $city . ', ' . $postalCode ?></td>
                                                    </tr>
                                                <?php }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="order-view-tabs-products">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Product No</th>
                                                    <th>Description</th>
                                                    <th class="text-right">Quantity</th>
                                                    <th class="text-right">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($paid_data->data as $value) {
                                                    if ($value->billNumber == $billNumber) {
                                                        foreach ($value->productDetails as $item) {
                                                            echo "<tr>";
                                                            echo "<td>" . $item->itemNo . "</td>";
                                                            echo "<td>" . $item->description . "</td>";
                                                            echo "<td class='text-right'>" . $item->quantity . "</td>";
                                                            echo "<td class='text-right'>" . $item->amount . "</td>";
                                                            echo "</tr>";
                                                        }
                                                    }
                                                }
                                                ?>
                                                <tr>
                                                    <td class="text-right" colspan="3">Discount:</td>
                                                    <td class="text-right"><?php echo $discount; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="3">Discount Type:</td>
                                                    <td class="text-right"><?php echo $discountType; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="3">Discount Value:</td>
                                                    <td class="text-right"><?php echo $discountMiniVal; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="3">Tax Amount:</td>
                                                    <td class="text-right"><?php echo $taxAmount; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="3">Total:</td>
                                                    <td class="text-right"><?php echo $totalAmount; ?></td>
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