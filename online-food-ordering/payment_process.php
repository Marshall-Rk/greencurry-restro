<?php
session_start();
include('db.php');

            // include("connection/connect.php");
            // include_once 'product-action.php';
            // error_reporting(0);
            // session_start();
            // if(empty($_SESSION["user_id"]))
            // {
            // 	header('location:login.php');
            // }
            // else{

                                                    
            // 												foreach ($_SESSION["cart_item"] as $item)
            // 												{
                                                        
            // 												$item_total += ($item["price"]*$item["quantity"]);
                                                            
            // 													if($_POST['submit'])
            // 													{
                                    
            // 													$SQL="insert into users_orders(u_id,title,quantity,price) values('".$_SESSION["user_id"]."','".$item["title"]."','".$item["quantity"]."','".$item["price"]."')";
                                    
            // 														mysqli_query($db,$SQL);
                                                                    
            // 														$success = "<h2><font color=green>Thankyou! Your Order Placed successfully!</h2>";

                                                                    
                                                                    
            // 													}
            // 												}	
            //                                             }



if(isset($_POST['amt']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['token'])  ){
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $payment_status="pending";
    $added_on=date('Y-m-d h:i:s');
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $token=$_POST['token'];

    mysqli_query($con,"insert into payment(name,amount,payment_status,added_on,email,phone,token) values('$name','$amt','$payment_status','$added_on','$email','$phone','$token')");
    $_SESSION['OID']=mysqli_insert_id($con);
}


if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['payment_id'];
    mysqli_query($con,"update payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
}


?>
