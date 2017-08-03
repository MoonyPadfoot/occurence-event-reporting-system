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
})