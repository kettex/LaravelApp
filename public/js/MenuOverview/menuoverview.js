function orderMenus(){
    // get all input fields of this site
    // id of input field == menuId
    // value of input field == count of orders of this menu
    var inputs = $('input');
    var data = [];

    for(var i = 0; i < inputs.length; i++){
        try{
            var input = $(inputs[i]);
            data.push({
                id: input.attr('id'),
                orderCount: $.isNumeric(input.val()) ? parseInt(input.val()) : 0
            });
        } catch (err){

        }
    }

    $.ajax({
        url: '/menuoverview/orderMenus',
        data: JSON.stringify(data),
        contentType: 'application/json',
        accept: 'application/json',
        type: 'POST'
    }).done(function(){
        // ToDo Notification of booked menus
    }).fail(function(){
        // ToDo Notification of failed booking. Please check if some menus where booked
    })
}