<!DOCTYPE html>
<html>
<head>
	<title>select date</title>
</head>
<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".date").change(function(){
        var date = $(".date").val();
        $.ajax({
            url: "<?php echo base_url('Admin_Controller/show_data/'); ?>",
            type: 'POST',
            data: {date: date},
            error: function() {
            alert('Something is wrong');
            },
            success: function(data) {
                alert(data);
                createPagination(0);
                $('#pagination').on('click','a',function(e){
                    e.preventDefault(); 
                    var pageNum = $(this).attr('data-ci-pagination-page');
                    createPagination(pageNum);
                });
                function createPagination(pageNum){
                    $.ajax({
                        url: '<?php echo base_url('Admin_Controller/show_data/'); ?>'+pageNum,
                        type: 'get',
                        dataType: 'json',
                        success: function(result){
                            if (result.pagination =='') {
                                $('#pagination').empty();
                            }
                            else
                            {
                                $('#pagination').html(result.pagination);
                            }
                            if (result.empData=='') {
                                $('#employeeList tbody').text('no user found');   
                            }
                            else
                            {
                                paginationData(result.empData);
                            }
                        }
                    });
                }
                function paginationData(data) {
                    $('#employeeList tbody').empty();
                    for(emp in data){
                        var empRow = "<tr>";
                        empRow += "<td>"+ data[emp].id +"</td>";
                        empRow += "<td>"+ data[emp].login +"</td>";
                        empRow += "<td>"+ data[emp].firstname +"</td>"
                        empRow += "<td>"+ data[emp].Date +"</td>"
                        empRow += "<td>"+ data[emp].Tot_Hrs +"</td>"
                        empRow += "</tr>";
                        $('#employeeList tbody').append(empRow);                    
                    }
                }
            }
        });
    });
});
</script>
<body>
	<div>
		<form method="post" action="<?php echo base_url(''); ?>">
			select date : <input type="date" name="date" class="date" required><br>
		</form>
	<div id="container">
        <table id="employeeList">
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
        <div id='pagination'></div>
	</div>
	</div>
</body>
</html>