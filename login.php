
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="css/style2.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
   
    if (isset($_POST['submit'])) {
        $email = stripslashes($_REQUEST['email']);    
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $_SESSION['phone'] = $phone;

        $query    = "SELECT * FROM `restaurant` WHERE email='$email'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die();
        $rows = mysqli_num_rows($result);
        $row=mysqli_fetch_array($result);
	
	                        if(is_array($row))  // if matching records in the array & if everything is right
								{
                        $_SESSION["phone"] = $row['phone'];
                        $_SESSION["rs_id"] = $row['rs_id'];
                        $_SESSION["address"] = $row['address'];
                        $_SESSION["title"] = $row['title'];
                        $_SESSION["url"] = $row['url'];
                        $_SESSION["password"] = $row['password'];
                        $_SESSION["c_id"] = $row['c_id'];
                        $_SESSION["o_hr"] = $row['o_hr'];
                        $_SESSION["c_hr"] = $row['c_hr'];
                        $_SESSION["o_days"] = $row['o_days'];
                        $_SESSION["date"] = $row['date'];
                
                
     
                          header("refresh:1;url=index.php"); // redirect to index.php page
                                    } 
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            
   
           
            header("Location: restro-dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect email/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>


    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="email" required placeholder="email" autofocus="true"/>
        <input type="password" class="login-input" name="password"value="895340124"  required placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        
        <p class="link"><a href="index.php">Back to Home </a></p>
  </form>



<?php
    }
?>
</body>
</html>