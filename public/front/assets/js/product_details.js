$(document).ready(function () {

    $('.box_details_count .bi-plus').click(function () {
        var real_count = $('.box_details_count input').val();
        $('.box_details_count input').val(++real_count);
    });

    $('.box_details_count .bi-dash').click(function () {
        var real_count = $('.box_details_count input').val();
        if (real_count > 1) {
            $('.box_details_count input').val(--real_count);
        }

    });

    // start owl slider
    $(".owl_details_small").owlCarousel({
        center: true,
        loop: true,
        margin: 10,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 3,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 3,
            },
        },
    });

    // Go to the next item
    $(".customNextBtn0").click(function () {
        $(".owl_details_small").trigger("next.owl.carousel");
    });
    // Go to the previous item
    $(".customPrevBtn0").click(function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        $(".owl_details_small").trigger("prev.owl.carousel", [300]);
    });


    $('.owl_details_small .item .card').click(function () {

        $(this).closest('.owl_details_small').find('.item .card').removeClass('active');
        $(this).addClass('active');
    });


    // for best seller
    $(".owl-best_seller").owlCarousel({
        center: true,
        loop: true,
        margin: 10,
        dots: true,
        nav: true,
        responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 4,
        },
        1000: {
            items: 4,
        },
        },
    });

    // Go to the next item
    $(".customNextBtn0").click(function () {
        $(".owl-best_seller").trigger("next.owl.carousel");
    });
    // Go to the previous item
    $(".customPrevBtn0").click(function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        $(".owl-best_seller").trigger("prev.owl.carousel", [300]);
    });



});
