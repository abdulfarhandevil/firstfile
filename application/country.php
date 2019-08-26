<div class="row page-content" id="container" style="margin-bottom: 300px;">
  	<div class="col-lg-12">
      <h2>Add Country</h2>
      <?php if(validation_errors()) { ?>
      <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
      </div>
        <?php } ?>
        <?php echo form_open_multipart('Country_Controller/add_country'); ?>        
      <div class="form-group">
         <input type="text" name="Name" class="form-control" placeholder="Country Name">
      </div>
      <div class="form-group">
         <input type="number" name="Code" class="form-control" placeholder="Country Code">
      </div>
      <div style="text-align: center;">
         <button type="submit" id="" class="btn btn-primary">Add</button>   
      </div>
    </div>
  	<?php echo form_close(); ?>
</div>