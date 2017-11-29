$(document).ready( function() {
//FIRST DIV OF TARGET
  


$('.toggle').mouseenter( function() {
    $('.flex-box-cont', this).fadeIn(200);
})
$('.toggle').mouseleave( function() {
    $('.flex-box-cont', this).fadeOut(200);
})





//     function handler( event ) {
//     var target = $( event.target );
//     if ( target.is( ".flex-box" ) ) {
//       target.children().fadeToggle(200);
//   } else target.children(':first').fadeToggle(200);
//   }
//   $( ".flex-box" ).mouseenter( handler );
//   $( ".flex-box-cont" ).mouseleave( handler );


  //   function handler( event ) {
  //   var target = $( event.target );
  //   if ( target.is( ".flex-box" ) ) {
  //     target.children().fadeToggle(200);
  // } else $(".flex-box").fadeToggle(200);
  // }
  // $( ".flex-box" ).mouseenter( handler );
  // $( ".flex-box" ).children().mouseleave( handler );
 });