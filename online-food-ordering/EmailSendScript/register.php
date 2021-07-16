<?php

require_once "config.php";
 

$username = $password = $email= $accstatus = $mobile_number = $AadharCard_number= $headImage =$confirm_password = "";
$username_err = $password_err = $email_err = $mobile_number_err  = $AadharCard_number_err  = $headImage_err = $confirm_password_err = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  $email = $_POST['email'];
  $accstatus = $_POST['accstatus'];
  $mobile_number = $_POST['mobile_number'];
  $AadharCard_number = $_POST['AadharCard_number'];

  $headImage = $_FILES['headImage'];
  $name = "$email" . strtotime(date('d-m-Y h:i:s')) . secure($headImage['name']);
  $size = $headImage['size'];
  $tmp_name = $headImage['tmp_name'];
  $file_extension = pathinfo($name, PATHINFO_EXTENSION);
 
 if ($size < 100000) {
  if (in_array($file_extension, $allowed_image_extension)) {
      move_uploaded_file($tmp_name, "uploaded/$name");
      $sql = "UPDATE `pixelemail` SET `image` = '$name'";
      } else echo "$file_extension is not accepted by us.";
} else echo "File Size Is Above 100 KB";



// validations
  if(empty(trim($_POST["email"]))){
    $email_err = "Please enter a email.";
    } else {
      $sql = "SELECT id FROM pixelemail WHERE email = ?";
        
      if($stmt = mysqli_prepare($link, $sql)){
          
          mysqli_stmt_bind_param($stmt, "s", $param_email);
          
          
          $param_email = trim($_POST["email"]);
          
        
          if(mysqli_stmt_execute($stmt)){
          
              mysqli_stmt_store_result($stmt);
              
              if(mysqli_stmt_num_rows($stmt) == 1){
                  $email_err = "This email is already taken.";
              } else{
                  $email = trim($_POST["email"]);
              }
          } else{
              echo "Oops! Something went wrong. Please try again later.";
          }

         
          mysqli_stmt_close($stmt);
        }
    }

  if(empty(trim($_POST["mobile_number"]))){
    $mobile_number_err = "Please enter a mobile_number.";
  } else {
    $sql = "SELECT id FROM pixelemail WHERE mobile_number = ?";
      
    if($stmt = mysqli_prepare($link, $sql)){
        
        mysqli_stmt_bind_param($stmt, "s", $param_mobile_number);
        
        
        $param_mobile_number = trim($_POST["mobile_number"]);
        
      
        if(mysqli_stmt_execute($stmt)){
        
            mysqli_stmt_store_result($stmt);
            
            if(mysqli_stmt_num_rows($stmt) == 1){
                $mobile_number_err = "This mobile_number is already taken.";
            } else{
                $mobile_number = trim($_POST["mobile_number"]);
            }
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }

       
        mysqli_stmt_close($stmt);
      }
  }

  if(empty(trim($_POST["AadharCard_number"]))){
    $AadharCard_number_err = "Please enter a AadharCard_number.";
  } else {
      $sql = "SELECT id FROM pixelemail WHERE AadharCard_number = ?";
        
      if($stmt = mysqli_prepare($link, $sql)){
          
          mysqli_stmt_bind_param($stmt, "s", $param_AadharCard_number);
          
          
          $param_AadharCard_number = trim($_POST["AadharCard_number"]);
          
        
          if(mysqli_stmt_execute($stmt)){
          
              mysqli_stmt_store_result($stmt);
              
              if(mysqli_stmt_num_rows($stmt) == 1){
                  $AadharCard_number_err = "This AadharCard_number is already taken.";
              } else{
                  $AadharCard_number = trim($_POST["AadharCard_number"]);
              }
          } else{
              echo "Oops! Something went wrong. Please try again later.";
          }

         
          mysqli_stmt_close($stmt);
        }
    }

  // validations
  
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
      
        $sql = "SELECT id FROM pixelemail WHERE username = ?";
        
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
    
   
    if(empty($username_err) && empty($password_err) && empty($email_err) && empty($mobile_number_err) && empty($AadharCard_number_err) && empty($headImage_err) && empty($confirm_password_err)){
        
      
        
        $sql = "INSERT INTO pixelemail (username, email,accstatus,mobile_number,AadharCard_number,image, password) VALUES (?,?,?,?,?,?,?)";
         

        if($stmt = mysqli_prepare($link, $sql)){
          
            mysqli_stmt_bind_param($stmt, "sssssss", $param_username,$param_email,$param_accstatus,$param_mobile_number,$param_AadharCard_number,$param_headImage, $param_password);
            
            $param_accstatus = $accstatus;
            $param_headImage = $name;
            $param_AadharCard_number = $AadharCard_number;
            $param_mobile_number = $mobile_number;
            $param_email = $email;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); 
            
               
      if(mysqli_stmt_execute($stmt)){
        $_SESSION['status'] = "done";
        $_SESSION['status_code'] = "success";    
             
              // echo "<script>window.location.href = 'login.php'</script>";  
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <title>Email-Quantum</title>
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
jQuery("#loading").delay(5000).fadeOut("slow");
})
</script> -->

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
          <a class="nav-link" style="color:#a7a3f3;"  href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#a7a3f3;" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#a7a3f3;" target="_blank" href="http://bit.ly/nextgenpixel">Nextgenpixel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#a7a3f3;" target="_blank"  type="text"
  style="color:#a7a3f3;"
  data-mdb-toggle="modal"
  data-mdb-target="#info" >About-Us<!-- Button trigger modal -->


