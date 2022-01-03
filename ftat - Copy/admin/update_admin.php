<?php

include "includes/admin_header.php"
?>

    <div id="wrapper">
    
        
        <?php include "includes/admin_nav.php" ?>
        
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin
                            <small> <?php echo $_SESSION['name'];?></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-12">
                        <h3>
                            Update Admin Info
                        </h3>
                        <div class="row">
                            <form action="update_admin_code.php" method="post">
                             <div class="col-lg-4 input-group mb-3" style="margin-left:17px;">

                               <h5>Enter New Name</h5>

                            </div>
                            
                                <div class="col-lg-4 input-group mb-3" style="margin-left:17px;">
                                    
                                    <input type="text" name="ad_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $_SESSION['name'];?>">
                                    
                                    
                                </div>
                                <div class="col-lg-4 input-group mb-3" style="margin-left:17px;">

                               <h5>Enter New Email</h5>

                            </div>
                            
                                <div class="col-lg-4 input-group mb-3" style="margin-left:17px;">
                                    
                                    <input type="email" name="ad_mail" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"value="<?php echo $_SESSION['email'];?>">
                                    
                                    
                                </div>
                                <div class="col-lg-4 input-group mb-3" style="margin-left:17px;">

                               <h5>Enter New Password</h5>

                            </div>
                            
                                <div class="col-lg-4 input-group mb-3" style="margin-left:17px;">
                                    
                                    <input type="password" name="ad_pass" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $_SESSION['password'];?>">
                                    
                                    
                                </div>
                                <br>
                                <button type="submit" name="submit" class="btn btn-primary" style="margin-left:17px;">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "includes/admin_footer.php" ?>