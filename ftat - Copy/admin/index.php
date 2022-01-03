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
                            Brief Report about each category count
                        </h3>
                        
                        <?php
                            include "DBH.Inc.php";
                            $all_users = "select * from designer";
                            $all_admins = "select * from admin";
                            $all_video_editors = "select * from designer where job_title = 1";
                            $all_photographers = "select * from designer where job_title = 2";
                            $all_painters = "select * from designer where job_title = 3";
                            $all_handmakers = "select * from designer where job_title = 4";
                            $all_writers = "select * from designer where job_title = 5";
                            $all_designers = "select * from designer where job_title = 6";
                            $query1 = mysqli_query($conn, $all_users);
                            $count_all = mysqli_num_rows($query1);
                            $query2 = mysqli_query($conn, $all_admins);
                            $count_admins = mysqli_num_rows($query2);
                            $query3 = mysqli_query($conn, $all_video_editors);
                            $count_video_editors = mysqli_num_rows($query3);
                            $query4 = mysqli_query($conn, $all_photographers);
                            $count_photographers = mysqli_num_rows($query4);
                            $query5 = mysqli_query($conn, $all_painters);
                            $count_painters = mysqli_num_rows($query5);
                            $query6 = mysqli_query($conn, $all_handmakers);
                            $count_handmakers = mysqli_num_rows($query6);
                            $query7 = mysqli_query($conn, $all_writers);
                            $count_writers = mysqli_num_rows($query7);
                            $query8 = mysqli_query($conn, $all_designers);
                            $count_designers = mysqli_num_rows($query8);
                        
                        ?>
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Type</th>
                              <th scope="col">Count</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Admins</td>
                              <td><?php echo $count_admins; ?></td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>All Users</td>
                              <td><?php echo $count_all; ?></td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Video Editors</td>
                              <td><?php echo $count_video_editors; ?></td>
                            </tr>
                            <tr>
                              <th scope="row">4</th>
                              <td>Photographers</td>
                              <td><?php echo $count_photographers; ?></td>
                            </tr>
                            <tr>
                              <th scope="row">5</th>
                              <td>Painters</td>
                              <td><?php echo $count_painters; ?></td>
                            </tr>
                            <tr>
                              <th scope="row">6</th>
                              <td>Handmakers</td>
                              <td><?php echo $count_handmakers; ?></td>
                            </tr>
                            <tr>
                              <th scope="row">7</th>
                              <td>Writers</td>
                              <td><?php echo $count_writers; ?></td>
                            </tr>
                            <tr>
                              <th scope="row">8</th>
                              <td>Designers</td>
                              <td><?php echo $count_designers; ?></td>
                            </tr>
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