<div
  class="modal fade"
  id="info"
  tabindex="-1"
  aria-labelledby="infoLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="infoLabel">About-Us</h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">Nextgenpixel focuses on creating effective and efficient strategies for Email marketing by creating detailed and value adding content because the goal is not just reaching your potential client's inbox but their engagement.</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
     
      </div>
    </div>
  </div>
</div></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#a7a3f3;"  href="admin_panel.php">Admin</a>
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
<div class="content py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
          </br>
          <button
  type="button"
  class="btn  btn-lg btn-block"
  style="background-color:#6A5ACD; color:white"
  data-mdb-toggle="modal"
  data-mdb-target="#instructions"
>
  Instructions
</button>

<!-- Modal -->
<div
  class="modal fade"
  id="instructions"
  tabindex="-1"
  aria-labelledby="instructionsLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="instructionsLabel">Instructions</h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
      
     
      • Dont use any Symbols or whitespace in Username Area.<br/>
      • Make Sure to Provide Accurate and Correct information.<br/>
      • Enter your Working Mobile Number.<br/>
      • Double Check your AadharCard Number.<br/>
      • Make sure to Type same password for Confirmation.<br/>
      • Contact Nextgenpixel for any assistance.<br/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-10 px-3">
              <div class="mb-2">
              <h4>Register In to Email-Quantum</h4>
              <h7>Username can only contain letters, numbers, and underscores</h7>
          
            </div>

            <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
            <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
              <div class="form-group first">
              
                <label for="username">Username </label>
                
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>

              </div>

              <div class="form-group second ">
                <label for="email">E-mail</label>
                <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
              </div>

            
               
          
             
         


              <div class="form-group second ">
                <label for="email">Mobile Number</label>
                <input type="int" name="mobile_number" class="form-control <?php echo (!empty($mobile_number_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $mobile_number_err; ?></span>
              </div>

              <div class="form-group second ">
                <label for="AadharCard_number">AadharCard Number</label>
                <input type="int" name="AadharCard_number" class="form-control <?php echo (!empty($AadharCard_number_err)) ? 'is-invalid' : ''; ?>"  > 
                <span class="invalid-feedback"><?php echo $AadharCard_number_err; ?></span>
              </div>
              
              <div class="form-group second py-5 fw-bold ">
              <label for="AadharCard_image">Upload Your Aadhar Card image Below <i class="fa fa-arrow-down" aria-hidden="true"></i></label>
         
              </div>

              <div class="form-group second ">
              <input type="file" id="headImage" name="headImage" class="form-control" accept="image/*">
              </div>

              <div class="form-group last ">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
              </div>

              
              
              <div class="form-group last mb-2">
                <label for="password">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo secure($confirm_password_err); ?></span>
              </div>
             
              <div class="form-group second ">
                <label for="accstatus"></label>
                <input type="hidden" name="accstatus" id="accstatus" class="form-control" value="Active" >
               
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
  <script src="js/sweetalert.js"></script>
<?php
if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
	?>
	<script>
swal("You have successfully Registered!", "Login to access Your Account!!", "success");
</script>
	<?php
unset($_SESSION['status']);
}
?>
<script src="jquery-3.6.0.min.js"></script>
<script src="sweetalert2.all.min.js"></script>
  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>