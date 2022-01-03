<?php
session_start();
if(isset($_POST['submit']))
{
    include 'DBH.Inc.php';
    $name= $_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $day=$_POST['Day'];
    $address=$_POST['address'];
    $behance=$_POST['behance'];
    $website=$_POST['website'];
    $github=$_POST['github'];
    $instagram=$_POST['instagram'];
    $facebook=$_POST['facebook'];
    $twitter=$_POST['twitter'];
    $job=$_POST['job'];
    
     //Insert user into database
     $sql="UPDATE designer 
     SET designer_name = '$name',
     designer_phone = '$phone',
     designer_email = '$email',
     designer_password = '$password',
     designer_gender = '$gender',
     designer_birthday = '$day',
     designer_address = '$address',
     behance_link = '$behance',
     website_link = '$website',
     github_link = '$github',
     instagram_link = '$instagram',
     facebook_link = '$facebook',
     twitter_link = '$twitter',
     job_title = '$job'
     WHERE designer_email = '$email'";
             //mysqli_query($conn,$sql);
            if(!mysqli_query($conn,$sql)){
                echo mysqli_error($conn);
            }
    else{
        
             header("Location: update_inp.php?test=Success");
    }
}