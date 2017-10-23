jQuery( document ).ready( function( $ ) {

  // AJAX form submission
  $("#form").submit(function(event) {
    event.preventDefault(); //prevent default action
    var post_url = $(this).attr("action"); //get form action url
    var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = $(this).serialize(); //Encode form elements for submission

    $.ajax({
      url : post_url,
      type: request_method,
      data : form_data,
      success: function(){
        $('#form').fadeOut(350);
        $('.form-submission--success').delay(351).fadeIn(350);
      },
      fail: function(XMLHttpRequest, textStatus, errorThrown) {
        $('#form').fadeOut(350);
        $('.form-submission--fail').delay(351).fadeIn(350);
        alert("Status: " + textStatus); alert("Error: " + errorThrown);
      }
    }); // end ajax
  }); // end submit
});
