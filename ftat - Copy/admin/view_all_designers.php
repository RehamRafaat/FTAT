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
                            View All Designers
                        </h3>
                        
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th scope="col">User_ID</th>
                              <th scope="col">User_Name</th>
                              <th scope="col">User_Phone</th>
                              <th scope="col">User_Email</th>
                              <th scope="col">User_Password</th>
                              <th scope="col">User_Gender</th>
                              <th scope="col">User_Birthday</th>
                              <th scope="col">User_Address</th>
                              <th scope="col">Behance_Link</th>
                              <th scope="col">Website_Link</th>
                              <th scope="col">Github_link</th>
                              <th scope="col">Instagram_Link</th>
                              <th scope="col">Facebook_Link</th>
                              <th scope="col">Twitter_Link</th>
                              <th scope="col">Job_Title</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                                include "DBH.Inc.php";
                                $query = "select * from designer where job_title = 6";
                                $select = mysqli_query($conn, $query);
                                while($row = mysqli_fetch_assoc($select))
                                {
                                   

                            ?>
                            <tr>
                              <td><?php echo $row['designer_id']; ?></td>
                              <td><?php echo $row['designer_name']; ?></td>
                              <td><?php echo $row['designer_phone']; ?></td>
                              <td><?php echo $row['designer_email']; ?></td>
                              <td><?php echo $row['designer_password']; ?></td>
                              <td><?php
                                    if($row['designer_gender']==0)
                                    {
                                        echo "Male";
                                    }
                                    else
                                    {
                                        echo "Female";
                                    }
                                  ?>
                              </td>
                              <td><?php echo $row['designer_birthday']; ?></td>
                              <td><?php echo $row['designer_address']; ?></td>
                              <td><?php echo $row['behance_link']; ?></td>
                              <td><?php echo $row['website_link']; ?></td>
                              <td><?php echo $row['github_link']; ?></td>
                              <td><?php echo $row['instagram_link']; ?></td>
                              <td><?php echo $row['facebook_link']; ?></td>
                              <td><?php echo $row['twitter_link']; ?></td>
                              <td><?php
                                        if($row['job_title']==1){
                                            echo "Video_Editor";
                                        }
                                        else if($row['job_title']==2){
                                            echo "Painter";
                                        }
                                        else if($row['job_title']==3){
                                            echo "Designer";
                                        }
                                        else if($row['job_title']==4){
                                            echo "Handmaker";
                                        }
                                        else if($row['job_title']==5){
                                            echo "Writer";
                                        }
                                        else if($row['job_title']==6){
                                            echo "Photographer";
                                        }
                                        else
                                        {
                                            echo " ";
                                        }

                                  ?>
                              </td>
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