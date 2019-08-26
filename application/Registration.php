<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/registration_style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>js/userdata.js"></script>

</head>
<body>
    <div class="row page-content" id="container">
      <div class="col-lg-12">
          <h2>Registration Form</h2>
          <?php if(validation_errors()) { ?>
          <div class="alert alert-danger">
            <?php echo validation_errors(); ?>
          </div>
            <?php } ?>
            <?php echo form_open_multipart('Login_Controller/Register'); ?>        
          <div class="form-group">
             <input type="text" name="fname" class="form-control" placeholder="First Name">
          </div>
          <div class="form-group">
             <input type="text" name="lname" class="form-control" placeholder="Last Name">
          </div>
          <div class="form-group">
             <input type="text" name="username" class="form-control" placeholder="User Name">
          </div>
          <div class="form-group">
             <input type="text" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
             <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group">
             <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
          </div>
          <div class="form-group">
             <input type="text" name="mobile_no" class="form-control" placeholder="Mobile">
          </div>
          <div class="form-group">
             <input type="file" name="profile" class="form-control" placeholder="Profile">
          </div>
          <div class="form-group">
             <input type="date" name="date_of_birth" class="form-control" placeholder="DOB">
          </div>
          <div class="form-group">
            <label>Gender</label><br>
             <input type="radio" name="gender" class="form-control" value="Male">Male<br>
             <input type="radio" name="gender" class="form-control" value="Female">Female
          </div>
          <div class="form-group">
              <label >Hobbies</label><br>
              <input type="checkbox" name="hobbies[]" value="reading">Reading<br>
              <input type="checkbox" name="hobbies[]" value="football">Football<br>
              <input type="checkbox" name="hobbies[]" value="hockey">Hockey<br>
              <input type="checkbox" name="hobbies[]" value="cricket">Cricket<br>
              <input type="checkbox" name="hobbies[]" value="music">Music
          </div>
          <div class="form-group pull-right">
             <button type="submit" id="" class="btn btn-primary">Register</button>
             <h3 ><?php echo anchor('Login_Controller/login','Login'); ?></h3>   
          </div>
        </div>
      <?php echo form_close(); ?>
    </div>
</body>
</html>