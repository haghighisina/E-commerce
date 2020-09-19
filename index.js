$(document).ready(function(){

    $("#banner-area .owl-carousel").owlCarousel({
        items:1,
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true
    });

    $("#banner_adds .owl-carousel").owlCarousel({
        items:3,
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true
    });

    $("#top-sales .owl-carousel").owlCarousel({
        loop:true,
        dots: true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    //top sale carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });


    //isotope
    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    //filter items
    $(".button-group").on("click", "button", function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter: filterValue});
    });

    //New Phones
    $("#new-phones .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    //Blogs
    $("#blogs .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            }
        }
    });

    //qty
    let $qty_up   = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");

    //up btn
    $qty_up.click(function (e) {

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        //change Price using Ajax
        $.ajax({url:"template/ajax.php",type: 'post', data: {itemid: $(this).data("id")}, success: function (result) {

                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if ($input.val() >= 1 && $input.val() <= 9){
                    $input.val(function (i, oldval){
                        return ++oldval;
                    });

                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price);

                    $deal_price.text(subtotal.toFixed(2));
                }

        }}); //closing ajax
    });

    //down btn
    $qty_down.click(function (e) {

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        $.ajax({url:"template/ajax.php",type: 'post', data: {itemid: $(this).data("id")}, success: function (result) {

                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if ($input.val() > 1 && $input.val() <= 10){
                    $input.val(function (i, oldval){
                        return --oldval;
                    });

                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);

                    $deal_price.text(subtotal.toFixed(2));
                }


            }}); //closing ajax


    });
});