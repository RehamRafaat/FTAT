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
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/prot_styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">الصفحة الرئيسيه</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="profile.php">الصفحة الشخصيه</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <!-- Masthead Heading-->
                <?php
                        include_once'DBH.Inc.php';
                        $pho_id = $_POST['pho_id'];
                        $query = "select * from designer where designer_id = '$pho_id'";
                        $select = mysqli_query($conn, $query);
                        $row=mysqli_fetch_assoc($select);
                        
                       ?>
                        
                <h1 class="masthead-heading text-uppercase mb-0"><?php  echo $row['designer_name'];?></h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">
                    <?php

                                            if($row['job_title']==1){
                                                echo "مونتاج";
                                            }
                                            else if($row['job_title']==2){
                                                echo "رسام";
                                            }
                                            else if($row['job_title']==3){
                                                echo "مصمم";
                                            }
                                            else if($row['job_title']==4){
                                                echo "اشغال يدويه";
                                            }
                                            else if($row['job_title']==5){
                                                echo "خطاط";
                                            }
                                            else if($row['job_title']==6){
                                                echo "مصور فوتوغرافى";
                                            }
                                            else
                                            {
                                                echo " ";
                                            }

                                            ?>
                </p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                   <?php
                    include "DBH.Inc.php";
                    $query = "select * from portfolio where designer_id = '$pho_id'";
                    $select = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($select))
                    {
                        $pho_img = $row['file_name'];
                        
                    ?>
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo $pho_img; ?>" alt="..." />
                        </div>
                    </div>
                   <?php } ?>
                </div>
            </div>
        </section>
         <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <?php
            include "DBH.Inc.php";
            $query = "select * from portfolio where designer_id = '$pho_id'";
            $select = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($select))
            {
                $pho_img = $row['file_name'];
                $pho_file = $row['file_title'];
                $pho_desc = $row['file_desc'];

        ?>
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?php echo $pho_file; ?></h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="<?php echo $pho_img; ?>" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4"><?php echo $pho_desc; ?></p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                       <?php
                        include_once'DBH.Inc.php';
                        $pho_id = $_POST['pho_id'];
                        $query = "select * from designer where designer_id = '$pho_id'";
                        $select = mysqli_query($conn, $query);
                        $rowd=mysqli_fetch_assoc($select);
                        
                       ?>
                        <h4 class="text-uppercase mb-4"><?php echo $rowd['designer_email']; ?></h4>
                        
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?php echo $rowd['designer_facebook']; ?>"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?php echo $rowd['designer_instagram']; ?>"><i class="fab fa-fw fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?php echo $rowd['designer_twitter']; ?>"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?php echo $rowd['designer_website']; ?>"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4"> <?php echo $rowd['designer_phone']; ?></h4>
                       
                    </div>
                </div>
            </div>
        </footer>
        
       
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/prot_scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
