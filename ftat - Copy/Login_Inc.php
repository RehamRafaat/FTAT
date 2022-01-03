<?php

session_start();

if(isset($_POST['submit']))
{
    include 'DBH.Inc.php';
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    if(empty( $email)||empty($password))
    {
        header("Location: login.php?error=data");
        exit();
    }
    else{
        $sql="SELECT*FROM designer WHERE designer_email='$email'";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);
        if($resultCheck<1)
        {
            //include("wrong_password.php");
            header("Location: login.php?error=mail");
        }
        else
        {
            if($row=mysqli_fetch_assoc($result))
            {
                //dehashing password
                if($password!=$row['designer_password'])
                {
                   header("Location: login.php?error=password");
                   exit(); 
                }
                else
                {
                    //login the user here
                    $_SESSION['id']=$row['designer_id'];
                    $_SESSION['name']=$row['designer_name'];
                    $_SESSION['phone']=$row['designer_phone'];
                    $_SESSION['email']=$row['designer_email'];
                    $_SESSION['password']=$row['designer_password'];
                    $_SESSION['gender']=$row['designer_gender'];
                    $_SESSION['birthday']=$row['designer_birthday'];
                    $_SESSION['address']=$row['designer_address'];
                    $_SESSION['behance']=$row['behance_link'];
                    $_SESSION['website']=$row['website_link'];
                    $_SESSION['github']=$row['github_link'];
                    $_SESSION['instagram']=$row['instagram_link'];
                    $_SESSION['facebook']=$row['facebook_link'];
                    $_SESSION['twitter']=$row['twitter_link'];
                    $_SESSION['job']=$row['job_title'];
                    
                     header("Location: index.php?login=success");
                     exit();
                }
            }
        }
    }
}
else{
     header("Location: ../login.php?error=veryerror");
}

?>