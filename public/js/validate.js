// validate contact_form form
$(function() {
    $('#contact_form').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
			phone: {
                required: true,
            },
            message: {
                required: true
            },
            answer: {
                required: true,
                answercheck: true
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "your name must consist of at least 2 characters"
            },
            email: {
                required: "Please enter a valid Email Addess"
            },
			phone: {
                required: "Please enter a valid Phone Number"
            },
            message: {
                required: "Please enter a message.",
            },
            answer: {
                required: "sorry, wrong answer!"
            }
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"process.php",
                success: function() {
                    $('#contact_form :input').attr('disabled', 'disabled');
                    $('#contact_form').fadeTo( "slow", 0.15, function() {
                        $(this).find(':input').attr('disabled', 'disabled');
                        $(this).find('label').css('cursor','default');
                        $('#success').fadeIn();
                    });
                },
                error: function() {
                    $('#contact_form').fadeTo( "slow", 0.15, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });
});