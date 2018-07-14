$(document).ready(function(){
      $("#top_nav").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
         top = $(id).offset().top;
          $('body,html').animate({scrollTop: top}, 1000);
      });
  });
new WOW().init();
$(window).scroll(function() {
        if ($(this).scrollTop() > 1000) {
            if ($('#upbutton').is(':hidden')) {
                $('#upbutton').css({opacity : 1}).fadeIn('slow');
            }
        } else { $('#upbutton').stop(true, false).fadeOut('fast'); }
    });
    $('#upbutton').click(function() {
        $('html, body').stop().animate({scrollTop : 0}, 1000);
    });