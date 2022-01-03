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
                            Update User Info
                        </h3>
                        <div class="row">
                             <div class="col-lg-4 input-group mb-3" style="margin-left:17px;">

                               <h5>Enter User email</h5>

                            </div>
                            
                                <div class="col-lg-4 input-group mb-3" style="margin-left:17px;">
                                    <form action="update_code.php" method="post">
                                    <input type="email" name="up_mail" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $_POST['up_mail']; ?>">
                                    <button type="submit" name="submit" class="btn btn-primary">View</button>
                                    </form>
                                </div>
                                <div class="col-lg-12" style="overflow:scroll;">
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th scope="col">User_ID</th>
                              <th scope="col">User_Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              if(isset($_POST['submit']))
                              {
                                $mail = $_POST['up_mail'];
                                include "DBH.Inc.php";
                                $query = "select * from designer where designer_email = '$mail'";
                                $select = mysqli_query($conn, $query);
                                while($row = mysqli_fetch_assoc($select))
                                {
                                   
                              
                            ?>
                            <tr>
                              <td><?php echo $row['designer_id']; ?></td>
                              <td><?php echo $row['designer_name']; ?></td>
                             
                            </tr>
                            
                            <?php }} ?>
                          </tbody>
                        </table>
                        
                    </div>
                      <div class="col-lg-4 input-group mb-3" style="margin-left:17px;">

                               <h5>Enter New Values</h5>

                            </div>
                       <div class="col-lg-12" style="overflow:scroll;">
                       <form action="update.php" method="post">
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
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
                               
                                $maily = $_POST['up_mail'];
                                include "DBH.Inc.php";
                                $queryy = "select * from designer where designer_email = '$maily'";
                                $selectt = mysqli_query($conn, $queryy);
                                  $row2 = mysqli_fetch_assoc($selectt);
                                  ?>
                                <tr>
                              <td><input type="text" name="name" class="form-control" value="<?php echo $row2['designer_name']; ?>"></td>
                              <td><input type="text" name="phone" class="form-control" value="<?php echo $row2['designer_phone']; ?>"></td>
                              <td><input type="email" name="email" class="form-control" value="<?php echo $row2['designer_email']; ?>"></td>
                              <td><input type="text" name="password" class="form-control" value="<?php echo $row2['designer_password']; ?>"></td>
                              <td>
                                   <input type="text" name="gender" class="form-control" value="<?php echo $row2['designer_gender']; ?>">
                              </td>
                              <td><input type="text" name="day" class="form-control" value="<?php echo $row2['designer_birthday']; ?>"></td>
                              <td><input type="text" name="address" class="form-control" value="<?php echo $row2['designer_address']; ?>"></td>
                              <td><input type="text" name="behance" class="form-control" value="<?php echo $row2['behance_link']; ?>"></td>
                              <td><input type="text" name="website" class="form-control" value="<?php echo $row2['website_link']; ?>"></td>
                              <td><input type="text" name="github" class="form-control" value="<?php echo $row2['github_link']; ?>"></td>
                              <td><input type="text" name="instagram" class="form-control" value="<?php echo $row2['instagram_link']; ?>"></td>
                              <td><input type="text" name="facebook" class="form-control" value="<?php echo $row2['facebook_link']; ?>"></td>
                              <td><input type="text" name="twitter" class="form-control" value="<?php echo $row2['twitter_link']; ?>"></td>
                              <td><input type="text" name="job" class="form-control" value="<?php echo $row2['job_title']; ?>">
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
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