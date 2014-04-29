/**
 * Created by sinhpn on 4/22/14.
 */
jQuery(function($) {
    jQuery('body').on('change', '#JobEmployees_email', function() {
        check = false;
        jQuery.post(siteUrl + '/index.php?r=page/CheckEmailRegisterJob', {email: $('#JobEmployees_email').val()}, function(data) {
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
    //show and hide
    $('#registration-form #coverNoteType0').click(function(e) {
        $('#registration-form #JobCovers_value').show();
        $('#registration-form #JobCovers_value').addClass('show');

        $('#registration-form #CandidateCoverNote').hide();
        $('#registration-form #CandidateCoverNote').addClass('hiden');
        $('#registration-form #CandidateCoverNote').val('');

    });
    $('#registration-form #coverNoteType1').click(function(e) {
        $('#registration-form #CandidateCoverNote').show();
        $('#registration-form #CandidateCoverNote').addClass('show');


        $('#registration-form  #JobCovers_value').hide();
        $('#registration-form #JobCovers_value').addClass('hiden');
        $('#registration-form #JobCovers_value').val('');

    });

    //validate register form
    $("#registration-form").validate({
        rules: {
            'JobEmployees[first_name]': {
                required: true
            },
            'JobEmployees[last_name]': {
                required: true
            },
            'JobEmployees[email]': {
                required: true,
                email: true,
                EmailValiate: true
            },
            'JobEmployees[mobile]': {
                required: true
            },
            'JobResumes[file_id]': {
                required: true,
                extension: 'doc|docx|pdf|docs'

            },
            'JobCovers[value]': {
                required: true,
                extension: {
                    depends: function(element) {
                        return $(" input[type='radio']:checked #coverNoteType0").val() == '';
                    }
                }
            },
        },
        messages: {
            'JobEmployees[first_name]': 'First name cannot be blank.',
            'JobEmployees[last_name]': 'Last name cannot be blank.',
            'JobEmployees[email]': {
                required: 'Email address cannot be blank.',
                email: 'Email address is not a valid email address.'
            },
            'JobCovers[value]': 'Cover note cannot be blank.',
            'JobEmployees[mobile]': 'Mobile cannot be blank.',
            'JobResumes[file_id]': {
                required: 'Resume cannot be blank.',
                extension: 'Resume support doc,docs,docx,pdf'
            },
        }
    });

    // register form alert




});