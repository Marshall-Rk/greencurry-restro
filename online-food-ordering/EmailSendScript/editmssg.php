<?php include('db.php'); ?>
<?php
session_start();
if(isset($_GET["id"])){
    $id=$_POST['id'];
    $content=$_POST['editor'];
}
else{
header('index.php?sucess=0');

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Update Data</title>
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
<script type="text/javascript" src=ckeditor/ckeditor.js></script>
</head>
<body>
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
<form action="update_post.php" method="post"> 
<textarea class="ckeditor" name="editor">
<?php
$eid=$_GET['editid'];

$ret=mysqli_query($con,"select * from email_list where ID='$eid'");
$row=mysqli_fetch_array($ret) ;
	  echo $row['content'];
      
     ?>
</textarea>

<?php 
?>
	
<button class="btn btn-success btn-sm px-2" type="submit">Update Data</button>
<a href="index.php" class="btn btn-danger btn-sm">
			<i class="fas fa-arrow-left"></i> Back</a>
                          </a>
</form>
</body>
</html>
