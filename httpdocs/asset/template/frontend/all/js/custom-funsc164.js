/* ***************** start admin funs  *********** */
function calcDistance(point1Lat, point1Long, point2Lat, point2Long) {
    var p1 = new google.maps.LatLng(point1Lat, point1Long);
    var p2 = new google.maps.LatLng(point2Lat, point2Long);
    return (google.maps.geometry.spherical.computeDistanceBetween(p1, p2) / 1000).toFixed(2);
}



function getMediaURL(element_id, theContent)

{



    if (element_id == 'theContentWithTextEditor')

    {

        CKEDITOR.instances[element_id].setData(theContent);

    } else {

        jQuery('#' + element_id).val(theContent);

    }



    jQuery.colorbox.close();

}





jQuery(document).ready(function()

    {



        jQuery(".check_all").click(function()

            {



                var checked_status = this.checked;



                jQuery(".ids").each(function()



                    {



                        this.checked = checked_status;



                    });



            });









        /* ***************** end main admin funs  *********** */





        /* ***************** start admin funs  *********** */











    });



jQuery(document).ready(function() {



    jQuery('#resetPassword').click(function() {



        //waitingMsg();

        $("#resetPasswordAlertDiv").show().removeClass().addClass("alert text-center alert-info");

        $('#resetPasswordAlertDiv').html("<i class='fa fa-spinner fa-pulse fa-2x'></i>");



        $.ajax({



            url: main_url + "/reset-password",

            method: 'post',

            data: jQuery(this).parents("form").serializeArray(),

            cache: false,



            success: function(data) {



                if (data['success'] == true) {



                    $("#resetPasswordAlertDiv").removeClass().addClass("alert text-center alert-success");

                    $('#resetPasswordAlertDiv').html(data['msg']);

                    jQuery('#resetPassword').parents("form").trigger('reset');



                } else {



                    $("#resetPasswordAlertDiv").removeClass().addClass("alert text-center alert-danger");

                    $('#resetPasswordAlertDiv').html(data['msg']);

                }



            },

            error: function(data) {

                data = data.responseJSON;

                var errorsHtml = '';



                $.each(data, function(key, value) {

                    errorsHtml += value[0] + '<br/><br/>'; //showing only the first error.

                });



                $("#resetPasswordAlertDiv").removeClass().addClass("alert text-center alert-danger");

                //$('#loginErrMsg').addClass('alert-danger');

                $('#resetPasswordAlertDiv').html(errorsHtml);



                //$('#contactModal .modal-body').html(errorsHtml);

                //$('#contactModal').modal('show');



            }



        });



        // return false;



    });

});



function addOrderComment(userId, orderId) {



    $("#commentAlertDiv" + orderId).show().removeClass().addClass("alert text-center alert-info");

    $('#commentAlertDiv' + orderId).html("<i class='fa fa-spinner fa-pulse fa-2x'></i>");





    $.ajax({



        url: main_url + "/order-comment/create",

        method: 'get',

        data: { 'theContent': $('#commentContent' + orderId).val(), 'userId': userId, 'orderId': orderId },

        cache: false,



        success: function(data) {



            if (data['success'] == true) {



                $("#commentAlertDiv" + orderId).removeClass().addClass("alert text-center alert-success");

                $('#commentAlertDiv' + orderId).html(data['msg']);



                location.reload();



            } else {

                $("#commentAlertDiv" + orderId).removeClass().addClass("alert text-center alert-danger");

                $('#commentAlertDiv' + orderId).html(data['msg']);



            }



        },

        error: function(data) {



        }



    });



    // return false;



}





jQuery(document).ready(function() {



    jQuery('#contactButton').click(function() {



        //waitingMsg();

        $('#contactMsg').show().text('...جاري التحميل');



        $.ajax({



            url: main_url + "/contact",

            method: 'post',

            data: jQuery(this).parents("form").serializeArray(),

            cache: false,



            success: function(data) {



                if (data['success'] == true) {



                    $("#contactMsg").removeClass().addClass("alert text-center alert-success");

                    $('#contactMsg').html(data['msg']);

                    jQuery('#contactButton').parents("form").trigger('reset');



                } else {



                    $("#contactMsg").removeClass().addClass("alert text-center alert-danger");

                    $('#contactMsg').html(data['msg']);

                }



            },

            error: function(data) {

                data = data.responseJSON;

                var errorsHtml = '';



                $.each(data, function(key, value) {

                    errorsHtml += value[0] + '<br/><br/>'; //showing only the first error.

                });



                $("#contactMsg").removeClass().addClass("alert text-center alert-danger");

                //$('#loginErrMsg').addClass('alert-danger');

                $('#contactMsg').html(errorsHtml);



                //$('#contactModal .modal-body').html(errorsHtml);

                //$('#contactModal').modal('show');





            }



        });



        // return false;



    });

});



jQuery(document).ready(function() {

    jQuery('#tutorialDepId').change(function() {

        if (jQuery("#tutorialDep2Id").length) //check if the dropdown to be filled exists
        {
            $("#tutorialDep2Id option").remove();
        }


        if (jQuery("#tutorialDep1Id").length) //check if the dropdown to be filled exists
        {

            $("#tutorialDep1Id option").remove();

            $.ajax({

                url: admin_url + "/tutorialdep1/get/" + jQuery('#tutorialDepId').val(),
                method: 'get',
                data: {},
                dataType: "json",
                cache: false,

                success: function(data) {

                    $("#tutorialDep1Id").append(
                        $("<option></option>")
                        .text('...')
                        .val('')
                    );

                    $.each(data, function(i, item) {

                        $("#tutorialDep1Id").append(

                            $("<option></option>")

                            .text(item.title)

                            .val(item.id)
                        );

                    });

                    $("#tutorialDep1Id").trigger("chosen:updated");

                },

                error: function(data) {

                    // console.log(data);

                }

            });

        }

    });

});

