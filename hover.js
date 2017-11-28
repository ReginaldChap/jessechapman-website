$(document).ready( function() {
    function handler( event ) {
    var target = $( event.target );
    if ( target.is( ".flex-box" ) ) {
      target.children().fadeIn(200);
    } else $(".flex-box-cont").fadeOut(200);
  }
  $( ".flex-box" ).mouseenter( handler );
  $( ".flex-box" ).children().mouseleave( handler );
});