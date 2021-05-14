
<?php
//database conection  file
include('dbconnection.php');
include('auth_sessionadmin.php');

//Code for deletion
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$sql=mysqli_query($con,"delete from restro where ID=$rid");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'admin-dashboard.php'</script>";     
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>ADMIN_DASHBOARD</title>
<link rel="stylesheet" href="css/adminboard.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
    max-width: 100%;
    overflow-x: hidden;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    font-size: 15px;
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-height: 45px;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.table-title select {
    border-color: #ddd;
    border-width: 0 0 1px 0;
    padding: 3px 10px 3px 5px;
    margin: 0 5px;
}
.table-title .show-entries {
    margin-top: 7px;
}
.search-box {
    position: relative;
    float: right;
}
.search-box .input-group {
    min-width: 200px;
    position: absolute;
    right: 0;
}
.search-box .input-group-addon, .search-box input {
    border-color: #ddd;
    border-radius: 0;
}
.search-box .input-group-addon {
    border: none;
    border: none;
    background: transparent;
    position: absolute;
    z-index: 9;
}
.search-box input {
    height: 34px;
    padding-left: 28px;     
    box-shadow: none !important;
    border-width: 0 0 1px 0;
}
.search-box input:focus {
    border-color: #3FBAE4;
}
.search-box i {
    color: #a0a5b1;
    font-size: 19px;
    position: relative;
    top: 8px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table td:last-child {
    width: 130px;
}
table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
}
table.table td a.view {
    color: #03A9F4;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}    
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    padding: 0 10px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 30px !important;
    text-align: center;
}
.pagination li a:hover {
    color: #666;
}   
.pagination li.active a {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
}
.hm-gradient {
    background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
}
.navbar .dropdown-menu a:hover {
    color: #616161 !important;
}
.darken-grey-text {
    color: #2E2E2E;
}

</style>
</head>
<body class="hm-gradient">
<main>
<nav class="mb-4 navbar navbar-expand-lg navbar-light cyan">


    
               
                <a class="navbar-brand" href="#">
    <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> |
    <?php echo $_SESSION['username']; ?>_[OWNER]
    <a href="loginformail.php"  class="btn btn-info ">SEND_EMAIL</a>
  </a>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                   
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fa fa-envelope"></i> Send_Email</a>
                        </li>
                   
                         <li class="nav-item active dropdown"> 
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-address-card"></i> Forms </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                                <a class="dropdown-item" href="#2">Table_Booking</a>
                                <a class="dropdown-item" href="#3">Contact_Form</a>
                                <a class="dropdown-item" href="#4">Email_subscribers</a>
                            </div>
                            
                        </li>
                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <?php echo $_SESSION['username']; ?> </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                                <a class="dropdown-item" href="index.php">Home</a>
                                <a class="dropdown-item" href="logout.php">Log out</a>
                            </div>
                            
                        </li>
                    </ul>
                </div>
            </nav>
            <hr />
</main>





<form action="result.php" method="POST">
<center><h3 id="2">Search Database</h3></center>
<center><table>
<tr>
	<td>Search</td>
	<td><input type="text" placeholder="Enter any name..." name="fullname" validation size="40"></td>
	<td><input type="submit"  name="submit"></td>
    
</tr>
</table></center>
</form>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Table <b>Booking</b></h2>

                    </div>
                       <div class="col-sm-7" align="right">
                        <a href="insert.php" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New Booking</span></a>

                    </br>  </br>


                    </div>

               <div class="col-md-4">
             <a href="generate_pdf_tablebooking.php" class="btn btn-danger">REPORT</a>

                        
          

               </div>

                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col"> ID </th>
                            <th scope="col">fullname</th>
                            <th scope="col">email </th>
                            <th scope="col">Phone</th>
                            <th scope="col">date</th>
                            <th scope="col">time</th>
                            <th scope="col">person</th>
                            <th scope="col">restaurant</th>
                            <th scope="col">Time_of_feedback</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
$ret=mysqli_query($con,"select * from restro");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
<!--Fetch the Records -->
                    <tr>
                    <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['fullname']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['phone1']; ?></td>
                                <td><?php  echo $row['date']; ?></td>
                                <td><?php  echo $row['time']; ?></td>
                                <td><?php  echo $row['person']; ?></td>
                                <td><?php  echo $row['restaurant']; ?></td>
                                <td><?php  echo $row['Time_of_feedback']; ?></td>
                            
                        <td>
  <a href="read.php?viewid=<?php echo htmlentities ($row['id']);?>" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="edit.php?editid=<?php echo htmlentities ($row['id']);?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="admin-dashboard.php?delid=<?php echo ($row['id']);?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
                            <a href="mailto:<?php echo $record['email'] ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">mail</i></a>
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


<!--table2 ----------------------------------------------------------------------------------------------------------->

<form action="result2.php" method="POST">
<center><h3 id="3">Search Database</h3></center>
<center><table>
<tr>
	<td>Search</td>
	<td><input type="text" placeholder="Enter any name..." name="name" validation size="40"></td>
	<td><input type="submit" name="submit"></td>
</tr>
</table></center>
</form>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Contact <b>Form</b></h2>

                        <a href="generate_pdf_contactform.php" class="btn btn-info">REPORT</a>
                   
                        
                                        
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                            <th scope="col"> ID </th>
                            <th scope="col">name</th>
                            <th scope="col">email </th>
                            <th scope="col">subject</th>
                            <th scope="col">message</th>
                            <th scope="col">Time_of_feedback</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
$ret=mysqli_query($con,"select * from contactform");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
<!--Fetch the Records -->
                    <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['name']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['subject']; ?></td>
                                <td><?php  echo $row['message']; ?></td>
                                <td><?php  echo $row['Time_of_feedback']; ?></td>
                        <td>
 

                            <a href="mailto:<?php echo $record['email'] ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">mail</i></a>
                          
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

<!-- table3------------------------------------------------------ -->

<form action="result3.php" method="POST">
<center><h3 id="4">Search Database</h3></center>
<center><table>
<tr>
	<td>Search</td>
	<td><input type="text" placeholder="Enter any name..." name="email" validation size="40"></td>
	<td><input type="submit" name="submit"></td>
</tr>
</table></center>
</form>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Email <b>Subscribers</b></h2>

                    </div>
                       <div class="col-sm-7" align="right">
                     

                    </br>  </br>


                    </div>

               <div class="col-md-4">
             <a href="generate_pdf_emailsub.php" class="btn btn-warning">REPORT</a>

                        
          

               </div>

                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                            <th scope="col"> ID </th>
                            <th scope="col">EMAIL</th>
      

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
$ret=mysqli_query($con,"select * from newsletter");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
<!--Fetch the Records -->
                    <tr>
                    <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                    
                            
                        <td>
 
                            <a href="mailto:<?php echo $record['email'] ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">mail</i></a>
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




</body>
</html>