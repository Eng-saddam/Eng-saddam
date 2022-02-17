// JavaScript Document

$(document).ready(function() {

    var cart = $('#top-cart #top-cart-trigger'),
        cartCountCont = cart.find('span'),
        cartCount = parseInt(cartCountCont.text(), 10),
        addToCart = $('.product .addToCartAnimation,.spc-offer .addToCartAnimation');

    addToCart.on('click', function(evt) {
        evt.preventDefault();
        evt.stopPropagation();

        $(".addToCart-msg").show(150);
        $(".addToCart-msg-overlay").fadeIn(100);
        $('#imgcheckAddToCart').attr('src', $('#srcImageCheckAddToCart').val());

        cartCount += 1;
        $('.cart-count').show();

        /*var el = $(this),
            item = el.parent().parent(),
            img = item.find('.product-image img'),
            imgSrc = img.attr('src'),
            cartTopOffset = cart.offset().top,
            cartLeftOffset = cart.offset().left;
        var flyingImg = $('<img class="b-flying-img">');
        if (imgSrc == undefined) {
            imgSrc = $('.product-image li.active img:first').attr('src');
        }
        //alert(imgSrc)
        flyingImg.attr('src', imgSrc);
        //flyingImg.css('width', '200').css('height', '200');
        flyingImg.css({ "width": "200", "height": "200", "top": item.offset().top, "left": item.offset().left });

        cartCount += 1;
        $('.cart-count').show();

        flyingImg.animate({
            top: cartTopOffset,
            left: cartLeftOffset,
            width: 50,
            height: 50,
            opacity: 0.1
        }, 2200, function() {
            flyingImg.remove();
            //cartCountCont.text(cartCount);
        });

        //el.append(flyingImg);
        $("body").append(flyingImg);*/

        setTimeout(function() {
            $(".addToCart-msg").hide(150);
            $(".addToCart-msg-overlay").fadeOut(150);
        }, 2500);
    });








});