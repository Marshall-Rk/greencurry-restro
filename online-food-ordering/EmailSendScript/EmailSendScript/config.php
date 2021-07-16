<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'email_list');
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

function secure($strToSecure)
{
    global $db;
    $strToSecure = mysqli_real_escape_string($db, $strToSecure);
    $strToSecure = strip_tags($strToSecure);
    $strToSecure = htmlentities($strToSecure);
    $strToSecure = stripslashes($strToSecure);
    $strToSecure = stripslashes($strToSecure);
    $strToSecure = trim($strToSecure);
    return $strToSecure;
}

?>

