<?php  
session_start();
$connect = mysqli_connect("localhost", "root", "", "email_list");
if(isset($_POST["submit"]))
{
    $loggedIn3  =$_SESSION['username'];
	$loggedIn2  =$_SESSION['id'];

 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    
                $item2 = mysqli_real_escape_string($connect, $data[0]);
         $query = "INSERT into email_list(UserWhocreated,createdByWhom,email) values(' $loggedIn3','$loggedIn2','$item2')";
                mysqli_query($connect, $query);
   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
  }
 }
}
?>  
<!DOCTYPE html>  
<html>  
 <head>  
  <title>Webslesson Tutorial</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
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
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/style.css" />
  
 </head>  
 <body>  
  
 <div class="container-fluid mt-2 text-center">
 <div class="row ">
 <div class="col-4 ">

  <form method="post" enctype="multipart/form-data">
  
    <label>Select CSV File:</label>
    <input class="form-control" type="file" name="file" />
    <br />
    <input class="form-control btn btn-success" type="submit" name="submit" value="Import"  />

    <a class="btn btn-info mt-2 btn-block" href="index.php">back</a>
  </form>
  </div>
  </div>
  </div>
  
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>
 </body>  
</html>