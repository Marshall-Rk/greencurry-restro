<!DOCTYPE html>
<html lang="en">
<?php
include('db.php');
session_start();

$loggedIn  =$_SESSION['id'];

// $res=mysqli_query($con,"select * from email_list ORDER BY `id` DESC");


if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
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
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Greencurry-Admin-Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- Preloader - style you can find in spinners.css -->
    <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div> -->
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b ><i class="fa fa-envelope-o " aria-hidden="true" style="color:white" ></i></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                      
                        
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                     
                       
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search -->
                      
                        
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                           
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                      
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sign-out  f-s-20 " style="color:#6C63FF" aria-hidden="true"></i></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="dashboard.php">Dashboard</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-label">Details</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false">  <span><i class="fa fa-user f-s-20 "></i></span><span class="hide-menu">Users</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="allusers.php">All Users</a></li>
							
								
                               
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Customised-Emails</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="allcustommail.php">Customised-Emails</a></li>
						
                                
                            </ul>
                        </li>

                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Total-Recipient-Emails</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="allemaillist.php">All-Emails</a></li>
						
                                
                            </ul>
                        </li>
                      
                      
					
                        
                         
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-dark "><span class="text-dark">ADMIN </span>- <span style="color:#6C63FF"> <?php echo $_SESSION['username']; ?> </span></h3>
                    
                    
                    
                    </div>
               <!-- <?php
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
?> -->
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                     <div class="row">
                   
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-users f-s-40 "style="color:#6C63FF" ></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                <h2>
                                <?php
   $connection_mysql = mysqli_connect("localhost","root","","email_list");
   
   if (mysqli_connect_errno($connection_mysql)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $sql = "SELECT email FROM pixelemail ";
   
   if ($result = mysqli_query($connection_mysql,$sql)){
      $rowcount = mysqli_num_rows($result);
      
      printf("   %d \n",$rowcount);
      mysqli_free_result($result);
   }
   mysqli_close($connection_mysql);
?></h2>
                                    <p class="m-b-0 text-bold">Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					
                  
					
					

                    

                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle"> 
                                    <span><i class="fa fa-envelope f-s-40 " style="color:#6C63FF" aria-hidden="true"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>
                                <?php
   $connection_mysql = mysqli_connect("localhost","root","","email_list");
   
   if (mysqli_connect_errno($connection_mysql)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $sql = "SELECT email FROM email_list ";
   
   if ($result = mysqli_query($connection_mysql,$sql)){
      $rowcount = mysqli_num_rows($result);
      
      printf("   %d \n",$rowcount);
      mysqli_free_result($result);
   }
   mysqli_close($connection_mysql);
?></h2>
                                    <p class="m-b-0">Recipients</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle"> 
                                    <span><i class="fa fa-lock f-s-40 " style="color:#6C63FF" aria-hidden="true"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                <h2>
                                <?php
   $connection_mysql = mysqli_connect("localhost","root","","email_list");
   
   if (mysqli_connect_errno($connection_mysql)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $sql = "SELECT email FROM admin_login ";
   
   if ($result = mysqli_query($connection_mysql,$sql)){
      $rowcount = mysqli_num_rows($result);
      
      printf("   %d \n",$rowcount);
      mysqli_free_result($result);
   }
   mysqli_close($connection_mysql);
?></h2>
                                    <p class="m-b-0">Admins</p>
                                </div>
                            </div>
                        </div>
                    </div>
	
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
        
            <footer class="footer">
            <img src="../images/undraw_remotely_2j6y.svg" alt="Image" height="255px" width="255px" class="img-fluid mb-0 mt-1"><br>
            
             © 2021 All rights reserved. Copyright EMAIL-QUANTAM                        
            </footer>

      
       
        
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>
