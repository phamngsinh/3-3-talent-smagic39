/**
 * Created by sinhpn on 4/22/14.
 */
jQuery(function($) {
    //validate at contact form
    $("#contact-us").validate({
        rules: {
            'JobContactus[name]': {
                required: true
            },
            'JobContactus[email]': {
                required: true,
                email: true,
            },
            'JobContactus[content]': {
                required: true
            },
        },
        messages: {
            'JobEmployees[name]': 'Name cannot be blank.',
            'JobContactus[email]': {
                required: 'Email address cannot be blank.',
                email: 'Email address is not a valid email address.'
            },
            'JobContactus[content]': 'Content cannot be blank.',
        }
    });
});