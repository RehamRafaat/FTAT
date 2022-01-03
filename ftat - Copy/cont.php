<?php

if(isset($_POST['submit']))
{
    include_once'DBH.Inc.php';
    $name= $_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
             //Insert user into database
             $sql="INSERT INTO contact(contact_name,contact_email,contact_subject,contact_message) VALUES('$name','$email','$subject','$message');";
             mysqli_query($conn,$sql);
             header("Location: contact.php?test=Success");
}
else
{
   header("Location: contact.php?test=fail");
}