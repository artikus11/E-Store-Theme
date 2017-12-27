jQuery(function ($) {
    $('.search_form input[name="s"]').on('keyup', function () {
        var search = $('.search_form input[name="s"]').val();
        if (search.length < 4) {
            return false;
        }
        var data = {
            s:search,
            action: 'search_action',
            nonce : search_form.nonce

        };
        $.ajax({
            url: search_form.url,
            data :data,
            type:'POST',
            dataType:'json',
            beforeSend:function(xhr){
                $('.search-result-close').text('Ищем...');
            },
            success:function(data){
                $('.search-result-close').text('Очистить');
                $('.search_form').css('overflow', 'visible');

                $('.search_form .search-result').html(data.out);
                $('.search-result').addClass('search-result-over');



            }
        });

    });

    $('.search-result-close').click(function () {
        $('.search-result').removeClass('search-result-over');
        $('.search-result').empty();
        $('.search_form input[name="s"]').val('');
    })
});