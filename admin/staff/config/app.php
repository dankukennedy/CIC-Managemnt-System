<?php
session_start();
define('BD_HOST','localhost');
define('BD_USER','root');
define('BD_PASSWORD','');
define('BD_DATABASE','cic_system');

define('SITE_URL','http://127.0.0.1/system/admin/staff/');

include_once('DatabaseConnection.php');
$db=new DatabaseConnection;
include('codes/staff_authentication_code.php');



function base_url($slug)
{
    echo SITE_URL.$slug; 
}

   function redirect($message,$page)
   {
    $redirectTo=SITE_URL.$page; 
    $_SESSION['message']="$message";
     header("Location: $redirectTo");
     exit(0);
    } 

function validateInput($dbcon,$input)
{
   return  mysqli_real_escape_string($dbcon,$input);
}

?> 