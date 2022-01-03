<?php

session_start();

if(isset($_POST['submit']))
{
    include 'DBH.Inc.php';
    
    $email=$_POST['admin_email'];
    $password=$_POST['admin_password'];
    
    if(empty( $email)||empty($password))
    {
        header("Location: login_admin.php?error=data");
        exit();
    }
    else{
        $sql="SELECT*FROM admin WHERE admin_email='$email'";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);
        if($resultCheck<1)
        {
            //include("wrong_password.php");
            header("Location: login_admin.php?error=mail");
        }
        else
        {
            if($row=mysqli_fetch_assoc($result))
            {
                //dehashing password
                if($password!=$row['admin_password'])
                {
                   header("Location: login_admin.php?error=password");
                   exit(); 
                }
                else
                {
                    //login the user here
                    $_SESSION['id']=$row['admin_id'];
                    $_SESSION['name']=$row['admin_name'];
                    $_SESSION['email']=$row['admin_email'];
                    $_SESSION['password']=$row['admin_password'];
                    
                     header("Location: index.php?login=success");
                     exit();
                }
            }
        }
    }
}
else{
     header("Location: ../login_admin.php?error=veryerror");
}

?>