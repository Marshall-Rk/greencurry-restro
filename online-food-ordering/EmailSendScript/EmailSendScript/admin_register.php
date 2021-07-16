<?php

require_once "config.php";
 

$username = $password = $email =$confirm_password = "";
$username_err = $password_err = $email_err = $confirm_password_err = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  $email = $_POST['email'];

    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
      
        $sql = "SELECT id FROM admin_login WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            
            $param_username = trim($_POST["username"]);
            
          
            if(mysqli_stmt_execute($stmt)){
            
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

           
            mysqli_stmt_close($stmt);
        }
    }
    
  
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    
    if(empty($username_err) && empty($password_err) && empty($email_err) && empty($confirm_password_err)){
        
       
        $sql = "INSERT INTO admin_login (username, email, password) VALUES (?,?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
          
            mysqli_stmt_bind_param($stmt, "sss", $param_username,$param_email, $param_password);
            
            $param_email = $email;
            $param_username = $username;
              $param_password = password_hash($password, PASSWORD_DEFAULT); 
            
            
            if(mysqli_stmt_execute($stmt)){
              echo "<h2><p> <font color=green><script>alert('Your Account  has been Created!');</script></h2></font> </p>";
              echo "<script>window.location.href = 'admin_login.php'</script>";  
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

         
            mysqli_stmt_close($stmt);
        }
    }
    

    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/jpg" href="logo.png"/>
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Email-Quantum</title>
  </head>
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
   
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" style="color:#a7a3f3;" target="_blank" href="#">Home</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" style="color:#a7a3f3;" target="_blank" href="http://bit.ly/nextgenpixel">Nextgenpixel</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-3 " target="_blank" href="http://bit.ly/nextgenpixel">
        <i class="fas fa-home" style="color:white"></i>
      </a>
      <a class="text-reset me-3 " target="_blank" href="https://www.instagram.com/nextgenpixel/">
        <i class="fas fa-envelope" style="color:white"></i>
      </a>
      

      <!-- Avatar -->
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
<div class="content ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h4>Register In to Email-Quantum</h4>
              <h7>Username can only contain letters, numbers, and underscores</h7>
          
            </div>

            <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <div class="form-group first">
                <label for="username">Username </label>
                <input type="text" name="username" class="form-control <?php echo secure((!empty($username_err))) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>

              </div>
              <div class="form-group second ">
                <label for="email">E-mail</label>
                <input type="text" name="email" class="form-control <?php echo secure((!empty($email_err))) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
              </div>


              <div class="form-group last ">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control <?php echo secure((!empty($password_err))) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
              </div>

              
              
              <div class="form-group last mb-4">
                <label for="password">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo secure((!empty($confirm_password_err))) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo secure($confirm_password_err); ?></span>
              </div>
             

              <input type="submit" class=" btn btn-primary btn-lg btn-block" value="Register">
              <br>
              <p>Already have an account? <a href="login.php">Login here</a>.</p>
            </form>
            </div>
          </div>
          
        </div>

      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>