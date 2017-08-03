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

    </div>
  </div>


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

  <!-- Start of content -->
  <div style="height: 1000px;"></div>

  <script src="public/js/jquery-3.2.1.js"></script>
  <script src="public/js/scripts.js"></script>
</body>
</html>
