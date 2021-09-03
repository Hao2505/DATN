AOS.init();

setTimeout(function(){
    $('#box_message').fadeOut('slow');
 }, 3000);


 // When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("tts-menu-sticky-top");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

$('.delete_cart').click( function(){
  $id = $(this).attr('data-id');
  $(this).closest('.item-cart').find('.qty-cart').val('0');
  $(this).closest('form').submit();
});