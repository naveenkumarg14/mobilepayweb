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
                url: 'http://localhost/sales/orders/ajax',
                dataType: "json",
                data: {
                    name_startsWith: request.term,
                    type: 'country'
                },
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
    tax = $('#tax').val();
    if (tax !== '' && typeof (tax) !== "undefined") {
        taxAmount = subTotal * (parseFloat(tax) / 100);
        $('#taxAmount').val(taxAmount.toFixed(2));
        total = subTotal + taxAmount;
    } else {
        $('#taxAmount').val(0);
        total = subTotal;
    }
    $('#totalAftertax').val(total.toFixed(2));
    //calculateAmountDue();
}

//$(document).on('change keyup blur', '#amountPaid', function() {
//    calculateAmountDue();
//});

////due amount calculation
//function calculateAmountDue() {
//    amountPaid = $('#amountPaid').val();
//    total = $('#totalAftertax').val();
//    if (amountPaid != '' && typeof(amountPaid) != "undefined") {
//        amountDue = parseFloat(total) - parseFloat(amountPaid);
//        $('.amountDue').val(amountDue.toFixed(2));
//    } else {
//        total = parseFloat(total).toFixed(2);
//        $('.amountDue').val(total);
//    }
//}


//It restrict the non-numbers
var specialKeys = new Array();
specialKeys.push(8, 46); //Backspace
function IsNumeric(e) {
    var keyCode = e.which ? e.which : e.keyCode;
    console.log(keyCode);
    var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
    return ret;
}

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
}

function resetDiscountValue(){
    $('#totalAftertax').val($('#subTotal').val());
    $('#discountAmount').val('');
    
}