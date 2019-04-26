<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
  </head>
  <body>
    <h4>Register Form</h4>
    <div id="register-page" class="row">
    	<div class="col s12 z-depth-6 card-panel">
    		<form class="register-form" method="post" action="<?= site_url()?>C_Register/register">
    			<div class="row margin">
    				<div class="input-field col s12">
    					<i class="mdi-social-person-outline prefix"></i>
    					<input id="user_name" name="user_name" type="text" class="validate" placeholder="Username">
    					<label for="user_name" class="center-align"></label>
    				</div>
    			</div>
    			<div class="row margin">
    				<div class="input-field col s12">
    					<i class="mdi-communication-email prefix"></i>
    					<input id="user_email" name="user_email" type="email" class="validate" placeholder="Email">
    					<label for="user_email" class="center-align"></label>
    				</div>
    			</div>
    			<div class="row margin">
    				<div class="input-field col s12">
    					<i class="mdi-action-lock-outline prefix"></i>
    					<input id="user_passw" name="user_passw" type="password" class="validate" placeholder="Password">
    					<label for="user_passw"></label>
    				</div>
    			</div>
    			<div class="row margin">
    				<div class="input-field col s12">
    					<i class="mdi-action-lock-outline prefix"></i>
    					<input id="confirm_pass" name="confirm_pass" type="password" placeholder="Re-type password">
    					<label for="confirm_pass"></label>
    				</div>
    			</div>
    			<div class="row">
    				<div class="input-field col s12">
              <input type="submit" name="submit"class="btn waves-effect waves-light col s12" value="Register Now" >
    				</div>
    				<div class="input-field col s12">
    					<p class="margin center medium-small sign-up">Already have an account? <a href="<?= site_url()?>C_Login">Login</a></p>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
  </body>
</html>
