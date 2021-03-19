<?php
 include 'z_execute/connection.php';

 $user=$_POST['user'];
 $pass=$_POST['pass'];
 $pass2=$_POST['pass2'];
 $var_question=$_POST['var_question'];
 $sec_answer=$_POST['sec_answer'];

 
 if($pass==$pass2)
 {
     $sql="INSERT INTO tbl_login (username,password,sec_answer,question_id) VALUES
        ('$user',md5($pass),'$sec_answer','$var_question')";

    if (!mysqli_query($connection,$sql))
    {
     die("Error: " . mysqli_error($connection));
    } else {
     session_start();
     $_SESSION['success_message2']="OK";
     header("Location:./index.php");
    }
 } else {
  session_start();
  $_SESSION['error_message']="Password mismatched.";
  header("Location: ./register.php");
 }


?>