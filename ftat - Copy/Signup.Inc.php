<?php

if(isset($_POST['submit']))
{
    include_once'DBH.Inc.php';
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
             $sql="INSERT INTO designer(designer_name,designer_phone,designer_email,designer_password,designer_gender,designer_birthday,designer_address,behance_link,website_link,github_link,instagram_link,facebook_link,twitter_link,job_title) VALUES('$name','$phone','$email','$password','$gender','$day','$address','$behance','$website','$github','$instagram','$facebook','$twitter','$job');";
             mysqli_query($conn,$sql);
             header("Location: login.php?test=Success");
             exit();
    echo "back to sign in";
}
else
{
   header("Location: signup.php");
}