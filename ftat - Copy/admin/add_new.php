<?php
session_start();
if(isset($_POST['submit']))
{
    include_once'DBH.Inc.php';
    $name= $_POST['admin_name'];
    $email=$_POST['admin_email'];
    $password=$_POST['admin_password'];
             //Insert user into database
             $sql="INSERT INTO admin(admin_name,admin_email,admin_password) VALUES('$name','$email','$password');";
             mysqli_query($conn,$sql);
             header("Location: login_admin.php?test=Success");
             exit();
}
else
{
   header("Location: new_admin.php");
}