jQuery(document).ready(function() {

    jQuery('#tutorialDep1Id').change(function() {

        if (jQuery("#tutorialDep2Id").length) //check if the dropdown to be filled exists
        {

            $("#tutorialDep2Id option").remove();


            $.ajax({

                url: admin_url + "/tutorialdep2/get/" + jQuery('#tutorialDep1Id').val(),
                method: 'get',
                data: {},
                dataType: "json",
                cache: false,

                success: function(data) {

                    $("#tutorialDep2Id").append(
                        $("<option></option>")
                        .text('...')
                        .val('')
                    );

                    $.each(data, function(i, item) {

                        $("#tutorialDep2Id").append(

                            $("<option></option>")

                            .text(item.title)

                            .val(item.id)
                        );

                    });

                    $("#tutorialDep2Id").trigger("chosen:updated");

                },

                error: function(data) {

                    // console.log(data);

                }

            });

        }

    });

});

jQuery(document).ready(function() {

    jQuery('#tutorialDep2Id').change(function() {

        if (jQuery("#tutorialDep3Id").length) //check if the dropdown to be filled exists
        {

            $("#tutorialDep3Id option").remove();

            $.ajax({

                url: admin_url + "/tutorialdep3/get/" + jQuery('#tutorialDep2Id').val(),
                method: 'get',
                data: {},
                dataType: "json",
                cache: false,

                success: function(data) {

                    $("#tutorialDep3Id").append(
                        $("<option></option>")
                        .text('...')
                        .val('')
                    );

                    $.each(data, function(i, item) {

                        $("#tutorialDep3Id").append(

                            $("<option></option>")

                            .text(item.title)

                            .val(item.id)
                        );

                    });

                    $("#tutorialDep3Id").trigger("chosen:updated");

                },

                error: function(data) {

                    // console.log(data);

                }

            });

        }

    });

});




jQuery(document).ready(function() {



    jQuery('#expenseDepId').change(function() {

        if (jQuery("#expenseSubDepId").length) //check if the dropdown to be filled exists
        {

            $("#expenseSubDepId option").remove();

            $.ajax({

                url: admin_url + "/expense-subdep/get/" + jQuery('#expenseDepId').val(),
                method: 'get',
                data: {},
                dataType: "json",
                cache: false,

                success: function(data) {

                    //alert(jQuery('#productDepId').val())

                    // + ' : '  + item.the_url 15/08/2015

                    $("#expenseSubDepId").append(
                        $("<option></option>")
                        .text('...')
                        .val('')
                    );

                    $.each(data, function(i, item) {

                        $("#expenseSubDepId").append(

                            $("<option></option>")

                            .text(item.title)

                            .val(item.id)
                        );

                    });

                    $("#expenseSubDepId").trigger("chosen:updated");

                },

                error: function(data) {

                    // console.log(data);

                }

            });



        }

    });

});


jQuery(document).ready(function() {



    jQuery('#productDepId').change(function() {

        if (jQuery("#productId").length) //check if the dropdown to be filled exists



        {



            $("#productId option").remove();



            $.ajax({

                url: admin_url + "/product/get/" + jQuery('#productDepId').val(),

                method: 'get',

                data: {},

                dataType: "json",

                cache: false,

                success: function(data) {

                    //alert(jQuery('#productDepId').val())

                    // + ' : '  + item.the_url 15/08/2015

                    $("#productId").append(

                        $("<option></option>")

                        .text('...')

                        .val('0')

                    );

                    $.each(data, function(i, item) {



                        $("#productId").append(

                            $("<option></option>")

                            .text(item.title)

                            .val(item.id)

                        );



                    });

                    $("#productId").trigger("chosen:updated");





                },

                error: function(data) {

                    // console.log(data);

                }

            });



        }

    });

});





jQuery(document).ready(function() {



    jQuery('#productId').change(function() {

        if (jQuery("#sizeId").length) //check if the dropdown to be filled exists

        {

            $("#sizeId option").remove();



            $.ajax({

                url: admin_url + "/size/get/" + jQuery('#productId').val(),

                method: 'get',

                data: {},

                dataType: "json",

                cache: false,

                success: function(data) {

                    //alert(jQuery('#productDepId').val())

                    // + ' : '  + item.the_url 15/08/2015

                    $("#sizeId").append(

                        $("<option></option>")

                        .text('...')

                        .val('')

                    );

                    $.each(data, function(i, item) {



                        $("#sizeId").append(

                            $("<option></option>")

                            .text(item.title)

                            .val(item.id)

                        );



                    });

                    $("#sizeId").trigger("chosen:updated");





                },

                error: function(data) {

                    // console.log(data);

                }

            });



        }

    });

});





jQuery(document).ready(function() {



    jQuery('#productId').change(function() {

        if (jQuery("#weightId").length) //check if the dropdown to be filled exists

        {

            $("#weightId option").remove();



            $.ajax({

                url: admin_url + "/weight/get/" + jQuery('#productId').val(),

                method: 'get',

                data: {},

                dataType: "json",

                cache: false,

                success: function(data) {

                    //alert(jQuery('#productDepId').val())

                    // + ' : '  + item.the_url 15/08/2015

                    $("#weightId").append(

                        $("<option></option>")

                        .text('...')

                        .val('')

                    );

                    $.each(data, function(i, item) {



                        $("#weightId").append(

                            $("<option></option>")

                            .text(item.title)

                            .val(item.id)

                        );



                    });

                    $("#weightId").trigger("chosen:updated");





                },

                error: function(data) {

                    // console.log(data);

                }

            });



        }

    });

});





