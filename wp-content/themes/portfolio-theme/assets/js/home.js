jQuery( document ).ready( function( $ ) {

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



  // Scrolling functionality.
  var divs = $('.scroll-point');
  var dir = 'up'; // wheel scroll direction
  var div = 0; // current div

  $(document.body).on('DOMMouseScroll mousewheel', function (e) {
    if (e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0) {
      dir = 'down';
    } else {
      dir = 'up';
    }
    // find currently visible div :
    div = -1;
    divs.each(function(i){
      if (div < 0 && ($(this).offset().top >= $(window).scrollTop())) {
        div = i;
      }
    });
    if (dir == 'up' && div > 0) {
      div--;
    }
    if (dir == 'down' && div < divs.length) {
      div++;
    }

    // Animation, class and CSS alterations for the focused project.
    function showProject(activeProject) {
      $(activeProject + '__title').addClass('project-title__active');
      $(activeProject + '__subtitle').css({'margin-left': '0', 'opacity':'1'});
      $(activeProject + '__description').delay(1000).css({'height': 'auto', 'opacity':'1', 'overflow':'visible'});
    }

    // Animation, class and CSS alterations for unfocused projects.
    function hideProject(hiddenProject) {
      $(hiddenProject + '__title').removeClass('project-title__active');
      $(hiddenProject + '__subtitle').css({'margin-left': '-200px', 'opacity':'0'});
      $(hiddenProject + '__description').css({'height': '0', 'opacity':'0', 'overflow':'hidden'});
    }


    // NOTE: activeProject functioning fine, needs to be refactored later on.
    function activeProject01() {
      showProject('.project--1');

      hideProject('.project--2');
      hideProject('.project--3');
      hideProject('.project--4');
      hideProject('.project--5');

      $('html,body').stop().animate({
        scrollTop: divs.eq(1).offset().top
      }, 750);
      return false;
      div == 1;
    }

    function activeProject02() {
      showProject('.project--2');

      hideProject('.project--1');
      hideProject('.project--3');
      hideProject('.project--4');
      hideProject('.project--5');

      $('html,body').stop().animate({
        scrollTop: divs.eq(2).offset().top
      }, 750);
      return false;
      div == 2;
    }

    function activeProject03() {
      showProject('.project--3');

      hideProject('.project--1');
      hideProject('.project--2');
      hideProject('.project--4');
      hideProject('.project--5');

      $('html,body').stop().animate({
        scrollTop: divs.eq(3).offset().top
      }, 750);
      return false;
      div == 3;
    }

    function activeProject04() {
      showProject('.project--4');

      hideProject('.project--1');
      hideProject('.project--2');
      hideProject('.project--3');
      hideProject('.project--5');

      $('html,body').stop().animate({
        scrollTop: divs.eq(4).offset().top
      }, 750);
      return false;
      div == 4;
    }

    function activeProject05() {
      showProject('.project--5');

      hideProject('.project--1');
      hideProject('.project--2');
      hideProject('.project--3');
      hideProject('.project--4');

      $('html,body').stop().animate({
        scrollTop: divs.eq(5).offset().top
      }, 750);
      return false;
      div == 5;
    }

    // Change div value on click.
    $('.project--1').click(function(){
      activeProject01();
    });
    $('.project--2').click(function(){
      activeProject02();
    });
    $('.project--3').click(function(){
      activeProject03();
    });
    $('.project--4').click(function(){
      activeProject04();
    });
    $('.project--5').click(function(){
      activeProject05();
    });

    // Change div value on scroll.
    if(div == 1) {
      activeProject01();
    } else if(div == 2) {
      activeProject02();
    } else if(div == 3) {
      activeProject03();
    } else if(div == 4) {
      activeProject04();
    } else if(div == 5) {
      activeProject05();
    }

    $('html,body').stop().animate({
      scrollTop: divs.eq(div).offset().top
    }, 750);
    return false;
  });

  $(window).resize(function () {
    $('html,body').scrollTop(divs.eq(div).offset().top);
  });
});
