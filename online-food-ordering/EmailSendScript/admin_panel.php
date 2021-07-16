<?php
include('db.php');
session_start();

$loggedIn  =$_SESSION['id'];

// $res=mysqli_query($con,"select * from email_list ORDER BY `id` DESC");


if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: admin_login.php");
    exit;
}

if(isset($_GET['delidid']))
{
$rid=intval($_GET['delidid']);
$sql=mysqli_query($con,"delete from email_list where id=$rid");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'admin_panel.php'</script>";     
} 


if(isset($_GET['delidpixel']))
{
$rid=intval($_GET['delidpixel']);
$sql=mysqli_query($con,"delete from pixelemail where id=$rid");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'admin_panel.php'</script>";     
} 

 if(isset($_GET['delid']))
 {
 $rid=intval($_GET['delid']);
 $sql=mysqli_query($con,"delete from email_list where id=$rid");
 echo "<script>alert('Data deleted');</script>"; 
 echo "<script>window.location.href = 'admin_panel.php'</script>";     
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <head>

   
</head>



   </head>
   
   <body>
   <!-- <style>
body{margin:0;width:100%;height:100%} body,td,input,textarea,select{font-family:arial,sans-serif} input,textarea,select{font-size:100%} #loading{position:absolute;width:100%;height:100%;z-index:1000;background-color:#fff} .msg{ color: #757575; font: 20px/20px Arial, sans-serif; letter-spacing: .2px; text-align: center } #nlpt{ animation: a-s .5s 2.5s 1 forwards; background-color: #f1f1f1; height: 4px; margin: 56px auto 20px; opacity: 0; overflow: hidden; position: relative; width: 300px } #nlpt::before{ animation: a-lb 20s 3s linear forwards; background-color: #6f31d2; content: ''; display: block; height: 100%; position: absolute; transform: translateX(-300px); width: 100% } @keyframes a-lb{ 0%{transform:translateX(-300px)}5%{transform:translateX(-240px)}15%{transform:translateX(-30px)}25%{transform:translateX(-30px)}30%{transform:translateX(-20px)}45%{transform:translateX(-20px)}50%{transform:translateX(-15px)}65%{transform:translateX(-15px)}70%{transform:translateX(-10px)}95%{transform:translateX(-10px)}100%{transform:translateX(-5px)} } @keyframes a-s{ 100%{opacity:1} } @keyframes a-h{ 100%{opacity:0} } @keyframes a-nt{ 100%{transform:none} } @keyframes a-e{ 43%{animation-timing-function:cubic-bezier(.8,0,.2,1);transform:scale(.75)} 60%{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-16px)} 77%{animation-timing-function:cubic-bezier(.16,0,.2,1);transform:none} 89%{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-5px)} 100%{transform:none} } @keyframes a-ef{ 24%{animation-timing-function:cubic-bezier(.8,0,.6,1);transform:scaleY(.42)} 52%{animation-timing-function:cubic-bezier(.63,0,.2,1);transform:scaleY(.98)} 83%{animation-timing-function:cubic-bezier(.8,0,.84,1);transform:scaleY(.96)} 100%{transform:none} } @keyframes a-efs{ 24%{animation-timing-function:cubic-bezier(.8,0,.6,1);opacity:.3} 52%{animation-timing-function:cubic-bezier(.63,0,.2,.4);opacity:.03} 83%{animation-timing-function:cubic-bezier(.8,0,.84,1);opacity:.05} 100%{opacity:0} } @keyframes a-es{ 24%{animation-timing-function:cubic-bezier(.8,0,.6,1);transform:rotate(-25deg)} 52%{animation-timing-function:cubic-bezier(.63,0,.2,1);transform:rotate(-42.5deg)} 83%{animation-timing-function:cubic-bezier(.8,0,.84,1);transform:rotate(-42deg)} 100%{transform:rotate(-43deg)} } .invfr{position:absolute;left:0;top:0;z-index:-1;width:0;height:0;border:0} .msgb{position:absolute;right:0;font-size:12px;font-weight:normal;color:#000;padding:20px}

</style>

<div id="loading"><div style="bottom:0;left:0;overflow:hidden;position:absolute;right:0;top:0"><div style="animation:a-h .5s 1.25s 1 linear forwards,a-nt .6s 1.25s 1 cubic-bezier(0,0,.2,1);background:#eee;border-radius:50%;height:800px;left:50%;margin:-448px -400px 0;position:absolute;top:50%;transform:scale(0);width:800px"></div></div><div style="height:100%;text-align:center"><div style="height:50%;margin:0 0 -140px"></div><div style="height:128px;margin:0 auto;position:relative;width:176px"><div style="animation:a-s .5s .5s 1 linear forwards,a-e 1.75s .5s 1 cubic-bezier(0,0,.67,1) forwards;opacity:0;transform:scale(.68)"><div style="background:#ddd;border-radius:12px;box-shadow:0 15px 15px -15px rgba(0,0,0,.3);height:128px;left:0;overflow:hidden;position:absolute;top:0;transform:scale(1);width:176px"><div style="animation:a-nt .667s 1.5s 1 cubic-bezier(.4,0,.2,1) forwards;background:#6f31d2;border-radius:50%;height:270px;left:88px;margin:-135px;position:absolute;top:25px;transform:scale(.5);width:270px"></div><div style="height:128px;left:20px;overflow:hidden;position:absolute;top:0;transform:scale(1);width:136px"><div style="background:#e1e1e1;height:128px;left:0;position:absolute;top:0;width:68px"><div style="animation:a-h .25s .25s 1 forwards;background:#eee;height:128px;left:0;opacity:1;position:absolute;top:0;width:68px"></div></div><div style="background:#eee;height:100px;left:1px;position:absolute;top:56px;transform:scaleY(.73)rotate(135deg);width:200px"></div></div><div style="background:#bbb;height:176px;left:0;position:absolute;top:-100px;transform:scaleY(.73)rotate(135deg);width:176px"><div style="background:#eee;border-radius:12px 12px 0 0;bottom:117px;height:12px;left:55px;position:absolute;transform:rotate(-135deg)scaleY(1.37);width:136px"></div><div style="background:#eee;height:96px;position:absolute;right:0;top:0;width:96px"></div><div style="box-shadow:inset 0 0 10px #888;height:155px;position:absolute;right:0;top:0;width:155px"></div></div><div style="animation:a-s .167s 1.283s 1 linear forwards,a-es 1.184s 1.283s 1 cubic-bezier(.4,0,.2,1) forwards;background:linear-gradient(0,rgba(38,38,38,0),rgba(38,38,38,.2));height:225px;left:0;opacity:0;position:absolute;top:0;transform:rotate(-43deg);transform-origin:0 13px;width:176px"></div></div><div style="animation:a-ef 1.184s 1.283s 1 cubic-bezier(.4,0,.2,1) forwards;border-radius:12px;height:100px;left:0;overflow:hidden;position:absolute;top:0;transform:scaleY(1);transform-origin:top;width:176px"><div style="height:176px;left:0;position:absolute;top:-100px;transform:scaleY(.73)rotate(135deg);width:176px"><div style="animation:a-s .167s 1.283s 1 linear forwards;box-shadow:-5px 0 12px rgba(0,0,0,.5);height:176px;left:0;opacity:0;position:absolute;top:0;width:176px"></div><div style="background:#ddd;height:176px;left:0;overflow:hidden;position:absolute;top:0;width:176px"><div style="animation:a-nt .667s 1.25s 1 cubic-bezier(.4,0,.2,1) forwards;background:#6f31d2;border-radius:50%;bottom:41px;height:225px;left:41px;position:absolute;transform:scale(0);width:225px"></div><div style="background:#f1f1f1;height:128px;left:24px;position:absolute;top:24px;transform:rotate(90deg);width:128px"></div><div style="animation:a-efs 1.184s 1.283s 1 cubic-bezier(.4,0,.2,1) forwards;background:#fff;height:176px;opacity:0;transform:rotate(90deg);width:176px"></div></div></div></div></div></div><div id="nlpt"></div><div style="animation:a-s .2s 1.25s 1 forwards;opacity:0" class="msg">Loading Email-Quantam...</div></div></div>

<script>
  jQuery(window).load(function() {
// will first fade out the loading animation
jQuery("#style").fadeOut();
// will fade out the whole DIV that covers the website.
jQuery("#loading").delay(3000).fadeOut("slow");
})
</script> -->

   <button
        type="button"
        class="btn btn-primary btn-floating btn-lg"
        id="btn-back-to-top"
        <i class="fas fa-arrow-up"></i>
        ↑
</button>
<!-- <scrolltotop> -->
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
          <a class="nav-link" style="color:#a7a3f3;"  href="#4">Email_List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#a7a3f3;"  href="#3">Users Message</a>
        </li>
      </ul>
   
    </div>
 
    <div class="d-flex align-items-center">
      <!-- Icon -->

      <a class="text-reset me-3 " target="_blank" >
        <i class="fas fa-circle fa-sm"  style="color:#2de209;">&nbsp;Admin: <span style="color:#a7a3f3"><?php echo $_SESSION['username']; ?></i>
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
         <h2 class="text-dark ml-3"> Welcome  to Email-Quantum [<span style="color:#008000">Admin:</span> <?php echo $_SESSION['username']; ?>] </h2>

       
<!-- 		 
		 <form class="" action="edit.php" method="post">
		 <br/>
		 <a href="edit.php" type="button" class="btn btn-primary">RESET-ALL</a>
		
		 <form class="" action="insert.php" method="post">
		 <a href="insert.php" type="button" class="btn btn-primary ">ADD-EMAIL</a>

     <button type="button" class="btn btn-primary" id="sendMail">SEND-TO-ALL</button> -->
     </br>
     <div class="container-fluid">
    <div class="table-fluid"  style="overflow-x: auto;">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row text-bold">
                    <div class="col-sm-5">

                   
                    <h2 >
  
       
                        <h2 >CUSTOMER-LIST</h2>

                        <a href="generate_pdf_userid.php" class="btn btn-primary">REPORT</a>
                        <button type="button"  class="btn btn-success btn-rounded ">  
                       <?php
   $connection_mysql = mysqli_connect("localhost","root","","email_list");
   
   if (mysqli_connect_errno($connection_mysql)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $sql = "SELECT email FROM email_list ";
   
   if ($result = mysqli_query($connection_mysql,$sql)){
      $rowcount = mysqli_num_rows($result);
      
      printf("Total Recipient - %d \n",$rowcount);
      mysqli_free_result($result);
   }
   mysqli_close($connection_mysql);
?></h2>

</button>
                        </br>  </br>  
                                        
                    </div>
                </div>
            </div>
            <table class="table table-fluid table-striped table-hover">
                <thead>
                    <tr>
                            <th scope="col"> ID </th>
                            <th scope="col">Email</th>
                            <th scope="col">username </th>    
                            <th scope="col">mobile_number </th>  
        
                            <th scope="col">AadharCard_number </th>  
                            <th scope="col">AadharCard_Image </th>  
                            <th scope="col">Delete </th>                          
                      
                    </tr>
                </thead>
                <tbody>
                     <?php
$ret=mysqli_query($con,"select * from pixelemail ORDER BY `id` desc" );
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
<!--Fetch the Records -->

                    <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['username']; ?></td>
                                <td><?php  echo $row['mobile_number']; ?></td>
                       
                                <td><?php  echo $row['AadharCard_number']; ?></td>

                                <td><!-- Button trigger modal -->
<button
  type="button"
  class="btn btn-primary"
  data-mdb-toggle="modal"
  data-mdb-target="#imgmodd<?= $row['id'] ?>"
>
  View Image
</button>

<!-- Modal -->
<div
  class="modal fade"
  id="imgmodd<?= $row['id'] ?>"
  tabindex="-1"
  aria-labelledby="imgmoddLabel<?= $row['id'] ?>"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imgmoddLabel<?= $row['id'] ?>">Modal title</h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body" style="width: 900px;">
      <img src="uploaded/<?= $row['image'] ?>" height="400px" width="400px">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>


<td>


                                <td>
                        
                        <a href="admin_panel.php?delidpixel=<?php echo ($row['id']);?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
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






		 <br><br>
		
		 <div id="emailMsg"></div>
        <!-- <button type="button" class="btn btn-danger" id="sendMail">SEND-TO-ALL</button>
        <a href="logout.php" class="btn btn-primary ">Sign Out</a> -->




<!-- Button trigger modal -->

<!-- <-USERID--> 

<div class="container-fluid">
    <div class="table-fluid"  style="overflow-x: auto;">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5" id="3">
                        <h2>Users <b>Message</b></h2>

                        <a href="generate_pdf_usercustomemail.php" class="btn btn-primary">REPORT</a>
                   
                        </br>  </br>  
                                        
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                            <th scope="col"> ID </th>
                            <th scope="col">Content</th>
                            <th scope="col">UserWhocreated</th>      
                            <th scope="col">IDWhocreated</th>  
                            <th scope="col">Created_At</th>                         
                            <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
$ret=mysqli_query($con,"select * from email_list ORDER BY `ID` DESC" );
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
<!--Fetch the Records -->
                    <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['content']; ?></td>
                                <td><?php  echo $row['UserWhocreated']; ?></td>
                                <td><?php  echo $row['createdByWhom']; ?></td>
                                <td><?php  echo $row['createdAt']; ?></td>
                                
                        <td>
 
                        <a href="admin_panel.php?delidid=<?php echo ($row['id']);?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
                      
                        

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

<!-- <-USERID--> 

<!-- user list --> 


<div class="container-fluid">
    <div class="table-fluid"  style="overflow-x: auto;">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5" id="4">
                        <h2>Email <b>LIst</b></h2>

                        <a href="generate_pdf_allinfo.php" class="btn btn-primary">REPORT</a>
                   
                        </br>  </br>  
                                        
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                            <th scope="col"> ID </th>
                            <th scope="col">Email</th>
                            <th scope="col">UserWhocreated</th>
                            <th scope="col">userID</th>                           
                            <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
$ret=mysqli_query($con,"select * from email_list ORDER BY `id` DESC" );
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
<!--Fetch the Records -->
                    <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['UserWhocreated']; ?></td>
                                <td><?php  echo $row['createdByWhom']; ?></td>
                                
                        <td>
 
                        <a href="admin_panel.php?delid=<?php echo ($row['id']);?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>

                        <a href="editmail.php?editid=<?php echo htmlentities ($row['id']);?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        
                        <a href="mailto:<?php echo $record['email'] ?>" class="mail" title="mail" data-toggle="mail"><span class="material-icons">mail</span></a>
                          
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


		 
<!-- user list --> 


<!-- senmail script -->
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