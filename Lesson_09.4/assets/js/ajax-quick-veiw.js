jQuery(document).ready(function ($) {
    $('a.modal-product-link').on('click', function () {
        var productId = $(this).attr('data-product-id');
        console.log(productId);
        var data = {
            id:productId,
            action:'ajax_quick_view',
            nonce: ajax_quick.nonce
        };
        $.ajax({
            url:ajax_quick.url,
            data:data,
            type: 'POST',
            dataType: 'json',
            beforeSend:function(xhr){
               $('#modal-product .modal-body').text('Загрузка');
            },
            success:function(data){
                console.log(data);
                $('#modal-product .modal-content section').html(data.product);
            }
        });
    })
});