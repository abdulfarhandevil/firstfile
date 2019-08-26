<div class="row page-content" id="container" style="margin-bottom: 200px;">
  	<div class="col-lg-12">
      <h2>Add New City</h2>
      <?php if(validation_errors()) { ?>
      <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
      </div>
        <?php } ?>
        <?php echo form_open_multipart('City_Controller/add_city'); ?>  

      <div class="form-group" style="margin-top: 20px;">
         <div>
          <label>Select Country</label>
           <select class="form-control country" name="Country_id">
            <option value="">select country</option>
            <?php 
            foreach($result as $row){ 
            ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['Country_Name']; ?></option>
            <?php } ?>
        </select>
         </div>
      </div>

      <div class="form-group" style="margin-top: 20px;">
         <div>
          <label>select State</label>
           <select class="form-control state" name="State_id">
            <option>select state</option>
        </select>
         </div>
      </div>

      <div class="form-group">
        <label for="Name">Enter City Name</label>
         <input type="text" name="City_Name" class="form-control" placeholder="State name">
      </div>

      <div style="text-align: center;">
         <button type="submit" id="" class="btn btn-primary">Add</button>   
      </div>
    </div>
  	<?php echo form_close(); ?>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $(".country").change(function(){
        var id = $(".country").val();
        $.ajax({
            url: "<?php echo base_url(); ?>City_Controller/get_states",
            type: 'POST',
            data: {id: id},
            error: function() {
            alert('Something is wrong');
            },
            success: function(data) {
            html ='';
            if (data == "") {
                html += "<option value=''>"+"no states found"+"<option>"
            }
            else{
            html += data;
            }
            $('.state').html(html);
            }
        });
    });
});
</script>