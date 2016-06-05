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
            <li class="menu-item-top selected">
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
                        History Paid View
                    </span>
                </h1>
            </div>
            <div class="col-md-6">

                <!-- START Main Buttons -->
                <div class="page-heading-controls">
                    <a href="pages-invoice.html" role="button" class="btn btn-primary">Print Invoice</a>
                    <a href="" role="button" class="btn btn-warning">Update Order Status</a>
                </div>
                <!-- END Main Buttons -->

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php
                foreach ($paid_data->data as $value) {
                    if ($value->purchaseId == $purchaseId) {

                        $billNumber = $value->billNumber;
                        $category = $value->category;
                        $isEditable = $value->isEditable;

                        $isHomeDelivery = $value->isDelivered;
                        if ($isHomeDelivery == true)
                            $isHomeDelivery = "Yes";
                        else
                            $isHomeDelivery = "No";

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

                        $deliveryOptionsValue = $value->deliveryOptions;
                        switch ($deliveryOptionsValue) {
                            case "NONE":
                                $deliveryOptions = "Billing";
                                break;
                            Case "HOME":
                                $deliveryOptions = "Home Delivery";

                                $addressName = $value->addressDetails->name;
                                $street = $value->addressDetails->street;
                                $address = $value->addressDetails->address;
                                $area = $value->addressDetails->area;
                                $city = $value->addressDetails->city;
                                $postalCode = $value->addressDetails->postalCode;
                                $mobile = $value->addressDetails->mobile;
                                break;
                            Case "LUGGAGE":
                                $deliveryOptions = "Collection";
                                break;
                        }
                    }
                }
                //NONE(0), HOME(1), LUGGAGE(2);
                ?>
                <!-- START Block: Order View -->
                <div class="block">
                    <div class="block-heading">
                        <div class="main-text h2">
                            <?php echo "Order #" . $purchaseId . " - " . $username; ?>
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
                                                    <td class="col-md-9">#<?php echo $purchaseId; ?></td>
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
                                                    $isDiscard = $value->isDiscard;
                                                    if ($isDiscard == true)
                                                        echo "<td>" . '<span class="label label-danger">Declined</span>' . "</td>";
                                                    else
                                                        echo "<td>" . '<span class="label label-success">Delivered</span>' . "</td>";
                                                    ?>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-3">Delivery Option:</td>
                                                    <td class="col-md-9"><?php echo $deliveryOptions; ?></td>
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
                                                    <td class="col-md-3">Home Delivery:</td>
                                                    <td class="col-md-9"><?php echo $isHomeDelivery; ?></td>
                                                </tr>
                                                <?php if ($deliveryOptionsValue == "HOME") { ?>
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
                                                    if ($value->purchaseId == $purchaseId) {
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