jQuery(document).ready(function() {



    jQuery('#productId').change(function() {

        if (jQuery("#versionId").length) //check if the dropdown to be filled exists

        {

            $("#versionId option").remove();



            $.ajax({

                url: admin_url + "/version/get/" + jQuery('#productId').val(),

                method: 'get',

                data: {},

                dataType: "json",

                cache: false,

                success: function(data) {

                    //alert(jQuery('#productDepId').val())

                    // + ' : '  + item.the_url 15/08/2015

                    $("#versionId").append(

                        $("<option></option>")

                        .text('...')

                        .val('')

                    );

                    $.each(data, function(i, item) {



                        $("#versionId").append(

                            $("<option></option>")

                            .text(item.title)

                            .val(item.id)

                        );



                    });

                    $("#versionId").trigger("chosen:updated");





                },

                error: function(data) {

                    // console.log(data);

                }

            });



        }

    });

});





jQuery(document).ready(function() {



    jQuery('#productId').change(function() {

        if (jQuery("#quantity").length) //check if the dropdown to be filled exists

        {

            $("#quantity option").remove();



            $.ajax({

                url: admin_url + "/quantity/get/" + jQuery('#productId').val(),

                method: 'get',

                data: {},

                dataType: "json",

                cache: false,

                success: function(data) {

                    //alert(jQuery('#productDepId').val())

                    // + ' : '  + item.the_url 15/08/2015

                    $("#quantity").append(

                        $("<option></option>")

                        .text('...')

                        .val('')

                    );

                    $.each(data, function(i, item) {



                        $("#quantity").append(

                            $("<option></option>")

                            .text(item.title)

                            .val(item.title)

                        );



                    });

                    $("#quantity").trigger("chosen:updated");





                },

                error: function(data) {

                    // console.log(data);

                }

            });



        }

    });

});





// get shipment cost.

jQuery(document).ready(function() {



    //$(document).on("click","div[id^=shipmentAdrsIdDiv]", function(){
    $(document).on("click", ".shipmentAdrsIdDiv", function() {

        //alert('k')
        $('#couponContainer').removeClass('hidden');
        var shipmentAdrsId = $(this).data('id');

        $("#shipmentAdrsIdInput").val(shipmentAdrsId);
        getShipmentCost();
        //getAvailableCargo(shipmentAdrsId);

    });



});


function getAvailableCargo(shipmentAdrsId) {

    //alert(totalWeights)

    // $.ajax({

    //     url: main_url + "/get-cargo/" + shipmentAdrsId,
    //     method: 'get',
    //     data: {},
    //     cache: false,
    //     success: function(data) {
    //         $("#preferredCargoSelectDiv").html(data)
    //     },
    //     error: function(data) {}

    // });

}


/* this runs after adding a new shipment adrs from cart-review page so it calculate
the cost of the last added adrs */

jQuery(document).ready(function() {

    if (jQuery("#shipmentAdrsIdInput").length && $("#shipmentAdrsIdInput").val() != 0) {
        var shipmentAdrsId = $("#shipmentAdrsIdInput").val();
        getShipmentCost();
    }

});


function getShipmentCost() {

    var preferredCargo = $("#preferredCargoSelect").val();
    var totalWeights = $("#totalWeights").val();
    var productInOfferInput = $("#productInOfferInput").val();
    var shipmentAdrsId = $("#shipmentAdrsIdInput").val();

    //alert(totalWeights)

    $.ajax({

        url: main_url + "/payment/shipment-cost/get",

        method: 'post',

        data: { 'preferredCargo': preferredCargo, 'shipmentAdrsId': shipmentAdrsId, 'totalWeights': totalWeights, 'productInOfferInput': productInOfferInput },

        //dataType: "json",

        cache: false,

        success: function(data) {

            //alert(jQuery('#productDepId').val())

            var shipmentCost = parseFloat(data);



            $("#shippingChargesInput").val(shipmentCost);

            $("#shippingChargesSpan").text(shipmentCost);

            var totalAmountWithoutCharge = parseFloat($("#totalAmountWithoutChargeCost").text());

            var totalWithShipmentCost = shipmentCost + totalAmountWithoutCharge;

            var userCredit = parseFloat($("#userCreditSpan").text());
            if (isNaN(userCredit) == true) {
                userCredit = 0;
            }

            var couponValue = parseFloat($("#couponValueSpan").text());
            if (isNaN(couponValue) == true) {
                couponValue = 0;
                var finalTotal = totalWithShipmentCost - userCredit - couponValue;
                $("#totalAmountWithChargeCost").text(finalTotal.toFixed(2));
            } else if (couponValue != '') {
                $('#applyCoupon').click();
            } else {
                couponValue = 0;
                var finalTotal = totalWithShipmentCost - userCredit - couponValue;
                $("#totalAmountWithChargeCost").text(finalTotal.toFixed(2));
            }



        },

        error: function(data) {

            // console.log(data);

        }

    });

}


