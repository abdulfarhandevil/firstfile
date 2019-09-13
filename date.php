<!DOCTYPE html>
<html>
<head>
	<title>select date</title>
</head>
<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".date").change(function(){
        var date = $(".date").val();
        <?php $this->session->unset_userdata('date') ?>
        $.ajax({
            url: "<?php echo base_url('Admin_Controller/show_data'); ?>",
            type: 'POST',
            data: {date: date},
            error: function() {
            alert('Something is wrong');
            },
            success: function(data) {
            html ='';
            if (data == "") {
                html += "no user found";
            }
            else{
            html += data;
            }
            $('.data').html(html);
            }
        });
    });
});
</script>
<body>
	<div>
		<form method="post" action="<?php echo base_url('admin_controller/show_data'); ?>">
			select date : <input type="date" name="date" class="date" required><br>
		</form>
		<div id="container">
        <table >
        	<thead>
            <tr>
                <th>Id</th>
                <th>Login</th>
                <th>First Name</th>
                <th>Date</th>
                <th>Total hours</th>
            </tr>
            </thead>
            <tbody class="data">
            	
            </tbody>
        </table>
        <p id="links"> <?php echo $this->pagination->create_links(); ?></p> 
	</div>
	</div>
</body>
</html>