// var pathname = window.location.pathname,
// pages = ['portfolio', 'about', 'contact'];

// $('.nav-item').each(function(i) {
//  if (pathname.includes(pages[i])) this.addClass('active');
//  else if (this.className.includes('active')) this.removeClass('active');
// });

// this code works for active nav

$(document).ready(function() {
  $( ".tabs_nav .tab_container" ).bind( "click", function(event) {
    //   event.preventDefault();
      var clickedItem = $( this );
      $( ".tabs_nav .tab_container" ).each( function() {
          $( this ).removeClass( "active" );
      });
      clickedItem.addClass( "active" );
  });
});