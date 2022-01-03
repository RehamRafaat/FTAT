<?php

session_start();

if(!isset($_SESSION['id']))
    header("Location: login.php");

$id = $_SESSION['id'];
//print_r($_FILES['img']);

/* Get the name of the uploaded file */
$filename = $_FILES['img']['name'];
$start = strlen($filename) - 4;
  
// substr returns the new string.

$new_filename = uniqid($id);
$new_filename .= substr($filename, $start);


/* Choose where to save the uploaded file */
$location = "img/prot/".$new_filename;

/* Save the uploaded file to the local filesystem */
if ( move_uploaded_file($_FILES['img']['tmp_name'], $location) ) {
    include_once'DBH.Inc.php';
    $sql = "INSERT into portfolio(file_name,designer_id) VALUES ('$location','$id')";
    mysqli_query($conn,$sql);
  header("Location: profile.php?test=Success");
} else { 
  header("Location: profile.php?test=faild"); 
}

?>