jQuery.noConflict();
(function ($) {
    $(document).ready(function () {
        $('#login-form input').on('input', function () {
            $('#js-login-error').addClass('d-none');
        });
        // login form
        $('#login-form').submit(function (e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $('#loading').removeClass('d-none');
            $.ajax({
                url: '/login',
                method: 'POST',
                data: formData,
                success: function (response) {
                    $('#loading').addClass('d-none');
                    window.location.href = '/';
                },
                error: function (error) {
                    $('#loading').addClass('d-none');
                    $('#js-login-error').removeClass('d-none');
                    $('#js-login-error').html('*' + Object.values(error.responseJSON.errors)[0][0]);
                },
            });
        });

        $('#register-form input').on('input', function () {
            $('#js-register-error').addClass('d-none');
        });
        // register form
        $('#register-form').submit(function (e) {
            e.preventDefault();
            var formData = $(this).serialize();

            $('#loading').removeClass('d-none');
            $.ajax({
                url: '/register',
                method: 'POST',
                data: formData,
                success: function (response) {
                    window.location.href = '/';
                    $('#loading').addClass('d-none');
                },
                error: function (error) {
                    $('#loading').addClass('d-none');
                    $('#js-register-error').removeClass('d-none');
                    $('#js-register-error').html('*' + Object.values(error.responseJSON.errors)[0][0]);
                },
            });
        });

        // show password toggle
        $(document).on('click', '[title="Show password"]', function (e) {
            e.preventDefault();
            const passwordInput = $(this).closest('.input-group').find('input');
            const type = passwordInput.attr('type') === 'password' ? 'text' : 'password';
            passwordInput.attr('type', type);
        });
    });
})(jQuery);
