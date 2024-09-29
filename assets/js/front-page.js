// Ajax request to submit contact form
jQuery(document).ready(function($) {
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();

        // Getting the value of email
        let email = $('#email').val();

        /// Validation
        if (!validateEmail(email)) {
            alert("Please enter a valid email address.");
            return;
        }

        // Disabling the button to prevent multiple submissions
        let submitButton = $(this).find('.contact-me-btn');
        submitButton.prop('disabled', true);

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
                $('#contact-form')[0].reset(); // Reset the form after successful submission
            },
            error: function(xhr, status, error) {
                console.error("Error occurred: ", status, error);
                alert("There was an error processing your request. Please try again.");
            },
            complete: function() {
                // Enabling the button again
                submitButton.prop('disabled', false);
            }
        });
    });

    // Function for email validation
    function validateEmail(email) {
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9-]+\.[a-zA-Z]{2,}$/;
        return emailPattern.test(String(email).toLowerCase());
    }
});
