<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script type="text/javascript" src="<?php echo base_url()?>js/ajax.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".country").change(function(){

		 var id = $(".country").val();
		 alert(id);
		  request=$.ajax({
		     url: "<?php echo base_url(); ?>Welcome/get_states",
		     type: 'POST',
		     data: {id: id},
		     error: function() {
		        alert('Something is wrong');
		     },
		     success: function(data) {
		     	alert(data);
		     	html ='';
		        html += data;
		        $('.state').html(html);
		     }
		  });
		});
	});
</script>
<body>
	<h2>Add City</h2>
	<div>
		<label>select country</label>
		<select class="country">
			<?php 
			foreach ($data as $key => $value) {
			 ?>
			<option value="<?php echo $value['id'] ?>"><?php echo $value['name']; ?></option>
			<?php } ?>
		</select>
	</div>
	<div>
		<label>select state</label>
		<select class="state">
			<option></option>
		</select>
	</div>
	<div>
		<label>enter city</label>
		<input type="text" name="city">
	</div>
	<div id="result"></div>
</body>
</html>