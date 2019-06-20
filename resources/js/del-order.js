$('.del-order').click(function() {
    if (confirm('You are sure?')) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var orderId = $(this).data('order-id');
        var url = '/admin/orders/' + orderId;

        $.ajax({
            url: url,
            type: 'DELETE',
            success: function(result) {
                if (result.status) {
                    $('.row_' + orderId).remove();
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
