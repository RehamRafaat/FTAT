<?php
session_start();
if(isset($_POST['submit']))
{
    include 'DBH.Inc.php';
    $email=$_POST['person_mail'];
    
     //Insert user into database
     $sql="DELETE FROM designer 
     WHERE designer_email = '$email'";
             //mysqli_query($conn,$sql);
            if(!mysqli_query($conn,$sql)){
                echo mysqli_error($conn);
            }
    else{
        
             header("Location: view_all.php?test=Success");
    }
}