jQuery(document).ready(function() {

    jQuery('.addToFavourites').click(function() {

        var productId = $(this).attr('lang');
        $.ajax({

            url: main_url + "/product/add-to-favourites/" + productId,
            method: 'get',
            data: {},
            dataType: "json",
            cache: false,
            success: function(data) {
                /*$('#alertModal .modal-body').html(data['msg']);
                $('#alertModal').modal('show');*/

                if (data['success'] == true) {
                    //setTimeout(function() {$('#alertModal').modal('hide');}, 2000);
                    setTimeout(function() {
                        $(".box-msg").show(150);
                        $(".box-msg").html(data['msg']);
                        $('a[lang=' + productId + '] i').removeClass();
                        $('a[lang=' + productId + '] i').addClass('fas fa-heart text-danger');

                        $(".box-msg-overlay").fadeIn(100);
                    }, 500);
                    setTimeout(function() {
                        $(".box-msg").hide(150);
                        $(".box-msg-overlay").fadeOut(150);
                    }, 2000);

                } else {
                    //$("#addToCartAlertSpan").html(data['msg']);

                    setTimeout(function() {
                        $(".box-msg").show(150);
                        $(".box-msg").html(data['msg']);

                        $(".box-msg-overlay").fadeIn(100);
                    }, 500);

                    setTimeout(function() {
                        $(".box-msg").hide(150);
                        $(".box-msg-overlay").fadeOut(150);
                    }, 2000);
                }
            },
            error: function(data) {
                // console.log(data);
            }

        });

    });
});

jQuery(document).ready(function() {



    jQuery('#shipingAdrsCountrySelect').change(function() {

        if (jQuery("#shipingAdrsCity").length) //check if the dropdown to be filled exists

        {

            $("#shipingAdrsCity option").remove();



            $.ajax({

                url: main_url + "/city/get/" + jQuery('#shipingAdrsCountrySelect').val(),

                method: 'get',

                data: {},

                dataType: "json",

                cache: false,

                success: function(data) {

                    //alert(jQuery('#productDepId').val())

                    // + ' : '  + item.the_url 15/08/2015

                    /*$("#shipingAdrsCity").append(

                        $("<option></option>")

                            .text('...')

                            .val('')

                    );*/

                    $.each(data, function(i, item) {



                        $("#shipingAdrsCity").append(

                            $("<option></option>")

                            .text(item.titleEn + ' - ' + item.title)

                            .val(item.id + ',' + item.titleEn)

                        );



                    });

                    $("#shipingAdrsCity").trigger("chosen:updated");



                },

                error: function(data) {

                    // console.log(data);

                }

            });



        }

    });

});



jQuery(document).ready(function() {



    jQuery('#productId').change(function() {

        if (jQuery("#colourId").length) //check if the dropdown to be filled exists

        {

            $("#colourId option").remove();



            $.ajax({

                url: admin_url + "/colour/get/" + jQuery('#productId').val(),

                method: 'get',

                data: {},

                dataType: "json",

                cache: false,

                success: function(data) {

                    //alert(jQuery('#productDepId').val())

                    // + ' : '  + item.the_url 15/08/2015

                    $("#colourId").append(

                        $("<option></option>")

                        .text('...')

                        .val('')

                    );

                    $.each(data, function(i, item) {



                        $("#colourId").append(

                            $("<option></option>")

                            .text(item.title)

                            .val(item.id)

                        );



                    });

                    $("#colourId").trigger("chosen:updated");





                },

                error: function(data) {

                    // console.log(data);

                }

            });



        }

    });

});







jQuery(document).ready(function() {



    jQuery('#productId').change(function() {

        if (jQuery("#price").length) //check if the dropdown to be filled exists

        {

            $("#price").val('0');

            $.ajax({

                url: admin_url + "/product/price/get/" + jQuery('#productId').val(),

                method: 'get',

                data: {},

                dataType: "json",

                cache: false,

                success: function(data) {



                    if (data['priceWithDiscount'] != '') {

                        $("#price").val(data['priceWithDiscount']);

                    } else {

                        $("#price").val(data['price']);

                        var price = parseFloat(data['price']);

                        var quantity = parseInt($("#quantity").val());

                        var total = quantity * price;

                        $("#total").val(total);





                    }

                    $("#currency").val(data['currency']);

                },

                error: function(data) {

                    // console.log(data);

                }

            });

        }

    });

});



jQuery(document).ready(function() {



    jQuery('#quantity').keyup(function() {



        if (jQuery("#price").length)

        {

            var quantity = parseInt($(this).val());

            var price = parseFloat($('#price').val());

            //alert(price + ' ' + quantity)

            $('#total').val(quantity * price);

            $('#transaction_amount').val(quantity * price);

        }

    });

});




jQuery(document).ready(function() {


    jQuery('.adsChannelProductStatus').on('change', function() {

        var rowId = $(this).attr('lang');

        var status = $(this).val();

        $.confirm({

            title: "تأكيد",

            text: "هل أنت متأكد ؟",

            confirmButton: "نعم",

            cancelButton: "لا",

            post: false,

            confirm: function() {

                $.ajax({

                    url: main_url + "/ads-channel-products/status/change/" + rowId + "/" + status,

                    method: 'get',

                    data: {},

                    dataType: "json",

                    cache: false,

                    success: function(data) {

                        $('#alertModal .modal-body').html(data['msg']);
                        $('#alertModal').modal('show');

                        if (data['success'] == true) {
                            setTimeout(function() { $('#alertModal').modal('hide'); }, 1000);

                        }

                    },

                    error: function(aa) {
                        // console.log(data);
                    }

                });

            },

            cancel: function() {

            }

        });

    });


});









jQuery(document).ready(function() {



    jQuery('.orderAssignedTo').on('change', function() {


        if ($(this).val() == '') { return false; }

        $.ajax({

            url: admin_url + "/order/assign/" + $(this).attr('lang') + "/" + $(this).val(),

            method: 'get',

            data: {},

            dataType: "json",

            cache: false,

            success: function(data) {



                $('#orderGeneralModal .modal-body').html(data['msg']);

                $('#orderGeneralModal').modal('show');

            },

            error: function(data) {

                // console.log(data);

            }

        });

    });

});







