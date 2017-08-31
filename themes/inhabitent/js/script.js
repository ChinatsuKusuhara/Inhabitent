(function($) {
  // Search icon animation

  $('.icon-search').on('click', function(){
    event.preventDefault();
    $('.main-navigation .search-field').toggleClass('search-visible');
    $('.main-navigation .search-field').focus();
  });

  $('.main-navigation .search-field').on('blur', function() {
    $('.main-navigation .search-field').toggleClass('search-visible');
  });
  

})(jQuery);
