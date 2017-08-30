(function($) {
  // Search icon animation

  $('.icon-search').on('click', function(){
    event.preventDefault();
    $('.main-nav .search-field').toggleClass('fast');
    $('.main-nav .search-field').focus();
  });
})(jQuery);

//*** 