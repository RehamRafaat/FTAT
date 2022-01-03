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
                            Delete User
                        </h3>
                        <div class="row">
                             <div class="col-lg-4 input-group mb-3" style="margin-left:17px;">

                               <h5>Enter User email</h5>

                            </div>
                            
                                <div class="col-lg-4 input-group mb-3" style="margin-left:17px;">
                                    <form action="delete_code.php" method="post">
                                    <input type="email" name="up_mail" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    <button type="submit" name="submit" class="btn btn-primary">View</button>
                                    </form>
                                </div>
                                
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "includes/admin_footer.php" ?>