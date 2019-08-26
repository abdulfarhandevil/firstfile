<div class="row page-content" id="container">
  <div class="col-lg-12">
      <h2>Update State</h2>
      <?php if(validation_errors()) { ?>
      <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
      </div>
      <?php } 
      ?>
      <?php echo form_open_multipart('State_Controller/edit_state/'.$data['id']); ?>        
      <div class="form-group">
         <div>
            <label>select Country</label>
            <select class="form-control" name="Code">
              <option value="">select country first</option>
            <?php 
            foreach($results as $row){ 
            ?>
            <option value="<?php echo $row['id']; ?>" <?php if($data['Country_id']==$row['id']) {echo "selected";} ?>><?php echo $row['Country_Name']; ?></option>
            <?php } ?>
            </select>
         </div>
      </div>
      <div class="form-group">
        <label>Enter State Name</label>
         <input type="text" name="Name" class="form-control" value="<?php echo $data['State_Name'] ?>">
      </div>
      <div class="form-group pull-right">
        <button type="submit" id="" class="btn btn-primary" name="">Update</button>
      </div>
    </div>
  <?php echo form_close(); ?>
</div>