(function($) {
  // Search icon animation
  $('#search-form-input .icon-search').click(function(){
    $('#search-form-input .search-field').toggleClass('search-field-focus');
  });
  $('#search-form-input .search-field').focusout(function(){
    if($('#search-form-input .search-field').hasClass('search-field-focus')){
      $('#search-form-input .search-field').removeClass('search-field-focus');
    }
  });
})(jQuery);