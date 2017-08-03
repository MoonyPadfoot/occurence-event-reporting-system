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
  <nav class="navbar">
    <div class="navbar-brand">
      <p class="brand is-size-3 has-text-primary">Occurrence.</p>
    </div>
    <div class="navbar-menu">
      <div class="navbar-end">
        <a class="navbar-item" >HOME</a>
        <a id="login" class="navbar-item" >LOGIN</a>
        <div class="navbar-item">
          <p class="control">
            <a id="signup" class="button is-primary">SIGN UP</a>
          </p>
        </div>
      </div>
    </div>
  </nav>

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
  <header>

  </header>

  <script src="public/js/jquery-3.2.1.js"></script>
  <script src="public/js/scripts.js"></script>
</body>
</html>
