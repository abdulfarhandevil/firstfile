<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap2.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>"> 
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="<?php echo base_url('asset/css/button.datatable.min.css'); ?>"> 
  <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css'); ?>">

  <script src="<?php echo base_url('asset/js/jquery-3.4.1.js'); ?>"></script>
  <script src="<?php echo base_url('asset/js/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/js/bootstrap.min.js'); ?>"></script>

  <script src="<?php echo base_url('asset/js/dataTables.min.js'); ?>"></script>
 
  <script src="<?php echo base_url('asset/js/button.datatable.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/js/jszip.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/js/button.flash.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/js/pdfmake.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/js/vfs_fonts.js'); ?>"></script>
  <script src="<?php echo base_url('asset/js/button.html.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/js/button.print.min.js'); ?>"></script>

</head>
<?php  
if ($this->session->flashdata('date')) {
  $date = $this->session->flashdata('date');
}
else
{
  $date ='';
}
?>
<body>
  <div class="container">
    <h2 id="user_list">Employees List </h2> 
    <div class="form_div">
    <form action="<?php echo base_url('Employees_List/employee_data');?>" method="post">
      <div class="form-group">
        <label for="select_date_div" class="select_date_label">Select Date &nbsp</label>
        <input type="date" class="form-control select_date_div" name="date" value="<?php echo $date ?>" required>
        <button type="submit" class="btn btn-default submit_btn_div">Submit</button>
        <button type="button" class="btn btn-primary mail_btn" data-toggle="modal" data-target="#myModal" onclick="get_selected();" disabled>Send Mail</button>
      </div>
    </form> 
    
    </div>
    <table id="example" class="table table-striped table-bordered display" style="width:100%">
       <thead>
          <tr>
            <th><button type="button" id="selectAll" class="main">
            <span class="sub"></span> Select All</button></th>
            <th>S.No</th>
            <th>Login</th>
            <th>First Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Total hours</th> 
          </tr>
       </thead>
       <tbody id="tbody">
       <?php if(!empty($userdata) && count($userdata) >  0 ){ 
          $i = 1;
          foreach ($userdata as $userInfo) {    ?>
          <tr>
             <td><input type="checkbox" class="checkbox" data-id="<?php echo $userInfo['eMail'];?>" /></td>
             <td><?php echo $i++;?></td>
             <td><?php echo $userInfo['login'];?></td>
             <td><?php echo $userInfo['firstname'];?></td>
             <td ><?php echo $userInfo['eMail'];?></td>
             <td><?php echo $userInfo['Date'];?></td>
             <td><?php echo $userInfo['Tot_Hrs'];?></td>
          </tr>
          <?php } }  ?>
       </tbody>
    </table>
  </div>

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="" method="post">
        <div class="modal_header">
          <label>From : </label>
          <span class="email_from_where"></span><br>
          <label>To : </label>
          <span class="to_whom_mail"></span><br>
          <span id="count"></span>
        </div>

        <div class="modal-body">
          Subject * <input type="text" name="subject" onkeyup="subjectVal()" class="form-control subject" placeholder="Subject Of Mail">
          <span id="subject_error" style="color: red;"></span>
          <br>
          Message * <textarea  name="message" onkeyup="subjectVal()" class="form-control message" placeholder="Message"></textarea>
          <span id="message_error" style="color: red;"></span>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-danger send_btn" data-dismiss="modal" >Send</button>
          <button type="button" class="btn btn-primary Cancel_btn" data-dismiss="modal" >Cancel</button>
          <img src="https://pmt.infowindtech.biz/ci/Demo/asset/gif/giphy.gif" id="gif_loader">
          <p id="response"></p>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>


<script type="text/javascript">
  var data = new Object();
  var email_length=0;
  $(document).ready(function () { 
    var oTable = $('#example').dataTable({
      "pageLength": 10,
      dom: 'Bfrtip',
      buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    var allPages = oTable.fnGetNodes();

    $('body').on('click', '#selectAll', function () {
        if ($(this).hasClass('allChecked')) {
            $('input[type="checkbox"]', allPages).prop('checked', false);
            $('.mail_btn').prop('disabled', true);
        } else {
            $('input[type="checkbox"]', allPages).prop('checked', true);
            $('.mail_btn').prop('disabled', false);
        }
        $(this).toggleClass('allChecked');
    }); 


    $(".send_btn").click(function(){
      $('.send_btn').prop('disabled', true);
      var From = $('.email_from_where').html();
      var To = $('.to_whom_mail').html();
      var Subject = $('.subject').val();
      var Message = $('.message').val(); 
     
     if(Subject=="" ){
       $('#subject_error').text("Please Enter Subject.");
       $('.send_btn').prop('disabled', true);
       return false;
     }else{
       $('#subject_error').text("");
     }

     if(Message==""){
       $('#message_error').text("Please Enter Message.");
       $('.send_btn').prop('disabled', true);
       return false;
     }else{
       $('#message_error').text("");
     }
      
       $('#gif_loader').css("visibility","visible");
        $.ajax({
          url: "<?php echo base_url('Employees_List/send_mail/'); ?>",
          type: 'POST',
          data: {from: From, to : To, subject: Subject, message: Message},
          error: function() {
          alert('Something is wrong');
          },
          success: function(data){
            $('.send_btn').prop('disabled', false);
            if (data!="") {
              $('#gif_loader').fadeOut(2000,function(){
                $('#response').html(email_length+' Mail Sent,Click Send Button To Send Again');
              });
            }
            else
            {
              $('#response').html('Mail is not Sent');
            }
          }
      });
    
    });
  

  /*    $(".subject, .message").keyup(function(){
      if ($(".subject, .message").val()=='') {
        $('.send_btn').prop('disabled', true);
      }
      else
      {
       $('.send_btn').prop('disabled', false); 
      }
    });*/
  
});

function get_selected(){
  var dataArr = [];
  
  $('.checkbox').each(function(index,el){
    if(this.checked==true)
    {
      var dataID = $(this).attr("data-id");
       dataArr.push(dataID+' , ');
    }
   });

  $('.email_from_where').html('kaushal.infowind@gmail.com');
  $('.to_whom_mail').html(dataArr);
  email_length = dataArr.length;
  $('#count').html('Total Selected : '+email_length);
}
$('.checkbox').click(function(){
  var i = 0;
  $('.checkbox').each(function(index,el){
    if(this.checked==true)
    {
        i++;
     }

  if(i > 0 ){
          $('.mail_btn').prop('disabled', false );
      }else{
          $('.mail_btn').prop('disabled', true);
      } 
 });
 
});


function subjectVal(evet){
$('.send_btn').prop('disabled', false);
  /*if ($(".subject, .message").val()=='') {
    $('.send_btn').prop('disabled', true);
  }
  else
  {
   $('.send_btn').prop('disabled', false); 
  }*/
}

 $('body').on('hidden.bs.modal', '.modal', function () {
   $(".email_from_where").html("");
   $(".to_whom_mail").html("");
   $(".subject").val("");
   $(".message").val("");
   $("#response").html("");
  });

</script>





