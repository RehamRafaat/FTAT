<?php

session_start();
if(!isset($_SESSION['id'])){
    header("Location: login.php");
}?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/view_styles.css" rel="stylesheet" />
    </head>
    <body>
        
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">All Video Editors</h1>
                    <br>
                    <form action="search_video_editor.php" method="post">
                   <div class="input-group">
                      <input type="search" name="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                      aria-describedby="search-addon" />
                      <input type="submit" name="submit" value="search" class="btn btn-outline-primary"/>
                    </div>
                    </form>
                </div>
            </div>
        </header>
        
        
        
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                   
                    <?php
                    include "DBH.Inc.php";
                    $query = "select * from designer where job_title = 1";
                    $select = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($select))
                    {
                        $pho_id = $row['designer_id'];
                        $pho_name = $row['designer_name'];
                        
                    ?>
                    <div class="col mb-5">
                       <form method="post" action="view_person.php">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $pho_name ?></h5>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                <input type="hidden" name="pho_id" value="<?php echo $pho_id ?>">
                                <input type="submit" name="submit" class="btn btn-outline-dark mt-auto" value="Show Profile">
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <?php    } ?>
                </div>
            </div>
        </section>
        
        
        
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/view_scripts.js"></script>
    </body>
</html>
