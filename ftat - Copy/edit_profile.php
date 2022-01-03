<?php
session_start();
if(!isset($_SESSION['id'])){
    header("Location: login.php");
}
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
    $id = $_SESSION['id'];
    
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
     WHERE designer_id = '$id'";
    echo $id;
    echo "<br><br>";
             //mysqli_query($conn,$sql);
            if(!mysqli_query($conn,$sql)){
                echo mysqli_error($conn);
            }
    else{
            $_SESSION['name']=$name;
            $_SESSION['phone']=$phone;
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            $_SESSION['gender']=$gender;
            $_SESSION['birthday']=$day;
            $_SESSION['address']=$address;
            $_SESSION['behance']=$behance;
            $_SESSION['website']=$website;
            $_SESSION['github']=$github;
            $_SESSION['instagram']=$instagram;
            $_SESSION['facebook']=$facebook;
            $_SESSION['twitter']=$twitter;
            $_SESSION['job']=$job;
             header("Location: index.php?test=Success");
    }
}