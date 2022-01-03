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
                                    <input type="email" name="up_mail" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $_POST['up_mail']; ?>">
                                    <button type="submit" name="submit" class="btn btn-primary">View</button>
                                    </form>
                                </div>
                                <div class="col-lg-12">
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
                                $resultCheck=mysqli_num_rows($select);
                                if($resultCheck<1)
                                {
                                    echo "<h3>There is no user with this mail</h3>";
                                }
                                  else{
                                      while($row = mysqli_fetch_assoc($select))
                                    {
                                 
                              
                            ?>
                            <tr>
                              <td><?php echo $row['designer_id']; ?></td>
                              <td><?php echo $row['designer_name']; ?></td>
                             
                            </tr>
                            
                            <?php  }?>
                          </tbody>
                        </table>
                        
                    </div>
                       <div class="col-lg-12">
                       <form action="delete.php" method="post">
                       <input type="hidden" name="person_mail" value="<?php echo $mail; ?>">
                        <button type="submit" name="submit" class="btn btn-primary">Delete</button>
                        </form>
                    </div>
                       <?php } }?>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "includes/admin_footer.php" ?>