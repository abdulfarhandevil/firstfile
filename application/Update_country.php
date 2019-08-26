<div class="row page-content" id="container">
  <div class="col-lg-12">
      <h2>Update Country</h2>
      <?php if(validation_errors()) { ?>
      <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
      </div>
      <?php } 
      ?>
      <?php echo form_open_multipart('Country_Controller/edit_country/'.$data['id']); ?>        
      <div class="form-group">
         <input type="text" name="Name" class="form-control" value="<?php echo $data['Country_Name'] ?>">
      </div>
      <div class="form-group">
         <input type="text" name="Code" class="form-control" value="<?php echo $data['Country_Code'] ?>">
      </div>
      <div class="form-group pull-right">
        <button type="submit" id="" class="btn btn-primary" name="">Update</button>
      </div>
    </div>
  <?php echo form_close(); ?>
</div>