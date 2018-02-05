(function($) {

  var allPanels = $('.collapse-body');

  $('.collapse-toggle').on('click', function() {
    allPanels.removeClass('open');
    $(this).closest('.collapse').find('.collapse-body').addClass('open');
    return false;
  });

  $('.collapse-next').on('click', function() {
    allPanels.removeClass('open');
    $(this).closest('.collapse').next().find('.collapse-body').addClass('open');
    return false;
  });

})(jQuery);