jQuery(document).ready(function() {



    jQuery('.add-to-cart-product-details').click(function() {

        //alert('k')

        //waitingMsg();

        //alert( $(this).attr('id'));

        var productId = jQuery(this).attr('id');

        var colour = jQuery('#colour').val();

        var weight = jQuery('#weight').val();

        var theSize = jQuery('#theSize').val();

        //var quan    = jQuery('#quan').val();

        //var version = jQuery('#version').val();

        var productQuantity = jQuery('#productQuantity').val();
        var lang = jQuery('#lang').val();


        //alert(jQuery('#_token').val())

        // , 'quan':quan, 'version':version

        jQuery.ajax({



            url: main_url + "/shopping-cart/add",

            method: 'post',

            data: { '_token': jQuery('#_token').val(), 'productId': productId, 'colour': colour, 'weight': weight, 'theSize': theSize, 'productQuantity': productQuantity },

            //data: jQuery(this).attr("id"),

            cache: false,

            success: function(data) {

                if (data['success'] == true)

                {

                    /*jQuery('#alertModal .modal-body').html(data['msg']);

                    jQuery('#alertModal').modal('show');*/

                    //alert(data['msg']);

                    /*$('#cartModal').on('hidden.bs.modal', function () {

                     location.reload();

                     })*/

                    jQuery('.noOrdersFound').remove();

                    jQuery('#cartItem' + productId).remove();

                    var prdctRow = '<div class="top-cart-item clearfix" id="cartItem' + productId + '">' +
                        '<div class="top-cart-item-image">' +
                        "<a href='" + main_url + "/product/" + productId + "'>" +
                        "<img style='object-fit:contain;' src='" + main_url + "/uploads/products/" + data['info']['photo'] + "' />" +
                        "</a>" +
                        "</div>" +

                        '<div class="top-cart-item-desc">' +
                        "<a href='" + main_url + "/product/" + productId + "'>" +
                        data['info']['title' + lang] +
                        "</a>";

                    if (data['info']['finalAfterDiscountCheck'] == data['info']['price']) {
                        prdctRow += "<span class='top-cart-item-price finalPrice' id='finalPrice" + data['info']['itemKey'] + "'> " + data['info']['price'] + " " + data['info']['currencyName'] + "</span><br/>";

                    } else {
                        prdctRow += "<span class='top-cart-item-price finalPrice' id='finalPrice" + data['info']['itemKey'] + "'><del class='text-danger'> " + data['info']['price'] + " </del> " + (data['info']['finalAfterDiscountCheck']) + " " + data['info']['currencyName'] + "</span><br/>";

                    }
                    prdctRow += "<span class='text-success' id='quantity" + data['info']['itemKey'] + "'>" + data['info']['quantityTitle'] + " : " +
                        data['info']['quantity'] +
                        "</span>" +
                        '<span class="top-cart-item-del">' +
                        "<button type='button' onclick='removeShcItem(" + data['info']['itemKey'] + ")' id='k" + data['info']['itemKey'] + "' class='button button-border button-small button-red'>" +
                        '<i class="icon fas fa-trash-alt m-0"></i>' +
                        '</button>' +
                        '</span>' +
                        '</div>' +
                        "</div>";

                    jQuery('#shoppingCartItems').append(prdctRow);


                    var total = parseFloat($('#shoppingCartTotalSpan').text());

                    total = total + data['info']['finalPrice'];

                    $('#shoppingCartTotalSpan').text(total.toFixed(2));



                    // update cart count.

                    //var cartCount = parseFloat($('.cart-count').text()) ;

                    //alert(data['info']['quantity'])

                    //var vv = parseFloat(cartCount) + parseFloat(productQuantity);

                    $('.cart-count').text(data['info']['cartItemAfterCheckQty']);



                } else

                {
                    $(".addToCart-msg").show(150);
                    $(".addToCart-msg span").html(data['msg']);
                    setTimeout(function() {
                        $(".addToCart-msg").hide(150);
                        $(".addToCart-msg-overlay").fadeOut(150);
                    }, 2000);
                    //$('#cartModal .modal-body').html(data['msg']);

                    //$('#cartModal').modal('show');

                }







            }



        });



        return false;



    });

});





