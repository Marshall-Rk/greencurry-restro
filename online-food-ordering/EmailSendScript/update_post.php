<?php
session_start();
if (isset($_POST['editor'])){
    $editorText = $_POST['editor'];
    $idofuser=$_SESSION['id'];
    include('db.php'); 

    $query = mysqli_query($con, "UPDATE `ckeditor` SET `content`='$editorText' WHERE `idofuser`='$idofuser' ");
    if ($query){
        echo "<h2><p> <font color=green><script>alert('Your content has been Edited!');</script></h2></font> </p>";
        echo "<script>window.location.href = 'index.php'</script>";  
    }
else{
    header("location: index.php");
}
}


?>