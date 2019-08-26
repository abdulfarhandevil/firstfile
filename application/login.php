<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/login_style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>js/userdata.js"></script>
</head>
<body>
    <div id="register"><?php echo $this->session->flashdata('msg'); ?></div>
    <div id="login_error"><?php echo $this->session->flashdata('login_error'); ?></div>
    <div id="logout"><?php echo $this->session->flashdata('logout'); ?></div>
<div id="container">
    <h1>Login Page</h1>
    <div id="body">
        <form method="post" action="<?php echo site_url('Login_Controller/process'); ?>"> 
            <div>
                <input type="text" name="email" class="input100" placeholder="email">
                <span><?php echo form_error('email'); ?></span>
            </div><br>
            <div>
                <input type="password" name="password" class="input100" placeholder="password">
                <span><?php echo form_error('password'); ?></span>
            </div><br>
            <div class="container-login100-form-btn">
                <button class="login100-form-btn">Login</button>                
            </div>
            <h3 class="container-login100-form-btn"><?php echo anchor('Login_Controller/index','Registration'); ?></h3>
        </form>
    </div>
</div>
</body>
</html>