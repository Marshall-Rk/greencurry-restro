<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include('db.php');
$res=mysqli_query($con,"select * from email_list");
 if(isset($_GET['delid']))
 {
 $rid=intval($_GET['delid']);
 $sql=mysqli_query($con,"delete from email_list where id=$rid");
 echo "<script>alert('Data deleted');</script>"; 
 echo "<script>window.location.href = 'index.php'</script>";     
 } 

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="style.css">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link rel="shortcut icon" type="image/jpg" href="logo.png"/>
<style>
	  .container{width:700px;margin-top:50px; background-image: url(slide_2.jpg);}
	  </style>
</head>
<body>
    
    <h4 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?> Welcome to Email-Quantum</b></h4>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>

    </p>

    <div class="container-fluid px-2" >
      
 		
		 
		 <form class="" action="edit.php" method="post">
		 <br/>
		 <a href="edit.php" type="button" class="btn btn-danger">RESET_ALL</a>
		
		 <form class="" action="insert.php" method="post">
		 <a href="insert.php" type="button" class="btn btn-primary float-right">ADD_EMAIL</a>

		 <br><br>
		
		 <div id="emailMsg"></div>
        <button type="button" class="btn btn-success" id="sendMail">SEND_TO_ALL</button>
</br></br>


		 <?php if(mysqli_num_rows($res)>0){?>
			
         <table  class="table table-bordered-fluid "  id="table">
		 
            <thead>
               <tr style="background-color: #ffff;" >
                  <th>S.No</th>
                  <th>Email</th>
                  <th>Send</th>
				  <th>Delete</th>
				  <th>Select</th>
               </tr>
            </thead>
            <tbody>
			   <?php 
			   $i=1;
			   while($row=mysqli_fetch_assoc($res)){?>	
               <tr>
                  <td><?php echo $i++?></td>
                  <td><?php echo $row['email']?></td>
				  
                  <td id="btn<?php echo $row['id']?>">
				  <?php if($row['send']==0){?>
					<button type="button" class="btn btn-primary" onclick="send_msg('<?php echo $row['id']?>')">SEND</button>
				  <?php } else {
					  echo "Sent";
				  }?>
				  </td>

	
				 
			  <td>
                  <a href="index.php?delid=<?php echo ($row['id']);?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
                        
                       </td>
					   <td><input type="checkbox" style="background-color: red;" id="cbox" class="email form-control" name="email" value="<?php echo $row['email'] ?>"></td>
					

	               </tr>
			   
			   <?php 
			   } ?>
			     
            </tbody>
         </table>
		 <?php } else {
			 echo "No data found";
		 }?>
      </div>


	  <script>
	  function send_msg(id){
		  var check=confirm('Are your sure?');
		  if(check==true){
			  jQuery('#btn'+id).html('Sending Mail...');
			  jQuery.ajax({
				  url:'send_msg.php',
				  type:'post',
				  data:'id='+id,
				  success:function(result){
					  result=jQuery.parseJSON(result);
					  console.log(result.status);
					  if(result.status==true){
						  jQuery('#btn'+id).html('Sent');
					  }
					  if(result.status==false){
						  jQuery('#btn'+id).html('<button type="button" class="btn btn-success" onclick=send_msg("'+id+'")>Send</button><div clsss="error_msg">'+result.msg+'</div>');
					  }
				  }
			  });
		  }
	  }
	  </script>

<!-- sentoallmail script -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#sendMail").click(function(){
      
      var email = [];
      
      $(".email:checked").each(function(){
        email.push($(this).val());
      });

      if (email.length > 0) {
          $("#emailMsg").html('<div class="alert alert-primary">Please wait...!</div>');
          $.ajax({
            url:'sendtoall.php',
            type : "POST",
            cache:false,
            data : {email:email},
            success:function(response){
              if(response == true) {
                $("#emailMsg").html("response"); 
              }else{
                $("#emailMsg").html('');
              }
            }
          });
      }else{
        $("#emailMsg").html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button> Plase Select at least one checkbox </div>');
      }
    });
  });
</script>
</body>

</html>