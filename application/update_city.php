<div class="row page-content" id="container">
  <div class="col-lg-12">
      <h2>Update City</h2>
      <?php if(validation_errors()) { ?>
      <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
      </div>
      <?php } 
      ?>
      <?php echo form_open_multipart('City_Controller/edit_city/'.$idd); ?>        
      <div class="form-group">
         <div>
            <label>select Country</label>
            <select class="form-control country" name="Country_id">
              <option value="">select country first</option>
            <?php
            foreach($result as $row){
            ?>
            <option value="<?php echo $row['id']; ?>" <?php if($data['Country_id']==$row['id']) {echo "selected";} ?>><?php echo $row['Country_Name']; ?></option>
            <?php } ?>
            </select>
         </div>
      </div>
      <div class="form-group" style="margin-top: 20px;">
         <div>
          <label>select State</label>
           <select class="form-control state" name="State_id">
            <option value="<?php echo $data['id'] ?>"><?php echo $data['State_Name'] ?></option>
        </select>
         </div>
      </div>
      <div class="form-group">
        <label>Enter New City Name</label>
         <input type="text" name="City_Name" class="form-control" value="<?php echo $data['City_Name'] ?>">
      </div>
      <div class="form-group pull-right">
        <button type="submit" id="" class="btn btn-primary" name="">Update</button>
      </div>
    </div>
  <?php echo form_close(); ?>
</div>