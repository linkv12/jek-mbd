<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
  </head>
  <body>
    <h4 class="center-align">Login</h4>
    <div id="user-login" class="row center">
      <div class="col s12 z-depth-6 card-panel">
        <form class="login-form" method="post" action='<?= site_url()?>C_Login/login'>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="mdi-social-person-outline prefix"></i>
              <input class="validate" name="user_email" id="user_email" type="email" placeholder='Email'>
              <label for="email" data-error="wrong" data-success="right" class="center-align" ></label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="mdi-action-lock-outline prefix"></i>
              <input id="user_pass" name="user_pass" type="password" placeholder='Password'>
              <label for="password"></label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" name="remember-me" />
              <label for="remember-me">Remember me</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input type="submit" name="submit" value="Login" class="btn waves-effect waves-light col s12">
              <!--<a href="login.html" >Login</a>-->
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6 m6 l6">
              <p class="margin medium-small"><a href="<?= site_url()?>C_Register">Register Now!</a></p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
