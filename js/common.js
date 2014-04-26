/**
 * Created by sinhpn on 4/22/14.
 */
jQuery(function($) {
    
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
                email:true,
                        
            },
            'JobEmployees[mobile]': {
                required: true
            },
            'JobResumes[file_id]': {
                required: true
            },
            'JobCovers[value]': {
                required: true
            },
            
        },
        messages: {
            'JobEmployees[first_name]': 'First name cannot be blank.',
            'JobEmployees[last_name]': 'Last name cannot be blank.',
            'JobEmployees[email]': {
                required:'Email address cannot be blank.',
                email:'Email address is not a valid email address.'
            },
            'JobCovers[value]':'Cover note cannot be blank.',
            'JobEmployees[mobile]': 'Mobile cannot be blank.',
            'JobResumes[file_id]': 'Resume cannot be blank.',
        }
    });
      //validate at contact form
      $("#contact-us").validate({
        rules: {
            'JobContactus[name]': {
                required: true
            },
          
            'JobContactus[email]': {
                required: true,
                email:true,
                        
            },
            'JobContactus[content]': {
                required: true
            },
    
            
        },
        messages: {
            'JobEmployees[name]': 'Name cannot be blank.',
            'JobContactus[email]': {
                required:'Email address cannot be blank.',
                email:'Email address is not a valid email address.'
            },
            'JobContactus[content]': 'Content cannot be blank.',
        }
    });

  
     
   

});