jQuery(document).ready(function() {



    jQuery('.add-to-cart-advertiser-panel').click(function() {

        var elmnt = $(this).attr('lang');
        var lang = jQuery('#lang').val();
        var productId = jQuery('#' + elmnt + 'Select').val();

        var productQuantity = jQuery('#' + elmnt + 'Quantity').val();

        //alert(productId + ' ' + productQuantity)

        jQuery.ajax({

            url: main_url + "/shopping-cart/add",

            method: 'post',

            data: { '_token': jQuery('#_token').val(), 'productId': productId, 'productQuantity': productQuantity },

            //data: jQuery(this).attr("id"),

            cache: false,



            success: function(data) {



                if (data['success'] == true)

                {



                    jQuery('.noOrdersFound').remove();

                    jQuery('#cartItem' + productId).remove();


                    var prdctRow = '<div class="top-cart-item clearfix" id="cartItem' + productId + '">' +
                        '<div class="top-cart-item-image">' +
                        "<a href='" + main_url + "/product/" + productId + "'>" +
                        "<img style='object-fit:contain;' src='" + main_url + "/uploads/products/" + data['info']['photo'] + "' />" +
                        "</a>" +
                        "</div>" +

                        '<div class="top-cart-item-desc">' +
                        "<a href='" + main_url + "/product/" + productId + "'>" +
                        data['info']['title' + lang] +
                        "</a>";

                    if (data['info']['finalAfterDiscountCheck'] == data['info']['price']) {
                        prdctRow += "<span class='top-cart-item-price finalPrice' id='finalPrice" + data['info']['itemKey'] + "'> " + data['info']['price'] + " " + data['info']['currencyName'] + "</span><br/>";

                    } else {
                        prdctRow += "<span class='top-cart-item-price finalPrice' id='finalPrice" + data['info']['itemKey'] + "'><del class='text-danger'> " + data['info']['price'] + " </del> " + (data['info']['finalAfterDiscountCheck']) + " " + data['info']['currencyName'] + "</span><br/>";

                    }
                    prdctRow += "<span class='text-success' id='quantity" + data['info']['itemKey'] + "'>" + data['info']['quantityTitle'] + " : " +
                        data['info']['quantity'] +
                        "</span>" +
                        '<span class="top-cart-item-del">' +
                        "<button type='button' onclick='removeShcItem(" + data['info']['itemKey'] + ")' id='k" + data['info']['itemKey'] + "' class='button button-border button-small button-red'>" +
                        '<i class="icon fas fa-trash-alt m-0"></i>' +
                        '</button>' +
                        '</span>' +
                        '</div>' +
                        "</div>";

                    jQuery('#shoppingCartItems').append(prdctRow);


                    var total = parseFloat($('#shoppingCartTotalSpan').text());

                    total = total + data['info']['finalPrice'];

                    $('#shoppingCartTotalSpan').text(total.toFixed(2));



                    // update cart count.

                    $('.cart-count').text(data['info']['cartItemAfterCheckQty']);



                } else

                {

                    //alert('kk')

                    $('#alertModal .modal-body').html(data['msg']);

                    $('#alertModal').modal('show');

                }







            }



        });



        return false;



    });

});




jQuery(document).ready(function() {



    jQuery('.add-to-cart-easy').click(function() {

        //alert('k')

        //waitingMsg();

        //alert( $(this).attr('id'));

        var productId = jQuery(this).attr('id');

        var colour = 0;

        var weight = 0;

        var theSize = 0;

        //var quan    = jQuery('#quan').val();

        //var version = jQuery('#version').val();

        var productQuantity = 1;

        var lang = jQuery('#lang').val();

        //alert(jQuery('#_token').val())

        // , 'quan':quan, 'version':version

        jQuery.ajax({

            url: main_url + "/shopping-cart/add",
            method: 'get',
            data: { 'productId': productId, 'colour': colour, 'weight': weight, 'theSize': theSize, 'productQuantity': productQuantity },
            //data: jQuery(this).attr("id"),

            cache: false,
            success: function(data) {

                if (data['success'] == true) {

                    jQuery('.noOrdersFound').remove();

                    jQuery('#cartItem' + productId).remove();



                    var prdctRow = '<div class="top-cart-item clearfix" id="cartItem' + productId + '">' +
                        '<div class="top-cart-item-image">' +
                        "<a href='" + main_url + "/product/" + productId + "'>" +
                        "<img style='object-fit:contain;' src='" + main_url + "/uploads/products/" + data['info']['photo'] + "' />" +
                        "</a>" +
                        "</div>" +

                        '<div class="top-cart-item-desc">' +
                        "<a href='" + main_url + "/product/" + productId + "'>" +
                        data['info']['title' + lang] +
                        "</a>";

                    if (data['info']['finalAfterDiscountCheck'] == data['info']['price']) {
                        prdctRow += "<span class='top-cart-item-price finalPrice' id='finalPrice" + data['info']['itemKey'] + "'> " + data['info']['price'] + " " + data['info']['currencyName'] + "</span><br/>";

                    } else {
                        prdctRow += "<span class='top-cart-item-price finalPrice' id='finalPrice" + data['info']['itemKey'] + "'><del class='text-danger'> " + data['info']['price'] + " </del> " + (data['info']['finalAfterDiscountCheck']) + " " + data['info']['currencyName'] + "</span><br/>";

                    }
                    prdctRow += "<span class='text-success' id='quantity" + data['info']['itemKey'] + "'>" + data['info']['quantityTitle'] + " : " +
                        data['info']['quantity'] +
                        "</span>" +
                        '<span class="top-cart-item-del">' +
                        "<button type='button' onclick='removeShcItem(" + data['info']['itemKey'] + ")' id='k" + data['info']['itemKey'] + "' class='button button-border button-small button-red'>" +
                        '<i class="icon fas fa-trash-alt m-0"></i>' +
                        '</button>' +
                        '</span>' +
                        '</div>' +
                        "</div>";

                    jQuery('#shoppingCartItems').append(prdctRow);




                    var total = parseFloat($('#shoppingCartTotalSpan').text());

                    total = total + data['info']['finalPrice'];

                    $('#shoppingCartTotalSpan').text(total.toFixed(2));



                    // update cart count.

                    //var cartCount = parseFloat($('.cart-count').text()) ;

                    //alert(data['info']['quantity'])

                    //var vv = parseFloat(cartCount) + parseFloat(productQuantity);

                    $('.cart-count').text(data['info']['cartItemAfterCheckQty']);

                    $('.addToCart-msg span').html(data['msg']);

                } else

                {

                    $('.addToCart-msg span').html(data['msg']);
                    //$('#alertModal').modal('show');

                    setTimeout(function() {
                        $(".addToCart-msg").show(150);
                        $(".addToCart-msg-overlay").fadeIn(100);
                    }, 500);
                    setTimeout(function() {
                        $(".addToCart-msg").hide(150);
                        $(".addToCart-msg-overlay").fadeOut(150);
                    }, 2000);
                }

                dataLayer.push({ ecommerce: null }); // Clear the previous ecommerce object.
                dataLayer.push({
                    'event': 'addToCart',
                    'ecommerce': {
                        'currencyCode': data['info']['currency'],
                        'add': { // 'add' actionFieldObject measures.
                            'products': [{ //  adding a product to a shopping cart.
                                'name': data['info']['titleAr'],
                                'id': productId,
                                'price': (data['info']['finalAfterDiscountCheck'] == data['info']['price']) ? data['info']['price'] : data['info']['finalAfterDiscountCheck'],
                                'brand': data['info']['brand'],
                                'category': data['info']['dep'],
                                'variant': '',
                                'quantity': 1
                            }]
                        }
                    }
                });

                ga('ecommerce:send');

            }

        });

        return false;

    });

});


