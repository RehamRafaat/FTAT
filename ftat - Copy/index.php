<?php

session_start();
if(!isset($_SESSION['id'])){
    header("Location: login.php");
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>فتات</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <style>
    * {
        box-sizing: border-box;
      }
    .mySlides {display: none;}
    .imgy {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
      max-width: 100%;
      position: relative;
      margin: auto;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }
        .tm-catalog-item 
        {
            max-width: 600px;
        }
</style>

    </head>

<body>
    <div class="tm-page-wrap mx-auto">
        <div class="position-relative">
            <div class="position-absolute tm-site-header">
                <div class="container-fluid position-relative">
                    <div class="row">
                        <div class="col-12 col-md-8 ml-auto mr-0">
                            <div class="tm-site-nav">
                                <nav class="navbar navbar-expand-lg mr-0 ml-auto" id="tm-main-nav">
                                    <button class="navbar-toggler tm-bg-black py-2 px-3 mr-0 ml-auto collapsed" type="button"
                                        data-toggle="collapse" data-target="#navbar-nav" aria-controls="navbar-nav"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span>
                                            <i class="fas fa-bars tm-menu-closed-icon"></i>
                                            <i class="fas fa-times tm-menu-opened-icon"></i>
                                        </span>
                                    </button>
                                    <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                                        <ul class="navbar-nav text-uppercase">
                                            <li class="nav-item active">
                                                <a class="nav-link tm-nav-link" href="index.php">الصفحة الرئيسيه<span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="about.php">من نحن</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="profile.php">الصفحة الشخصية</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="logout.php"> تسجيل خروج</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="contact.php">تواصل معنا</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="admin/login_admin.php">ادارة الموقع</a>
                                            </li>
                                            <li class="nav-item">
                                                <img src="img/ftat.jpeg" style="width: 150px; height: 100px; position: relative; right: 350px;"/>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-welcome-container text-center text-white">
                <div class="tm-welcome-container-inner">
                    <h1 class=" text-white" style="font-size: 50px;" >مرحبا بكم فى فتات</h1>
                    <p class=" text-white">انقر على الزرار التالى لنبدا جولتنا</p>
                    <a href="#content" class="btn tm-btn-animate tm-btn-cta tm-icon-down">
                        <span>ابدا</span>
                    </a>
                </div>
            </div>

            <div id="tm-video-container">
                <video autoplay muted loop id="tm-video">
                    <!-- <source src="video/sunset-timelapse-video.mp4" type="video/mp4"> -->
                        <source src="video/wheat-field.mp4" type="video/mp4">
                </video>    
            </div>
            
            <i id="tm-video-control-button" class="fas fa-pause"></i>
        </div>

        <div class="container-fluid">
            <div id="content" class="mx-auto tm-content-container">
                <main>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-page-title mb-4" style="text-align: center;">مجالات الخدمات الفنيه</h2>       
                        </div>
                    </div>
                    
                    <div class="row tm-catalog-item-list">
                        <div class="col-lg-6 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/montag.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                            </div>    
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title text-center">المونتاج</h3>
                                <p class="tm-catalog-item-text text-center">انقر لمعرفة المزيد عن خدمات فتات  المميزه</p>
                                <a href="view_all_video_editors.php"><input type="submit" name="submit" value="عرض الكل" class="btn btn-primary"/></a>
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-6 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/photography.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                            </div>    
                           <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title text-center">التصوير</h3>
                                <p class="tm-catalog-item-text text-center">انقر لمعرفة المزيد عن خدمات فتات  المميزه</p>
                                <a href="view_all_photographers.php"><input type="submit" name="submit" value="عرض الكل" class="btn btn-primary"/></a>
                                
                            </div>
                        </div>
                        
                        
                        
                        <div class="col-lg-6 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/drawing.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                            </div>    
                           <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title text-center">الرسم</h3>
                                <p class="tm-catalog-item-text text-center">انقر لمعرفة المزيد عن خدمات فتات المميزه </p>
                                <a href="view_all_painters.php"><input type="submit" name="submit" value="عرض الكل" class="btn btn-primary"/></a>
                            </div>
                        </div>
                        
                       
                        <div class="col-lg-6 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/handmades.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                            </div>    
                           <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title text-center">الاشغال اليدويه</h3>
                                <p class="tm-catalog-item-text text-center">انقر لمعرفة المزيد عن خدمات فتات  المميزه</p>
                               <a href="view_all_handmaders.php"><input type="submit" name="submit" value="عرض الكل" class="btn btn-primary"/></a>
                            </div>
                        </div>
                       
                        
                       
                        <div class="col-lg-6 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/font.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                            </div>    
                           <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title text-center">الخط</h3>
                                <p class="tm-catalog-item-text text-center">انقر لمعرفة المزيد عن خدمات فتات  المميزه</p>
                                <a href="view_all_writers.php"><input type="submit" name="submit" value="عرض الكل" class="btn btn-primary"/></a>
                            </div>
                        </div>
                       
                        
                       
                        <div class="col-lg-6 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/design.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                            </div>    
                           <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title text-center">التصميم</h3>
                                <p class="tm-catalog-item-text text-center">انقر لمعرفة المزيد عن خدمات فتات المميزه</p>
                                <a href="view_all_designers.php"><input type="submit" name="submit" value="عرض الكل" class="btn btn-primary"/></a>
                            </div>
                        </div>
                       
                    </div>
                </main>
                <section class="Alert" style="background-color:black; width:100%; height:500px; padding:100px; margin-bottom:150px;">
                    
                        <div class="col-12">
                            <h2 class="tm-page-title mb-4" style="text-align: center; color:white; margin-top:50px;">تنبيهات هامه</h2>       
                        </div>
                        <div class="col-12">
                            <p style="text-align: center; color:white;margin-top:50px; font-size=30px;">كن حريصا على ان يكون لك حساب واحد على فتات و احرص ان لا تعطى معلوماتك الشخصيه كايميلك الشخصى او رقمك السرى لاحد حفاظا على خصوصيتك و تامين حسابك</p>       
                        </div>
                        <br>
                     <a style="position:relative; left:420px; background-color:white;"href="help/help.html" class="btn tm-btn-animate tm-btn-cta ">
                        <span style="color:black;">اضغط للمساعده</span>
                    </a>
                </section>
                <div class="row">
                        <div class="col-12">
                            <h2 class="tm-page-title mb-4" style="text-align: center;">الاكثر مبيعا</h2>       
                        </div>
                    </div>
                <div class="slideshow-container">

                <div class="mySlides fade">
                  <div class="numbertext">1 / 3</div>
                  <img class="imgy" src="img/design.jpg" style="width:100%">
                  <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                  <div class="numbertext">2 / 3</div>
                  <img class="imgy" src="img/drawing.jpg" style="width:100%">
                  <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                  <div class="numbertext">3 / 3</div>
                  <img class="imgy" src="img/font.jpg" style="width:100%">
                  <div class="text">Caption Three</div>
                </div>

                </div>
                <br>

                <div style="text-align:center">
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                </div>
                
            </div> <!-- tm-content-container -->
            <footer class="row pt-5" style="background: black;">
                    <div class="col-12">
                        <p class="text-center">92002100  - Care@fotat.com</p>
                    </div>
                    <div class="col-12">
                        <p class="text-center">جميع الحقوق محفوظه فتات 2021</p>
                    </div>
                </footer>
        </div>

    </div> <!-- .tm-page-wrap -->
    
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
</body>

</html>