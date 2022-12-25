$("#expbtn").click(function() {
    $('html, body').animate({
      scrollTop: $("#middle-container").offset().top - $('#fixed-header').outerHeight()
    }, 500);
  });