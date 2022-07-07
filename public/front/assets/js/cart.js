$(document).ready(function () {
    var all_items = [];
    var Products_price = 0;
    var your_cart_profit = 0;
    var btn_order_cart = $('.btn_order_cart');

    

    function btn_cart() {
        if (all_items.length > 0) {

            btn_order_cart.removeClass('opacity_5');
            $('#remove_all_selected').attr('data-bs-toggle','modal');

        } else {
            btn_order_cart.addClass('opacity_5');
        }

        // replace 3 to an count of cart products
        if (all_items.length == 3) {
            $('input.inp_select_all_items').prop('checked', true);

        }

        if (all_items.length < 3) {
            $('input.inp_select_all_items').prop('checked', false);
        }

        if (all_items.length == 0) {
            $('#remove_all_selected').removeAttr('data-bs-toggle');
        }

    }

    $('.remove_item_btn').click(function () {
       
        var id_item = $(this).attr('name');
        $(this).click();

        $('#removeItemModal #id_item_for_cart').val(id_item);
    });

    $('.inp_check_item').click(function () {
        var id_item = $(this).attr('name');

        var index = all_items.indexOf(id_item);
        if (index > -1) { // only splice array when item is found
            all_items.splice(index, 1); // 2nd parameter means remove one item only

            var this_item_price = parseInt($(this).closest('.row_item_cart').find('.item_price_input').val());
            var this_item_count = parseInt($(this).closest('.row_item_cart').find('.box_for_cart_count div input').val());

            var this_item_total_price = this_item_price * this_item_count;

            Products_price = parseInt(Products_price) - this_item_total_price;
            $('.Products_price').text(Products_price);

            // profit decrease
            var item_count_el = parseInt($(this).closest('.row_item_cart').find('.profit_count').text());

            your_cart_profit = your_cart_profit - item_count_el;
            $('.your_cart_profit').text(your_cart_profit);



        } else {

            all_items.push(id_item);

            var this_item_price = parseInt($(this).closest('.row_item_cart').find('.item_price_input').val());
            var this_item_count = parseInt($(this).closest('.row_item_cart').find('.box_for_cart_count div input').val());

            var this_item_total_price = this_item_price * this_item_count;

            Products_price = this_item_total_price + parseInt(Products_price);
            $('.Products_price').text(Products_price);

            // profit increase
            var item_count_el = parseInt($(this).closest('.row_item_cart').find('.profit_count').text());

            your_cart_profit = your_cart_profit + item_count_el;
            $('.your_cart_profit').text(your_cart_profit);


        }

        $('.number_selected').text(all_items.length);
        btn_cart();

    });

    $('#remove_all_selected').click(function () {
        
        $('#removeItemModal #id_item_for_cart').val(all_items);
    });


    $('.inp_select_all_items').click(function () {


        if ($(this).is(":checked")) {


            $('input.inp_check_item').prop('checked', true);
            $('#removeItemModal #id_item_for_cart').val(all_items);

            all_items = [];
            Products_price = 0;
            your_cart_profit = 0;

            $('input.inp_check_item:checked').each(function () {

                // save item in array
                all_items.push($(this).attr('name'));

                // set profit cart value
                var all_profit = parseInt($(this).closest('.row_item_cart').find('.profit_count').attr('data'));
                var this_item_count = parseInt($(this).closest('.row_item_cart').find('.box_for_cart_count div input').val());

                your_cart_profit = (all_profit * this_item_count) + your_cart_profit;
                $('.your_cart_profit').text(your_cart_profit);

                // set price to cart
                var this_item_price = parseInt($(this).closest('.row_item_cart').find('.item_price_input').val());
                var this_item_count = parseInt($(this).closest('.row_item_cart').find('.box_for_cart_count div input').val());


                Products_price = parseInt(Products_price) + (this_item_price * this_item_count);
                $('.Products_price').text(Products_price);


            });




        } else {

            $('input.inp_check_item').prop('checked', false);
            all_items = [];

            // make profit cart empty
            your_cart_profit = 0;
            $('.your_cart_profit').text(your_cart_profit);

            // make price cart empty

            Products_price = 0;
            $('.Products_price').text(Products_price);

        }

        // return number of items sellected
        $('.number_selected').text(all_items.length);

        btn_cart();
    });

    // for price input validation
    $(".item_price_input").keyup(function () {
        var inp_val = $(this).val();
        var inp_val_main = $(this).attr('name');

        if (inp_val < inp_val_main) {

            $(this).parent().find('.price_error_msg').removeClass('d-none');

        } else {
            $(this).parent().find('.price_error_msg').addClass('d-none');

        }

    });

    // for item counter
    $('.box_for_cart_count .count_increase').click(function () {
        var value_count = $(this).parent().find('div input').val();
        $(this).parent().find('div input').val(++value_count);

        var item_count_el = $(this).closest('.row_item_cart').find('.profit_count');
        var item_count = item_count_el.attr('data');

        var new_count = value_count * item_count;
        item_count_el.text(new_count);

        if ($(this).closest('.row_item_cart').find('input.inp_check_item').is(":checked")) {
            var this_item_price = parseInt($(this).closest('.row_item_cart').find('.item_price_input').val());

            var this_item_total_price = this_item_price * 1;

            Products_price = this_item_total_price + parseInt(Products_price);
            $('.Products_price').text(Products_price);


            // profit increase
            var item_count_el = parseInt($(this).closest('.row_item_cart').find('.profit_count').attr('data'));

            your_cart_profit = your_cart_profit + item_count_el;
            $('.your_cart_profit').text(your_cart_profit);


        }


    });

    $('.box_for_cart_count .count_decrease').click(function () {
        var value_count = $(this).parent().find('div input').val();
        if (value_count > 1) {
            $(this).parent().find('div input').val(--value_count)


            var item_count_el = $(this).closest('.row_item_cart').find('.profit_count');
            var item_count = item_count_el.attr('data');

            var new_count = value_count * item_count;
            item_count_el.text(new_count);


            if ($(this).closest('.row_item_cart').find('input.inp_check_item').is(":checked")) {
                var this_item_price = parseInt($(this).closest('.row_item_cart').find('.item_price_input').val());

                var this_item_total_price = this_item_price * 1;

                Products_price = parseInt(Products_price) - this_item_total_price;
                $('.Products_price').text(Products_price);

                // profit decrease
                var item_count_el = parseInt($(this).closest('.row_item_cart').find('.profit_count').attr('data'));

                your_cart_profit = your_cart_profit - item_count_el;
                $('.your_cart_profit').text(your_cart_profit);

            }


        }

    });


    $(".box_for_cart_count div input").blur(function () {
        var inp_val = $(this).val();
        var inp_val_main = 1;

        if (inp_val < inp_val_main) {
            $(this).val(inp_val_main);
        }

        if (inp_val.length > 2) {
            $(this).val(inp_val_main);
        }

    });


});