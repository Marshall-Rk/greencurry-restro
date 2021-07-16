<?php
include('db.php');
include_once('config2.php');
session_start();
$loggedIn  =$_SESSION['id'];
$res=mysqli_query($con,"select * from email_list WHERE `createdByWhom` = $loggedIn");


if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
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
   <button
        type="button"
        class="btn btn-primary btn-floating btn-lg"
        id="btn-back-to-top"
        <i class="fas fa-arrow-up"></i>
        ↑
</button>
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
          <a class="nav-link" style="color:#a7a3f3;"  href="index.php">Home</a>
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
          <a class="dropdown-item"href="editprofile.php" >Profile</a>
        </li>
        <li>
          <a class="dropdown-item"href="insertfile.php" >Add-File</a>
        </li>
        <li>
          <a class="dropdown-item"href="insertcontact.php" >Add-contacts-File</a>
        </li>
        <li>
          <a class="dropdown-item" href="#">


          <?php
   $connection_mysql = mysqli_connect("localhost","root","","email_list");
   
   if (mysqli_connect_errno($connection_mysql)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $sql = "SELECT email FROM email_list  WHERE `createdByWhom` = $loggedIn ";
   
   if ($result = mysqli_query($connection_mysql,$sql)){
      $rowcount = mysqli_num_rows($result);
      
      printf("Total Recipient - %d \n",$rowcount);
      mysqli_free_result($result);
   }
   mysqli_close($connection_mysql);
?>





          </a>
        </li>
        <li>
          <a class="dropdown-item" href="#">


          <?php
                     $loggedIn  =$_SESSION['id'];
$ret=mysqli_query($con,"select * from pixelemail WHERE `id` = $loggedIn ");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>

<!--Fetch the Records -->
           
                           
                         
                    <td>Account - <span style="color:#2de209"><?php  echo $row['accstatus']; ?></td>
                              
                           
                                
                        
                  
                    <?php 
$cnt=$cnt+1;
} } else {?>
<tr>
    <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
</tr>
<?php } ?>  


          </a>
        </li>

        
        <li>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </li>
      
      </ul>
    </div>

  </div>

</nav>
<!-- Navbar -->
<!-- <tbody>

			<?php
			include('db.php');
      include_once('config2.php');
				
				
				$query=$con->query("select * from `pixelemail` where `id` ='".$_SESSION['id']."' ");
				while($row=$query->fetch_array()){
					?>
						<tr>
              Account-CreatedAt: 
							<td><?php echo $row['date']; ?></td>
              <br>
              Account-Status: 
							<td><?php echo $row['accstatus']; ?></td>
              <br>
              Expiry-Date: 
							<td>
								<?php
						
									$today=date('Y-m-d H:i:s');
								
									$expire=date('Y-m-d H:i:s', strtotime($row['date']. '+24 days'));
									
									if ($today>=$expire){
										$con->query("update `pixelemail` set accstatus='Expire' where `id` ='".$_SESSION['id']."'");
										echo $expire;
									}
                  
									else{
										echo $expire;
									}
								?>
							</td>
						</tr>
					
					<?php 
				}
			
			?>
		</tbody> -->
    <!-- <accstatus> -->
      
    <div class="site-section cta-big-image" id="about-section">
   
       
      <div class="container">
         
       
        <div class="row mb-5">
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            
            <img src="data/gg.jpg" alt="Image" class="img-fluid" style="border-radius: 10%;">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4" >
              <h3 class="h3 mb-4 text-black" >Target your Right Audience:</h3>
              <p>Professionally, this tool can be your one stop solution for all your E-mail Marketing needs and it'll not only help to get into your client's inbox but also get their engagement.</p>
              
            </div>
            
            
              
            <div class="mb-4">
              <ul class="list-styled ul-check success">
              <li>Flexible for Small as well Medium scale business.</li>
                <li>Multi-User Feature with Simple as well as minimalistic interface which is easy to use.</li>
                <li>User can add unlimited number of recipient Email Id.</li>
                <li>Efficient in sending Email to single as well as multiple Email id at once.</li>
                <li>User can create their own professional Email Design with Add-message feature and can send it at the same time.</li>
              </ul>
              
            </div>

            
            
          </div>
        </div>
      </div>  
    </div>
      <div class="container-fluid px-2 py-2" >
      
		 
		 <!-- <form class="" action="edit.php" method="post">
		 <br/>
		 <a href="edit.php" type="button" class="btn btn-primary mb-2 ml-1 "><i class="fa fa-sync-alt"></i> UPDATE-SENTMAIL</a>
		 -->
     

		 <form class="" action="insert.php" method="post">
		 <a href="insert.php" type="button" class="btn btn-primary mb-2 ml-1  "><i class="fas fa-envelope"></i> ADD-EMAIL</a>

     <form class="" name="mssg" action="insertmsg.php" method="post">
		 <a href="insertmsg.php" type="button" class="btn btn-primary mb-2 ml-1  "> <i class="fas fa-edit"></i> ADD-MESSAGE</a>

         
		 <br>
		
		
       

