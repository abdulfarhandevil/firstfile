<div class="row page-content" id="container" style="margin-bottom: 250px;">
  	<div class="col-lg-12">
      <h2>Add New State</h2>
      <?php if(validation_errors()) { ?>
      <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
      </div>
        <?php } ?>
        <?php echo form_open_multipart('State_Controller/add_state'); ?>        
      <div class="form-group" style="margin-top: 20px;">
         <div>
          <label>select Country</label>
           <select class="form-control" name="Code">
            <option value="">select country first</option>
            <?php 
            $CI = &get_instance();
            $CI->load->model('State_Model');
            $result = $CI->State_Model->get_all_country();
            foreach($result as $row){ 
            ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['Country_Name']; ?></option>
            <?php } ?>
        </select>
         </div>
      </div>
      <div class="form-group">
        <label for="Name">Enter State Name</label>
         <input type="text" name="Name" class="form-control" placeholder="State name">
      </div>
      <div style="text-align: center;">
         <button type="submit" id="" class="btn btn-primary">Add</button>   
      </div>
    </div>
  	<?php echo form_close(); ?>
</div>