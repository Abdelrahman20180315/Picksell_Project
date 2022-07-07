
$(document).ready(function () {
    $('.all_orders').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
        $('#all_orders').removeClass('d-none').siblings().addClass('d-none');
    });

    $('.current_orders').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
        $('#current_orders').removeClass('d-none').siblings().addClass('d-none');

    });

    $('.Previous_orders').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
        $('#Previous_orders').removeClass('d-none').siblings().addClass('d-none');

    });

    $('.Exchanges_Returns').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
        $('#Exchanges_Returns').removeClass('d-none').siblings().addClass('d-none');

    });

    // ==========================================

    $('.Not_completely_satisfied').click(function () {
        $('#select_rate').removeClass('d-none');
    });

    $('.very_satisfied').click(function () {
        $('#select_rate').removeClass('d-none');
    });

    $('.manage_modal_rate img').click(function () {
        $('.manage_modal_rate img').removeClass('img_active');
        $(this).addClass('img_active');
    });


});