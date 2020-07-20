jQuery(function($) {
  $('.dropdown-title .box').click(function() {
    if(!$(this).parent().hasClass('active'))
      $(this).parent().addClass('active');
    else
      $(this).parent().removeClass('active');
  });
});