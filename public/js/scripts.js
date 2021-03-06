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
      $('.links').css({
        color: '#455a64'
      })
    } else {
      $('#nav-scroll').removeClass('scrolled')
      $('.links').css({
        color: 'white'
      })
    }
  })

  //Toggle navbar
  var $toggle = $('#nav-toggle')
  var $menu = $('#nav-menu')

  $toggle.click(function() {
    $(this).toggleClass('is-active')
    $('#signup').toggleClass('is-inverted')
    $menu.toggleClass('is-active')
    $('.links').css({
      color: 'white'
    })
  })
})