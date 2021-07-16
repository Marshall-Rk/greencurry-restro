<?php
include('db.php');
session_start();
if (isset($_SESSION['IS_LOGIN']))
$loggedIn  =$_SESSION['id'];
$res=mysqli_query($con,"select * from email_list WHERE `createdByWhom` = $loggedIn");

 {
		
}else{
	header("Location:login.php");
	die();
}


if(isset($_GET['delid2']))
 {
 $rid=intval($_GET['delid2']);
 $sql=mysqli_query($con,"delete from ckeditor where id=$rid");
 echo "<script>alert('Data deleted');</script>"; 
 echo "<script>window.location.href = 'index.php'</script>";     
 } 

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
      <title>Email-Quantum</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"
></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/jpg" href="logo.png"/>
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>



   </head>
   
   <body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg  bg-dark white-text">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
    
  
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" style="color:#a7a3f3;" target="_blank" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#a7a3f3;" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#a7a3f3;" target="_blank" href="http://bit.ly/nextgenpixel">Nextgenpixel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#a7a3f3;" target="_blank" href="reset-password.php">Reset-Password</a>
        </li>
      </ul>
   
    </div>
 
    <div class="d-flex align-items-center">
      <!-- Icon -->

      <a class="text-reset me-3 " target="_blank" >
        <i class="fas fa-circle fa-sm"  style="color:#2de209;">&nbsp;<span style="color:#a7a3f3"><?php echo $_SESSION['username']; ?></i>
      </a>
      <a class="text-reset me-3 " target="_blank" href="http://bit.ly/nextgenpixel">
        <i class="fas fa-home" style="color:white"></i>
      </a>
      
      <!-- <a class="text-reset me-3 " target="_blank" href="https://www.instagram.com/nextgenpixel/">
        <i class="fas fa-envelope" style="color:white"></i>
      </a>
       -->
      <a class="text-reset me-3 text-large"  >
        <i class="fas fa-sign-out-alt" data-mdb-toggle="modal" data-mdb-target="#exampleModal" style="color:white"></i>
        <div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">You sure you want to logout?</h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
        <a type="button" href="logout.php" class="btn btn-primary">yes</a>
      </div>
    </div>
  </div>
</div>
      </a>

  
      <a
        class="dropdown-toggle d-flex align-items-center hidden-arrow"
        href="#"
        id="navbarDropdownMenuLink"
        role="button"
        data-mdb-toggle="dropdown"
        aria-expanded="false"
      >
        <img
          src="images/gmail.jpg"
          class="rounded-circle"
          height="25"
          alt=""
          loading="lazy"
        />
    

      </a>
      <ul
        class="dropdown-menu dropdown-menu-end"
        aria-labelledby="navbarDropdownMenuLink"
      >
        <li>
          <a class="dropdown-item" target="_blank" href="http://bit.ly/nextgenpixel">My profile</a>
        </li>
        <li>
          <a class="dropdown-item" target="_blank" href="https://linktr.ee/official_nextgenpixel">Linktree</a>
        </li>
      
      </ul>
    </div>

  </div>

</nav>
<!-- Navbar -->
    
      <div class="container-fluid px-2 py-2" >
         <h2 class="text-dark"> Welcome to Email-Quantum [<?php echo $_SESSION['username']; ?>] </h2>
 		
		 
		 <form class="" action="edit.php" method="post">
		 <br/>
		 <a href="edit.php" type="button" class="btn btn-primary"><i class="fa fa-sync-alt"></i> UPDATE-SENTMAIL</a>
		
     <button type="button" class="btn btn-primary" id="sendMail"><i class="fas fa-share-square"></i> SEND-TO-ALL</button>

		 <form class="" action="insert.php" method="post">
		 <a href="insert.php" type="button" class="btn btn-primary "><i class="fas fa-envelope"></i> ADD-EMAIL</a>

     <form class="" name="mssg" action="insertmsg.php" method="post">
		 <a href="insertmsg.php" type="button" class="btn btn-primary "> ADD-MESSAGE</a>

     

    
		 <br><br>
		
		 <div id="emailMsg"></div>
        <!-- <button type="button" class="btn btn-danger" id="sendMail">SEND-TO-ALL</button>
        <a href="logout.php" class="btn btn-primary ">Sign Out</a> -->


