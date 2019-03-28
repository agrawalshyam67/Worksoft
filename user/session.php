<?php
   
   session_start();
    $servername = "localhost";
    $database = "u913148827_murit";
    $username = "u913148827_murit";
    $password = "murit29";


// Create connection

$conn = new mysqli($servername, $username, $password, $database);
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query("select FirstName from Students where FirstName = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:UserAuthentication.html");
      die();
   }
?>