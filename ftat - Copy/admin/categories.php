<?php include "includes/header.php" ?>

    <div id="wrapper">

        
        <?php include "includes/nav.php" ?>
        
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin
                            <small>Auther</small>
                        </h1>
                        
                            <div class="col-xs-6">
                                <form action="">
                                   <label for="cat_title">Add Category</label>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="cat_title">
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                    </div>
                                </form>
                            </div>
                            <div class="col-xs-6">
                               <table class="table table-bordered table-hover">
                                   <thead>
                                       <tr>
                                           <th>ID</th>
                                           <th>Category Title</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <th>Baseball Cat</th>
                                           <th>Football Cat</th>
                                       </tr>
                                   </tbody>
                               </table>
                            </div>
            
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "includes/footer.php" ?>