</br></br>  
<div class="container-fluid">
    <div class="table-fluid">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5" id="3">
                        <h2>Your Created <b>Message</b></h2>
                                <h5 class="text-danger">Limiatation of Adding Email is only One! But you can Edit Email Content Multiple times. </h5 >          
                        </br>  </br>  
                                        
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                            <th scope="col"> ID </th>
                            <th scope="col">Content</th>
                           
                            <th scope="col">Email</th>                         
                            <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
                     $loggedIn  =$_SESSION['id'];
$ret=mysqli_query($con,"select * from email_list WHERE `createdByWhom` = $loggedIn" );
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
<!--Fetch the Records -->
                    <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['content']; ?></td>
                              
                           
                                
                        <td>
 
                        <a href="index.php?delid2=<?php echo ($row['id']);?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
                      
                        <a href="insertmsg.php" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>

                        </td> 
                    </tr>
                    <?php 
$cnt=$cnt+1;
} } else {?>
<tr>
    <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
</tr>
<?php } ?>                 
                
                </tbody>
            </table>
       
        </div>
    </div>
</div>  
<br>

<h4 class="text-bold text-danger px-2" ><a href="edit.php" type="button" class="btn btn-primary btn-sm py-2"><i class="fa fa-sync-alt"></i> UPDATE-SENTMAIL</a> To Reset the Sent Mail </h4>
<br>

		 <?php if(mysqli_num_rows($res)>0){?>
			
         <table  class="table table-bordered-fluid table-sm  "  id="table">
		 
            <thead>
               <tr style="background-color: #ffff;" >
                  <th>S.No</th>
                  <th>Email</th>
                  <th>Send-HTML-Email</th>
                  <th>SendCustomMail</th>
                  <th>Delete</th>
                  <?php if ($_SESSION['id'] == 3) { ?>
                  <th>Edit</th>
                  <?php } ?>
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
					<button type="button" class="btn btn-primary" onclick="send_msg2('<?php echo $row['id']?>')"><i class="fas fa-envelope"></i> MAIl</button>
				  <?php } else {
					  echo "Sent";
				  }?>
				  </td>

          <td id="btn<?php echo $row['id']?>">
				  <?php if($row['send']==0){?>
					<button type="button" class="btn btn-info" onclick="send_msg('<?php echo $row['id']?>')"><i class="fas fa-pen-square"></i> SEND</button>
				  <?php } else {
					  echo "Sent";
				  }?>
				  </td>

          

	
          <?php if ($_SESSION['id'] == 3) { ?>
			  <td>
                        
        <a href="index.php?delid=<?php echo ($row['id']);?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
                </td>
                 
                       <?php } ?>

                <td>
                <a href="editmail.php?editid=<?php echo htmlentities ($row['id']);?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                       </td>
                     
             


					   <td><input type="checkbox" id="cbox" style="width: 40px;" class="email form-check-input form-control" name="email" value="<?php echo $row['email'] ?>"></td>
					

	               </tr>
			   
			   <?php 
			   } ?>
			     
            </tbody>
         </table>
		 <?php } else {
			 echo "No data found";
		 }?>
      </div>

<!-- sendmail script -->
	  <script>
	  function send_msg(id){
		  var check=confirm('Are your sure?');
		  if(check==true){
			  jQuery('#btn'+id).html('Sending Mail...');
			  jQuery.ajax({
				  url:'custommsg.php',
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
<!-- senmail script -->
<script>
	  function send_msg2(id){
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