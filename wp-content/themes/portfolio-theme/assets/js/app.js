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



  // Sticky navbar and portfolio content.
  var navbar = $('#navbar-main'),
      port = $('.portfolio-content'),
      distance = navbar.offset().top,
      $window = $(window);
      aboutStart = distance * 6;

  // NOTE: Clean up: Transition from About to Portfolio not animated correctly.
  $window.scroll(function() {
    if ($window.scrollTop() >= distance && $window.scrollTop() >= aboutStart) {
      port.addClass('portfolio-content--fixed-top-transition');
    } else if ($window.scrollTop() >= distance){
      navbar.addClass('navbar--fixed-top');
      port.addClass('portfolio-content--fixed-top').removeClass('portfolio-content--fixed-top-transition');
    } else {
      navbar.removeClass('navbar--fixed-top');
      port.removeClass('portfolio-content--fixed-top').removeClass('portfolio-content--fixed-top-transition');
    }
  }); // end sticky navbar
});
