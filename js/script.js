/////////////////////////////////////////
// Call All Required Circloid Function //
/////////////////////////////////////////

"use strict";

$(document).ready(function () {

    /* Call Function: circloidRFMisc() */
    // Miscellaneous - Always load first
    circloidRFMisc();

    /* Call Function: circloidRFResponsiveness() */
    // Load immediately after "circloidRFMisc Function" for proper responsive behaviour
    circloidRFResponsiveness();

    /* Call Function: circloidMenuNav() */
    // Let Menu
    circloidMenuNav({
        container: ".mainnav",
        eventtype: "click"
    });

    /* Call Function: circloidMenuNav() */
    // Horizontal
    circloidMenuNav({
        container: ".mainnav-horizontal",
        eventtype: "click",
        menuposition: "top"
    });

    /* Call Function: circloidLanguageMenu() */
    circloidLanguageMenu();

    /* Call Function: circloidSearchBar() */
    circloidSearchBar();

    /* Call Function: circloidNotificationAlert() */
    circloidNotificationAlert({
        eventtype: "click"
    });

    /* Call Function: circloidProfileMenu() */
    circloidProfileMenu({
        eventtype: "click"
    });

    /* Call Function: circloidBlocks() */
    circloidBlocks({
        colorcollapsed: "red"
    });

    /* Call Function: circloidRevealBugFix() */
    /* IMPORTANT: Always place this at the bottom of Circloid main functions if you wish to use animated menus */
    circloidRevealBugFix();

    /* Call Any Required User-Defined Functions & Plugins - Start */

    /* Call Any Required User-Defined Functions & Plugins - End */


});

function deliveryOptionVal() {
    var deliveryOption = document.getElementById("deliveryOption").value;
    if ((deliveryOption === "HOME") || (deliveryOption === "BOTH")) {
        document.getElementById("deliveryCondition123").style.display = 'block';
       // $("#deliveryCondition").prop('required', true);
    } else {
        document.getElementById("deliveryCondition123").style.display = 'none';
        //$("#deliveryCondition").prop('required', false);
    }
    }
    
  

function deliveryConditionEvent() {
     
    var deliveryCondition = document.getElementById("deliveryCondition").value;
   //alert(deliveryCondition);
    if (deliveryCondition === "FIXED") {
     //  alert("0000");
        document.getElementById("amount123").style.display = 'block';
       // $("#amount").prop('required', true);
    } else if (deliveryCondition === "CONDITIONAL") {
        document.getElementById("amount123").style.display = 'block';
        document.getElementById("maxDistance").style.display = 'block';
        document.getElementById("minAmount").style.display = 'block';

//        $("#amount").prop('required', true);
//        $("#maxDistance").prop('required', true);
//        $("#minAmount").prop('required', true);
    } else {
        document.getElementById("amount123").style.display = 'none';
        document.getElementById("maxDistance").style.display = 'none';
        document.getElementById("minAmount").style.display = 'none';

//        $("#amount").prop('required', false);
//        $("#maxDistance").prop('required', false);
//        $("#minAmount").prop('required', false);
    }
}