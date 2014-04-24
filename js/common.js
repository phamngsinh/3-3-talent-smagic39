/**
 * Created by sinhpn on 4/22/14.
 */
jQuery(function ($) {
  $('#registration-form #coverNoteType0').click(function(e){
      $('#registration-form #CandidateCoverNote').hide();
      $('#JobEmployees_cover_id').show();
  });
  $('#registration-form #coverNoteType1').click(function(e){
      $('#registration-form #CandidateCoverNote').show();
      $('#registration-form  #JobEmployees_cover_id').hide();
  });
  $('#JobEmployees_mobile').on('focusout',function(){
      $(this).attr('placeholder','');
  });
  $('#JobEmployees_mobile').click(function(){
      $(this).attr('placeholder','(___) ___-____');
  });


});