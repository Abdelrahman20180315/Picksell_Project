$(document).ready(function(){
    var all_items = [];
    $('.inp_select_all_items_heart').click(function () {

        if ($(this).is(":checked")) {

            $('input.inp_check_item_heart').prop('checked', true);

            $('input.inp_check_item_heart:checked').each(function () {

                // save item in array
                all_items.push($(this).attr('data'));
            });

            $('#items_remove_id').val(all_items);
        }else {

            $('input.inp_check_item_heart').prop('checked', false);
            all_items = [];
            $('#items_remove_id').val(all_items);
        }
    });
});