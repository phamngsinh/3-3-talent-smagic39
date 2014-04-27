

jQuery(function($) {

    jQuery('body').on('change', '#JobEmployees_email', function() {
        check = false;
        jQuery.post(siteUrl + '/index.php?r=page/CheckEmailRegister', {email: $('#JobEmployees_email').val()}, function(data) {
            if (data == 'false') {
                check = true;
            }
        });
        if (!check) {
            jQuery.validator.addMethod("EmailValiate", function(value, element) {
                return !check;
            }, 'Email already registed');
        }
    });

    $('#register-cv-form').validate(
            {
                rules: {
                    'JobEmployees[first_name]': {
                        required: true
                    },
                    'JobEmployees[last_name]': {
                        required: true
                    },
                    'JobEmployees[mobile]': {
                        required: true,
                    },
                    'JobResumes[file_id]': {
                        required: true
                    },
                    'JobEmployees[email]': {
                        required: true,
                        email: true,
                        EmailValiate: true,
                    }
                },
                messages: {
                    'JobEmployees[first_name]': 'First name cannot be blank',
                    'JobEmployees[last_name]': 'Last name cannot be blank.',
                    'JobEmployees[mobile]': 'Mobile cannot be blank.',
                    'JobResumes[file_id]': 'Resume cannot be blank.',
                    'JobEmployees[email]': {
                        required: 'Email address cannot be blank.',
                        email: 'Please enter a valid email address.',
                    }
                },
            });
});