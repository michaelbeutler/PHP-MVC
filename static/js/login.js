$(document).ready(function () {

    $('#email').focus();

    $('#email').keypress(function () {
        if (event.which == 13) {
            event.preventDefault();
            $('#password').focus();
        }
    });

    $('#password').keypress(function () {
        if (event.which == 13) {
            event.preventDefault();
            $('#formLogin').submit();
        }
    });


    $('#formLogin').validate({
        rules: {
            email: {
                required: true
            },
            password: {
                required: true
            }
        },
        messages: {
            email: {
                required: ""
            },
            password: {
                required: ""
            }
        }
    });
});