<?php
defined('BASEPATH') OR exit('No direct script access allowed');



?>

<!DOCTYPE html>
<html amp lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/image/jain_fav.png'); ?>" />


    <script type="application/ld+json">
    {

        "image": [
            "logo.jpg"
        ]
    }
    </script>
    <title>JAIN</title>
    <link href="<?php echo base_url('assets/css/loader.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-5.11.2/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-4.3.1/css/bootstrap.min.css'); ?>">
</head>

<style>
    html,
body {
  height: 100%;
  overflow-x:hidden;
}

body {
  /*display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background:url("<?php echo base_url('assets/image/login_g.jpg'); ?>");
  background-repeat:no-repeat;
  background-size:cover;
 */
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
  z-index:4;
  
}
.form-signin .checkbox {
  font-weight: 400;
  
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
  
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;

}
#particles-js
{
  width:100%;
  height:100vh;
  position:absolute;
  z-index:0;
}
/*google login*/
*, *:before, *:after {
  box-sizing: border-box;
}
.g-sign-in-button {
  padding:4px;
  display: inline-block;
  width: 100%;
  height: 50px;
  background-color: #fff;
  color: #000;
  border-radius: 1px;
  box-shadow: 0 2px 4px 0 rgba(0,0,0,.25);
  transition: background-color .218s, border-color .218s, box-shadow .218s;
}
.g-sign-in-button:hover {
  cursor: pointer;
  -webkit-box-shadow: 0 0 3px 3px rgba(66,133,244,.3);
  box-shadow: 0 0 3px 3px rgba(66,133,244,.3);
}

.g-sign-in-button .content-wrapper {
  height: 100%;
  width: 100%;
  border: 1px solid transparent;
}
.g-sign-in-button img {
    width: 18px;
    height: 18px;
}
.g-sign-in-button .logo-wrapper {
   padding-top: 9px;
   background:#fff;
   width: 48px;
   height: 100%;
   border-radius: 1px; 
   display: inline-block;
}
.g-sign-in-button .text-container {
    font-family: Roboto,arial,sans-serif;
    font-weight: 500;
    letter-spacing: .21px;
    font-size: 16px;
    line-height: 48px;
    vertical-align: top;
    border: none;
    display: inline-block;
    text-align: center;
    width: 180px;
}

</style>

<?php 
if($this->session->flashdata('invalid_user')){
 echo '
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Login failed!</strong> Invalid user id or password.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
if($this->session->flashdata('mailsend')){
  echo '
 <div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>Success!</strong> Check your email for password reset.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>';
 }
 if($this->session->flashdata('reset_success')){
  echo '
 <div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>Success!</strong> Check your password is changed.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>';
 }
if($this->session->flashdata('unregistered_email')){
    echo '
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
     <strong>Login failed!</strong> invalid email id.
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>';
   }
?>

<div class="col-12 mt-1 ml-1"><a href="<?php echo base_url('Home/'); ?>"><i class="fas fa-arrow-left"></i></a></div>
<?php echo form_open('Home/login_process','class="pt-0 form-signin text-center"'); ?>
<div class="mt-0 p-0">
      <img class="mb-0 mt-0 pt-0" src="<?php echo base_url('assets/image/jain_logo_black.png'); ?>" alt="" width="280" height="210" />
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="u_name" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="u_password" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
           Forgot Your Password? <a href="<?php echo base_url('Home/forgot_mail'); ?>"> Reset Password</a>
        </label>
      </div>
      <input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign in" name="u_login">


        
      </div>
    </div>
     
<?php echo form_close(); ?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="<?php echo base_url('assets/particles_js/demo/js/app.js'); ?>"></script>


</script>
    <script src="<?php echo base_url('assets/bootstrap-4.3.1/js/bootstrap.min.js') ?>"></script>
  </body>
  
</html>