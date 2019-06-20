$('.del-size').click(function() {
    if (confirm('You are sure?')) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var sizeId = $(this).data('size-id');
        var url = '/admin/sizes/' + sizeId;

        $.ajax({
            url: url,
            type: 'DELETE',
            success: function(result) {
                if (result.status) {
                    $('.row_' + sizeId).remove();
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
