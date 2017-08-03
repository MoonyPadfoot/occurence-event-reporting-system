<?php

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Occurence.</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="public/css/bulma.css">
  <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
  <div class="hero is-fullheight is-primary banner-img">
    <div id = "nav-scroll" class="hero-head">
      <header class="nav">
        <div class="container">
          <div class="nav-left">
            <p class="is-size-3 has-text-primary banner-logo">Occurrence.</p>
          </div>
          <span class="nav-toggle" id="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
          </span>
          <div class="nav-right nav-menu" id="nav-menu">
            <a class="nav-item links">HOME</a>
            <a id="login" class="nav-item links" >LOGIN</a>
            <div class="nav-item">
              <a id="signup" class="button is-primary">SIGN UP</a>
            </div>
          </div>
        </div>
      </header>
    </div>
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="is-size-1 title">Occurence.</h1>
        <h2 class="is-size-5 subtitle">A simple web application to report incidents around you.</h2>
        <a href="" class="button is-primary btnLink">SIGN UP</a>
        <a href="" class="button is-primary is-inverted btnLink">LOG IN</a>
      </div>
    </div>
  </div>

  <!-- Start of content -->
  <section class="colorSection addPadding">
    <div class="columns">
      <div class="column is-one-third">
        <span class="icon is-large">
          <i class="fa fa-location-arrow"></i>
        </span>
        <p class="is-size-6 has-text-centered">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi laboriosam placeat voluptatem! Deleniti eaque eos et excepturi nemo, saepe sint voluptatibus! Asperiores doloribus dolorum fugit?</p>
      </div>
      <div class="column">
        <span class="icon is-large">
          <i class="fa fa-phone"></i>
        </span>
        <p class="is-size-6 has-text-centered">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem deleniti earum eius esse, harum impedit neque nesciunt porro possimus quaerat quo ratione recusandae tempore ut!</p>
      </div>
      <div class="column">
        <span class="icon is-large">
          <i class="fa fa-rss"></i>
        </span>
        <p class="is-size-6 has-text-centered">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cumque et eveniet explicabo facilis non nostrum ratione, reiciendis, rem suscipit tempore velit veritatis vitae. Necessitatibus.</p>
      </div>
    </div>
  </section>
  <div style="height: 500px;"></div>
  <footer class="footer">
    <div class="container">
      <div class="content has-text-centered">
        <p>
          <strong>Occurence</strong> by <a href="https://eyedeceiver03.github.io/" target="_blank">Joshua Bienes</a>, Renier Antonio and Anthony Villaflores.
        </p>
        <p>
          <a class="icon" href="https://github.com/eyedeceiver03/occurence-event-reporting-system" target="_blank">
            <i class="fa fa-github"></i>
          </a>
        </p>
      </div>
    </div>
  </footer>

  <!-- Sign Up Modal -->
  <div id="signupModal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">SIGNUP</p>
        <button id="signupClose" class="delete"></button>
      </header>
      <section class="modal-card-body">
        <!-- Content ... -->
      </section>
      <footer class="modal-card-foot">
        <a class="button is-success">Save changes</a>
        <a class="button">Cancel</a>
      </footer>
    </div>
  </div>

  <!-- Log In Modal -->
  <div id="loginModal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">LOGIN</p>
        <button id="loginClose" class="delete"></button>
      </header>
      <section class="modal-card-body">
        <!-- Content ... -->
      </section>
      <footer class="modal-card-foot">
        <a class="button is-success">Save changes</a>
        <a class="button">Cancel</a>
      </footer>
    </div>
  </div>

  <script src="public/js/jquery-3.2.1.js"></script>
  <script src="public/js/scripts.js"></script>
</body>
</html>
