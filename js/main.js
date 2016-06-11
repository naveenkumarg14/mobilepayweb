//select all
function select_all() {
    $("input[class=case]:checkbox").each(
            function () {
                0 == $("input[class=check_all]:checkbox:checked").length ? $(
                        this).prop("checked", !1) : $(this).prop("checked", !0)
            })
}
function check() {
    obj = $("table tr").find("span"), $.each(obj, function (t, a) {
        id = a.id, $("#" + id).html(t + 1)
    })
}

$(".delete").on("click", function () {
    $(".case:checkbox:checked").parents("tr").remove();
    $(".check_all").prop("checked", !1);
    check();
    calculateTotal();
});

var i = $("table tr").length;
$(".addmore").on("click", function () {
    count = $("table tr").length;
    var t = "<tr><td><input type='checkbox' class='case'/></td>";
    t += "<td><span id='snum" + i + "'>" + count + ".</span></td>";
    t += "<td><input type='text' data-type='productname' id='productname_" + i + "' name='productname[]' class='form-control autocomplete_txt'/></td>";
    t += "<td><input type='text' data-type='product_id' id='product_id_" + i + "' name='product_id[]' class='form-control autocomplete_txt' readonly/></td>";
    t += "<td><input type='text' data-type='product_rate' id='product_rate_" + i + "' name='product_rate[]' class='form-control' readonly/>";
    t += "</td><td><input type='number' data-type='product_qty' id='product_qty_" + i + "' name='product_qty[]' class='form-control changesNo' onkeypress='return IsNumeric(event);'/></td>";
    t += "<td><input type='text' data-type='total_price' id='total_price_" + i + "' name='total_price[]' class='form-control totalLinePrice' onkeypress='return IsNumeric(event);' readonly/>";
    t += "</tr>";
    $("table").append(t);
    i++;
});

//autocomplete script
$(document).on('focus', '.autocomplete_txt', function () {
    type = $(this).data('type');
    $(this).autocomplete({
        minLength: 0,
        source: function (request, response) {
            $.ajax({
                url: './ajax',
                type: "post",
                dataType: 'json',
                data: {name_startsWith: request.term},
                success: function (data) {
                    response($.map(data, function (item) {
                        if (data.length >= 0)
                            return {
                                label: item.ProductName,
                                value: item.ProductName,
                                data: item
                            };
                    }));
                }
            });
        },
        focus: function () {
            // prevent value inserted on focus
            return false;
        },
        select: function (event, ui) {
            id_arr = $(this).attr('id');
            id = id_arr.split("_");
            elementId = id[id.length - 1];
            $('#productname_' + elementId).val(ui.item.data.ProductName);
            $('#product_id_' + elementId).val(ui.item.data.ProductId);
            $('#product_rate_' + elementId).val(ui.item.data.Rate);
            $('#product_qty_' + elementId).val(1);
            $('#total_price_' + elementId).val(ui.item.data.Rate);
            calculateTotal();
        }
    });
});


//price change
$(document).on('change keyup blur', '.changesNo', function () {
    id_arr = $(this).attr('id');
    id = id_arr.split("_");
    elementId = id[id.length - 1];
    quantity = $('#product_qty_' + elementId).val();
    price = $('#product_rate_' + elementId).val();

    if (quantity !== '' && price !== '')
        $('#total_price_' + elementId).val((parseFloat(price) * parseFloat(quantity)).toFixed(2));
    calculateTotal();
});



$(document).on('change keyup blur', '#tax', function () {
    calculateTotal();
});

//total price calculation 
function calculateTotal() {
    subTotal = 0;
    total = 0;
    $('.totalLinePrice').each(function () {
        if ($(this).val() !== '')
            subTotal += parseFloat($(this).val());
    });
    $('#subTotal').val(subTotal.toFixed(2));
    total = subTotal;

    var discountType = $('#discounttype').val();
    var discountAmount = $('#discountAmount').val();
    var discountMinAmount = $('#discountMinAmount').val();

    if (discountType && discountAmount) {
        if (discountType === 'PERCENTAGE') {
            if (discountMinAmount) {
                if (discountMinAmount <= subTotal) {
                    var discountAmountTemp = subTotal * (parseFloat(discountAmount) / 100);
                    total = subTotal - discountAmountTemp.toFixed(2);
                }
            } else {
                var discountAmountTemp = subTotal * (parseFloat(discountAmount) / 100);
                total = subTotal - discountAmountTemp.toFixed(2);
            }
        } else if (discountType === 'AMOUNT') {
           
            if (discountMinAmount) {
                if (discountMinAmount <= subTotal && discountAmount <= subTotal) {
                   total = subTotal - discountAmount;
                }
            } else {
               
                if (discountAmount <= subTotal) {
                   
                    total = subTotal - discountAmount;
                   
                }
            }


        }
    }

    tax = $('#tax').val();
    if (tax !== '' && typeof (tax) !== "undefined") {
        taxAmount = total * (parseFloat(tax) / 100);
        $('#taxAmount').val(taxAmount.toFixed(2));
        total = total + taxAmount;
    }


    $('#totalAftertax').val(total.toFixed(2));
    //calculateAmountDue();
}



//It restrict the non-numbers
var specialKeys = new Array();
specialKeys.push(8, 46); //Backspace
function IsNumeric(e) {
    var keyCode = e.which ? e.which : e.keyCode;
    console.log(keyCode);
    var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
    return ret;
}
/*
function applyDiscount() {
    var subTotal = $('#subTotal').val();
    var discountType = $('#discounttype').val();
    var minAmount = $('#discountMinAmount').val();
    var discountAmount = $('#discountAmount').val();
    var totalAmount = 0;
    if (discountType === 'AMOUNT' && subTotal >= minAmount) {
        totalAmount = subTotal - discountAmount;
    } else if (discountType === 'PERCENTAGE' && subTotal >= minAmount) {
        totalAmount = subTotal - (subTotal * (discountAmount / 100));
    } else {
        totalAmount = subTotal;
    }


    if (tax !== '' && typeof (tax) !== "undefined") {
        taxAmount = totalAmount * (parseFloat(tax) / 100);
        $('#taxAmount').val(taxAmount.toFixed(2));
        totalAmount = totalAmount + taxAmount;
    }

    $('#totalAftertax').val(totalAmount.toFixed(2));
}*/

function resetDiscountValue() {
        $('#discountAmount').val('');
    $('#discountMinAmount').val('');
    calculateTotal();

}

function setOrderStatus() {
    var orderstatusoptions = $('#orderstatusoptions').val();
    if (orderstatusoptions === 'COLLECTION') {
        $("#orderstatusvaluediv").show();
    } else {
        $("#orderstatusvaluediv").hide();
        $('#orderstatusvalue').val(orderstatusoptions);
    }
}

