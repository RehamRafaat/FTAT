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
                    <div class="col-lg-12" style="overflow:scroll;">
                        <h3>
                            Feedbacks
                        </h3>
                        
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th scope="col">User_ID</th>
                              <th scope="col">User_Name</th>
                              <th scope="col">User_Email</th>
                              <th scope="col">User_Subject</th>
                              <th scope="col">User_Message</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                                include "DBH.Inc.php";
                                $query = "select * from contact";
                                $select = mysqli_query($conn, $query);
                                while($row = mysqli_fetch_assoc($select))
                                {
                                   

                            ?>
                            <tr>
                              <td><?php echo $row['contact_id']; ?></td>
                              <td><?php echo $row['contact_name']; ?></td>
                              <td><?php echo $row['contact_email']; ?></td>
                              <td><?php echo $row['contact_subject']; ?></td>
                              <td><?php echo $row['contact_message']; ?></td>
                            </tr>
                            
                            <?php } ?>
                          </tbody>
                        </table>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "includes/admin_footer.php" ?>