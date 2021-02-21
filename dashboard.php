<?php

include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - ADMIN</title>
   
</head>
<body>
<link rel="stylesheet" href="css/style.css">
<?php
include('security.php');

?>
<p style="background-color: #333; color:whitesmoke;  text-align: center; ">Hey, <?php echo $_SESSION['username']; ?>!</p>
<a href="admin-dashboard.php" button type="button" style="margin-top:10px; margin-right:10px; border-radius:9px;  " class="btn btn-success float-right">GreenCurry</button></a>
<a href="logout.php" button type="button" style="margin-top:10px; margin-right:10px; border-radius:9px;  " class="btn btn-success float-right">Logout</button></a>
</br></br>

<style>

body {
    background-image: url(images/bg_1.jpg);
}                      
</style>

<body>
<
</body>


<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-black">Table Registration Data</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <?php
                $query = "SELECT * FROM restro";
                $query_run = mysqli_query($connection, $query);
            ?>
                <table class="table table-fluid" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <style>

body {
    background-image: url(images/bg_1.jpg);
}                      
table { 
  width: 100%; 
  table-layout: auto;
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
    color: #333;
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}   

</style>

            
                        <tr> 
                            <th scope="col"> ID </th>
                            <th scope="col">fullname</th>
                            <th scope="col">email </th>
                            <th scope="col">Phone</th>
                            <th scope="col">date</th>
                            <th scope="col">time</th>
                            <th scope="col">person</th>
                            <th scope="col">Time_of_feedback</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr class="table table-dark">
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['fullname']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['phone1']; ?></td>
                                <td><?php  echo $row['date']; ?></td>
                                <td><?php  echo $row['time']; ?></td>
                                <td><?php  echo $row['person']; ?></td>
                                <td><?php  echo $row['Time_of_feedback']; ?></td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>



                    </br>  </br>

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-black">ContactForm Data</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <?php
                $query = "SELECT * FROM contactform";
                $query_run = mysqli_query($connection, $query);
            ?>
                <table class="table table-fluid" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <style>
table { 
  width: 100%; 
  table-layout: auto;
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee;     
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}   

</style>

            
                        <tr> 
                            <th scope="col"> ID </th>
                            <th scope="col">name</th>
                            <th scope="col">email </th>
                            <th scope="col">subject</th>
                            <th scope="col">message</th>
                            <th scope="col">Time_of_feedback</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr class="table table-dark">
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['name']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['subject']; ?></td>
                                <td><?php  echo $row['message']; ?></td>
                                <td><?php  echo $row['Time_of_feedback']; ?></td>
                    
                             
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>


 