</br>
<div class="container-fluid">
    <div class="table-fluid" style="overflow-x: auto;">
        <div class="table-wrapper">

       

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                          
                      
                          
                            <th scope="col"><h2>YOUR-CUSTOMISED-EMAIL </h2></th>                         
                            <th scope="col"><h2>Action </h2></th>
                    </tr>
                </thead>
                <tbody>
                     <?php
                     $loggedIn  =$_SESSION['id'];
$ret=mysqli_query($con,"select * from email_list WHERE `createdByWhom` = $loggedIn limit 1");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>

<!--Fetch the Records -->
                    <tr>
                           
                         
                                <td style="height:200px"><?php  echo $row['content']; ?></td>
                              
                           
                                
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

<h4 class="text-bold text-danger px-2" ><a href="edit.php" type="button" class="btn btn-primary btn-sm py-2"><i class="fa fa-sync-alt"></i> UPDATE-SENTMAIL</a> Click to Reset the Sent Mail </h4>
<br>

<div id="emailMsg"></div>
<div id="emailMsg2"></div>

		 <?php if(mysqli_num_rows($res)>0){?>
			
         <table  class="table table-bordered-fluid table-sm  " id="table" >
		 
            <thead>
               <tr style="background-color: #ffff;" >
                  <th>S.No</th>
                  <th>Email</th>
                    <!-- <sedntoall> -->
                  <th>Send-HTML-Email 
                  <br>
                  <button type="button" class="btn btn-success btn-sm " id="sendMail"><i class="fas fa-share-square"></i> SEND-TO-ALL</button></th>

                  <th>SendCustomMail<br>
                  <button type="button" class="btn btn-success btn-sm " id="sendMail2"><i class="fas fa-share-square"></i> SEND-TO-ALL</button></th>
                   <!-- <sedntoall> -->
                  <th>Delete/Edit</th>
               	  <th>   <input type="checkbox" id="checkAll" > Select-All <br>
                
                   </th>
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

          

	
       
			  <td>
                        
        <a href="index.php?delid=<?php echo ($row['id']);?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
        <a href="editmail.php?editid=<?php echo htmlentities ($row['id']);?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                </td>
                 
                <td><input type="checkbox" id="checkItem" style="width: 40px;" class="email form-check-input form-control" name="email" value="<?php echo $row['email'] ?>"></td>
                       <?php } ?>

<script>
$('#checkAll').click(function () {    
     $('input:checkbox').prop('checked', this.checked);    
 });
</script>

	               </tr>
			   
			
			     
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


<!-- sentocustomallmail script -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#sendMail2").click(function(){
      
      var email = [];
      
      $(".email:checked").each(function(){
        email.push($(this).val());
      });

      if (email.length > 0) {
          $("#emailMsg2").html('<div class="alert alert-warning">Please wait...!</div>');
          $.ajax({
            url:'sendcustomtoall.php',
            type : "POST",
            cache:false,
            data : {email:email},
            success:function(response){
              if(response == true) {
                $("#emailMsg2").html("response"); 
              }else{
                $("#emailMsg2").html('');
              }
            }
          });
      }else{
        $("#emailMsg2").html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button> Plase Select at least one checkbox </div>');
      }
    });
  });
</script>
<!-- senmailcustomscript -->


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





<script>
//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
   </body>
</html>