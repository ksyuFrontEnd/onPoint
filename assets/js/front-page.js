jQuery(document).ready(function($) {
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();
        var email = $('#email').val();

        $.ajax({
            url: myAjax.ajaxUrl,
            type: 'POST',
            data: {
                action: 'save_contact_email',
                email: email,
                nonce: myAjax.nonce
            },
            success: function(response) {
                alert(response.data.message);
            }
        });
    });
});