jQuery(document).ready(function() {

    jQuery('.add-package-to-cart').click(function() {

        $(".addToCart-msg span").html("جاري التحميل");
        $(".addToCart-msg").show(150);
        $(".addToCart-msg-overlay").fadeIn(100);

        var productId = jQuery(this).attr('id');
        //alert(productId)
        var packageTotalWeight = jQuery('#packageTotalWeight' + productId).val();
        var priceBeforeDiscountTotal = jQuery('#priceBeforeDiscountTotal' + productId).val();
        var priceAfterDiscountTotal = jQuery('#priceAfterDiscountTotal' + productId).val();
        var lang = jQuery('#lang').val();

        var productQuantity = 1;

        jQuery.ajax({

            url: main_url + "/shopping-cart-package/add",
            method: 'get',
            data: {
                'productId': productId,
                'packageTotalWeight': packageTotalWeight,
                'priceBeforeDiscountTotal': priceBeforeDiscountTotal,
                'priceAfterDiscountTotal': priceAfterDiscountTotal,
                'productQuantity': productQuantity,
                '_token': jQuery('#_token').val(),
            },
            cache: false,

            success: function(data) {

                if (data['success'] == true) {

                    $(".addToCart-msg span").html(data['msg']);
                    setTimeout(function() {
                        $(".addToCart-msg").hide(150);
                        $(".addToCart-msg-overlay").fadeOut(150);
                    }, 1500);

                    jQuery('.noOrdersFound').remove();

                    jQuery('#cartItem' + productId).remove();


                    var prdctRow = '<div class="top-cart-item clearfix" id="cartItem' + productId + '">' +
                        '<div class="top-cart-item-image">';
                    if (data['info']['isPackage'] == 0) {
                        prdctRow += "<a href='" + main_url + "/product/" + productId + "'>" +
                            "<img style='object-fit:contain;' src='" + main_url + "/uploads/products/" + data['info']['photo'] + "' />";
                    } else {
                        prdctRow += "<a href='" + main_url + "/packages/?package=" + productId + "'>" +
                            "<img style='object-fit:contain;' src='" + main_url + "/uploads/products/" + data['info']['photo'] + "' />";
                    }

                    prdctRow += "</a>" +
                        "</div>" +
                        '<div class="top-cart-item-desc">';
                    if (data['info']['isPackage'] == 0) {
                        prdctRow += "<a href='" + main_url + "/product/" + productId + "'>" +
                            data['info']['title' + lang] +
                            "</a>";
                    } else {
                        prdctRow += "<a href='" + main_url + "/packages?package=" + productId + "'>" +
                            data['info']['title' + lang] +
                            "</a>";
                    }

                    if (data['info']['finalAfterDiscountCheck'] == data['info']['price']) {
                        prdctRow += "<span class='top-cart-item-price finalPrice' id='finalPrice" + data['info']['itemKey'] + "'> " + data['info']['price'] + " " + data['info']['currencyName'] + "</span><br/>";

                    } else {
                        prdctRow += "<span class='top-cart-item-price finalPrice' id='finalPrice" + data['info']['itemKey'] + "'><del class='text-danger'> " + data['info']['price'] + " </del> " + (data['info']['finalAfterDiscountCheck']) + " " + data['info']['currencyName'] + "</span><br/>";

                    }
                    prdctRow += "<span class='text-success' id='quantity" + data['info']['itemKey'] + "'>" + data['info']['quantityTitle'] + " : " +
                        data['info']['quantity'] +
                        "</span>" +
                        '<span class="top-cart-item-del">' +
                        "<button type='button' onclick='removeShcItem(" + data['info']['itemKey'] + ")' id='k" + data['info']['itemKey'] + "' class='button button-border button-small button-red'>" +
                        '<i class="icon fas fa-trash-alt m-0"></i>' +
                        '</button>' +
                        '</span>' +
                        '</div>' +
                        "</div>";

                    jQuery('#shoppingCartItems').append(prdctRow);

                    var total = parseFloat($('#shoppingCartTotalSpan').text());

                    total = total + data['info']['finalPrice'];

                    $('#shoppingCartTotalSpan').text(total.toFixed(2));



                    // update cart count.

                    //var cartCount = parseFloat($('.cart-count').text()) ;

                    //alert(data['info']['quantity'])

                    //var vv = parseFloat(cartCount) + parseFloat(productQuantity);
                    $('.cart-count').show();
                    $('.cart-count').text(data['info']['cartItemAfterCheckQty']);



                } else {

                    $(".addToCart-msg span").html(data['msg']);
                    $(".addToCart-msg").show(150);

                    setTimeout(function() {
                        $(".addToCart-msg").hide(150);
                        $(".addToCart-msg-overlay").fadeOut(150);
                    }, 2000);
                    //$('#cartModal .modal-body').html(data['msg']);

                    //$('#cartModal').modal('show');

                }

            }

        });

        return false;

    });

});





