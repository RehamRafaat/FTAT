<?php
session_start();
if(isset($_POST['submit']))
{
    include 'DBH.Inc.php';
    $name= $_POST['ad_name'];
    $email=$_POST['ad_mail'];
    $password=$_POST['ad_pass'];
    $id = $_SESSION['id'];
     //Insert user into database
     $sql="UPDATE admin 
     SET admin_name = '$name',
     admin_email = '$email',
     admin_password = '$password'
     WHERE admin_id = '$id'";
             //mysqli_query($conn,$sql);
            if(!mysqli_query($conn,$sql)){
                echo mysqli_error($conn);
            }
    else{
        
             header("Location: profile.php?test=Success");
             $_SESSION['id'] = $id;
             $_SESSION['name'] = $name;
             $_SESSION['email'] = $email;
             $_SESSION['password'] = $password;
    }
}