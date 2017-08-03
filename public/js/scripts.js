$(document).ready(() => {
  $('#signup').click(() => {
    $('#signupModal').addClass("is-active")
    $('#signupClose').click(() => {
      $('#signupModal').removeClass("is-active")
    })
  })

  $('#login').click(() => {
    $('#loginModal').addClass("is-active")
    $('#loginClose').click(() => {
      $('#loginModal').removeClass("is-active")
    })
  })

  //Change style on scroll
  $(window).scroll(() => {
    if($(window).scrollTop() > 0){
      $('#nav-scroll').addClass('scrolled')
      // $('.links').addClass('has-text-grey')
    } else {
      $('#nav-scroll').removeClass('scrolled')
      // $('.links').removeClass('has-text-grey')
    }
  })

  //Toggle navbar
  var $toggle = $('#nav-toggle');
  var $menu = $('#nav-menu');

  $toggle.click(function() {
    $(this).toggleClass('is-active');
    $menu.toggleClass('is-active');
  });
})