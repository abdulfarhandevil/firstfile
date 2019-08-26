    <div class="row page-content" id="container">
      <div class="col-lg-12">
          <h2>Update</h2>
          <?php if(validation_errors()) { ?>
          <div class="alert alert-danger">
            <?php echo validation_errors(); ?>
          </div>
          <?php } 
          $gen = $data['gender'];
          $hobbies = explode(",", $data['hobbies']);
          //print_r($data); die;
          ?>
          <?php echo form_open_multipart('Admin_Controller/Update_data/'.$data['id']); ?>        
          <div class="form-group">
             <input type="text" name="fname" class="form-control" value="<?php echo $data['first_name'] ?>">
          </div>
          <div class="form-group">
             <input type="text" name="lname" class="form-control" value="<?php echo $data['last_name'] ?>">
          </div>
          <div class="form-group">
             <input type="text" name="username" class="form-control" value="<?php echo $data['username'] ?>">
          </div>
          <div class="form-group">
             <input type="text" name="email" class="form-control" value="<?php echo $data['email'] ?>">
          </div>
           <div class="form-group">
             <input type="hidden" name="password" class="form-control" value="<?php echo $data['password'] ?>">
          </div>
          <div class="form-group">
             <input type="hidden" name="confirm_password" class="form-control" value="<?php echo $data['password'] ?>">
          </div>
          <div class="form-group">
             <input type="number" name="mobile_no" class="form-control" value="<?php echo $data['mobile_no'] ?>">
          </div>
          <div class="form-group">
             <input type="file" name="profile" class="form-control">
             <input type="hidden" name="old_profile" value="<?php echo $data['profile_pic'] ?>">
          </div>
          <div class="form-group">
             <input type="date" name="date_of_birth" class="form-control" value="<?php echo $data['date_of_birth'] ?>">
          </div>
          <div class="form-group">
            <label>Gender</label><br>
            <?php  $data['hobbies']; ?>
             <input type="radio" name="gender" class="form-control" value="Male" <?php echo ($gen=='Male')?"checked":"" ;?>>Male<br>
             <input type="radio" name="gender" class="form-control" value="Female" <?php echo ($gen=='Female')?"checked":"" ;?>>Female
          </div>
          <div class="form-group">
              <label >Hobbies</label><br>
              <input type="checkbox" name="hobbies[]" value="reading" <?php echo (in_array("reading", $hobbies))?"checked":"" ;?>>Reading<br>
              <input type="checkbox" name="hobbies[]" value="football" <?php echo (in_array("football", $hobbies))?"checked":"" ;?>>Football<br>
              <input type="checkbox" name="hobbies[]" value="hockey" <?php echo (in_array("hockey", $hobbies))?"checked":"" ;?>>Hockey<br>
              <input type="checkbox" name="hobbies[]" value="cricket" <?php echo (in_array("cricket", $hobbies))?"checked":"" ;?>>Cricket<br>
              <input type="checkbox" name="hobbies[]" value="music" <?php echo (in_array("music", $hobbies))?"checked":"" ;?>>Music
          </div>
          <div class="form-group pull-right">
            <button type="submit" id="" class="btn btn-primary" name="">Update</button> 
            <input type="hidden" name="update" value="1"> 
          </div>
        </div>
      <?php echo form_close(); ?>
    </div>