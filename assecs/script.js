$(document).ready(function () {
    $('.hits_of_product_box').mouseover(function () {
        $(this).find('.see_in_new_page').animate().css('padding','4px 30px');
        $(this).find('.see_in_new_page').animate().css('color','#ffffff');
        $(this).find('.see_in_new_page').animate().css('backgroundColor','#3D0017');
    }).mouseout(function () {
        $(this).find('.see_in_new_page').animate().css('padding','4px 15px');
        $(this).find('.see_in_new_page').animate().css('color','#000000');
        $(this).find('.see_in_new_page').animate().css('backgroundColor','#ffffff');
    })

    $(document).on('click','.call_out', function () {
        $('#call_back').modal('show');
    })

    $(document).on('click','.call_back_btn', function (e) {
        e.preventDefault()

        $.ajax({
            type: "POST",
            url: $('.base_url_hidden').val(),
            data:{
                'name':$('#name').val(),
                'tel':$('#pwd').val(),
            },
            success: function(){
                $('#call_back').modal('hide');
                $('#sucsees_call_back').modal('show');

            }
    });
    })


    $(document).on('click','.one_order_submit', function (e) {
        e.preventDefault()
        console.log($('#kolic').val())
        $.ajax({
            type: "POST",
            url: $('.base_cake_zakaz').val(),
            data: {
              'cake_id': $('.id_cake_zakaz').val(),
              'amount_cake': $('#kolic').val(),
              'cake_weight': $('#kilogram').val(),
              'addres_order': $('.one_order_address').val(),
              'order_tel_number': $('.one_order_number').val(),
            },
            success: function(){
                $('#sucsees_order_cake').modal('show');
            }
        });
    })

// MODAL FOR ADMIN GET ORDER BY ID
    $(document).on('click','.order_id_by_id', function () {
        var result_json ='';
        var html = '';
        var base_url_img = $(document).find('.input_base_url').val()
        $.ajax({
            type: "POST",
            url: $(this).data('action'),
            data: {
                'cake_id': $(this).text(),
            },
            success: function(result){
                // $.each(result,function(index,val){
                //     console.log(JSON.parse(val))
                // });
                $('.modal_cake_by_id_all').empty();
                result_json = JSON.parse(result);
                console.log(result_json)
                html += '<img src='+base_url_img+'uploads/'+result_json.img+'>\n\
                         <p>'+'Name:'+result_json.name+'</p>\n\
                         <p>'+'Price:'+result_json.price+'</p>\n\
                         <p>'+'Weight:'+result_json.kg+'</p>\n\
                         ';
                console.log(base_url_img)
                $(document).find('.modal_cake_by_id_all').append(html)
                $('#get_cake_by_id').modal('show');
            }
        });
    })
})