<?php
include('auth_sessionadmin.php');
include('db2.php');
include('dbconnection.php');

$res=mysqli_query($con,"select * from email_list");


 if(isset($_GET['delid']))
 {
 $rid=intval($_GET['delid']);
 $sql=mysqli_query($con,"delete from email_list where id=$rid");
 echo "<script>alert('Data deleted');</script>"; 
 echo "<script>window.location.href = 'sendemailtoeveryone.php'</script>";     
 } 

?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Email Sending Script</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="styless.css">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


	  <style>
	  .container{width:700px;margin-top:50px; background-image: url(slide_2.jpg);}
	  </style>
   </head>
   <body>
 
      <div class="container-fluid " >
         <h2>Email Sending</h2>

         <a href="admin-dashboard.php" type="button" class="btn btn-success"><-BACK</a>


		 <form class="" action="edit2.php" method="post">
		 <br/>
		 <a href="edit2.php" type="button" class="btn btn-danger">RESET_ALL</a>
		
		 <form class="" action="insert2.php" method="post">
		 <a href="insert2.php" type="button" class="btn btn-info float-right">ADD_EMAIL</a>
       
        
	
</br></br>


		 <?php if(mysqli_num_rows($res)>0){?>
			
         <table class="table table-bordered-fluid ">
		 
            <thead>
               <tr>
                  <th>S.No</th>
                  <th>Email</th>
                  <th>Send</th>
				  <th>Delete</th>
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
					<button type="button" class="btn btn-info" onclick="send_msg('<?php echo $row['id']?>')">SEND</button>
				  <?php } else {
					  echo "Sent";
				  }?>
				  </td>

	
				 
			  <td>
                  <a href="sendemailtoeveryone.php?delid=<?php echo ($row['id']);?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
                        
                       </td>
					

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






   </body>
</html>