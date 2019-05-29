$('.del-product').click(function() {
    if (confirm('You are sure?')) {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var productId = $(this).data('product-id');
        var url = '/products/' + productId;

        $.ajax({
            url: url,
            type: 'DELETE',
            success: function(result) {
                    if (result.status) {
                        $('.row_' + productId).remove();
                    } else {
                        alert(result.msg);
                    }
                },
            error: function() {
                location.reload();
            }
        });
    }       
});