function removeShcItem(itemKey) {

    //alert( itemKey);
    $("#k" + itemKey).hide();
    jQuery.ajax({

        url: main_url + "/shopping-cart/remove/" + itemKey,
        method: 'get',
        data: {},
        cache: false,
        success: function(data) {

            if (data['success'] == true) {

                var total = parseFloat($('#shoppingCartTotalSpan').text());

                $('#finalPrice' + itemKey + ' del').remove();
                var finalPrice = parseFloat($('#finalPrice' + itemKey).text());

                var quantity = parseFloat($('#quantity' + itemKey).text().replace(/[^0-9]/gi, '')); // Replace everything that is not a number with nothing

                var subTotal = finalPrice * quantity;

                //alert(total + ':' + finalPrice+ ':' + quantity)

                total = total - subTotal;

                $('#shoppingCartTotalSpan').text(total.toFixed(2));

                // update cart count.

                $('.cart-count').text(data['cartItemAfterCheckQty']);

                jQuery('#k' + itemKey).parents(".top-cart-item").remove();


                // Measure the removal of a product from a shopping cart.
                dataLayer.push({ ecommerce: null }); // Clear the previous ecommerce object.
                dataLayer.push({
                    'event': 'removeFromCart',
                    'ecommerce': {
                        'remove': { // 'remove' actionFieldObject measures.
                            'products': [{ //  removing a product to a shopping cart.
                                'name': data['productInfo']['titleAr'],
                                'id': data['productInfo']['productId'],
                                'price': data['productInfo']['finalPrice'],
                                'brand': data['productInfo']['brand'],
                                'category': data['productInfo']['dep'],
                                'variant': '',
                                'quantity': data['productInfo']['quantity']
                            }]
                        }
                    }
                });
            }
        }
    });
    return false;
}


function shoppingCartUpdate(itemKey, quantity) {

    //alert( itemKey);

    jQuery.ajax({

        url: main_url + "/shopping-cart/update/" + itemKey + "/" + quantity,
        method: 'get',
        data: {},
        cache: false,
        success: function(data) {

        }
    });
    return false;
}




jQuery(document).ready(function() {



    jQuery('#newsLetter').click(function() {



        //waitingMsg();



        $.ajax({



            url: main_url + "/newsletter/create",

            method: 'post',

            data: jQuery(this).parents("form").serializeArray(),

            cache: false,



            success: function(data) {



                $('#alertModal .modal-body').html(data['msg']);

                $('#alertModal').modal('show');



            }



        });



        // return false;



    });

});





jQuery(document).ready(function() {



    jQuery('.comingSoon').click(function() {



        $('#alertModal .modal-body').html('قريبا');

        $('#alertModal').modal('show');



    });



});



jQuery(document).ready(function() {



    jQuery('#storeBankId').click(function() {



        $.ajax({

            url: main_url + "/bank-account/get/" + jQuery(this).val(),

            method: 'get',

            data: {},

            dataType: "json",

            cache: false,

            success: function(data) {

                //alert(data.accountNumber)

                //alert(jQuery('#productDepId').val())

                // + ' : '  + item.the_url 15/08/2015

                //$("#storeAccountNumberSpan").text(data.accountNumber);

                $("#storeAccountNumber").val(data.accountNumber);

                /*$.each(data, function (i, item) {



                    $("#quantity").append(

                        $("<option></option>")

                            .text(item.title)

                            .val(item.title)

                    );



                });*/



            },

            error: function(data) {

                // console.log(data);

            }

        });



    });



});





function checkIfPhoneExists(phone) {


    $.ajax({

        url: main_url + "/check-if-phone-exists/" + phone,
        method: 'get',
        data: {},
        //dataType: "json",
        cache: false,
        success: function(data) {
            //alert(data)
            if (data == 1) {
                jQuery('#goToOrderPageModal').modal('show');
            }
            //$("#storeAccountNumber").val(data.accountNumber);

        },

        error: function(data) {
            // console.log(data);
        }

    });

}




jQuery(document).ready(function() {



    jQuery('select[name=storeBankId]').change(function() {

        var id = $(this).attr('lang');

        var storeBankId = $('#storeBankId' + id).val();

        var storeAccountNumber = $("#storeAccountNumber" + id);



        $.ajax({

            url: main_url + "/bank-account/get/" + storeBankId,

            method: 'get',

            data: {},

            dataType: "json",

            cache: false,

            success: function(data) {

                storeAccountNumber.val(data.accountNumber);

            },

            error: function(data) {

                // console.log(data);

            }

        });



    });



});





jQuery(document).ready(function() {



    jQuery('#productId').change(function() {

        if (jQuery("#productTitle").length)

        {

            jQuery("#productTitle").val($("#productId option:selected").text());

        }

    });

});




jQuery(document).ready(function() {


    //$('#shipmentAdrsContainerDiv div.form-group').filter(':last').click() ;



    // $('div.flag-container').prepend('<div id="sCouli"><input type="text" placeholder="البحث عن الدولة"></div>') ;

    $(document).on("#sCouli", "click", function(e) {
        e.preventDefault();
        return false;
    });

    $(document).on("click", "#sCouli input", function(e) {
        e.preventDefault();
        setTimeout(function() {
            $('#country-listbox').removeClass('hide');
            $('#country-listbox').attr('aria-expanded', true);
        }, 120);
        return false;
    });

    $(document).on("keyup", "#sCouli input", function(e) {
        console.log($(this).val());
        return false;
    });

    window.addEventListener("open:countrydropdown", function() {
        $('#sCouli').show(1).find('input').focus();
    });

    window.addEventListener("close:countrydropdown", function(e) {
        e.preventDefault();

        return false;
    });
    window.addEventListener("countrychange", function() {
        $('#country-listbox').addClass('hide');
        $('#country-listbox').attr('aria-expanded', false);
        $('#sCouli').hide(1).find('input');
    });


});