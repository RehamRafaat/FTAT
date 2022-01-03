<?php

session_start();
if(!isset($_SESSION['name'])){
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

</head>

<body>
    <div class="tm-page-wrap mx-auto">
        <div class="position-relative">
            <div class="position-absolute tm-site-header">
                <div class="container-fluid position-relative">
                    <div class="row">
                        <div class="col-5 col-md-8 ml-auto mr-0">
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
                                                <a class="nav-link tm-nav-link" href="index.php" style="color: black;">الصفحة الرئيسيه<span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" style="color: black;" href="about.php">من نحن</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="profile.php">الصفحة الشخصية</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="logout.php"> تسجيل خروج</a>
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
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div id="content" class="mx-auto tm-content-container">
                <main>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-page-title mb-4" style="text-align: center;">من نكون ؟</h2>       
                        </div>
                    </div>
                    <div class="mx-auto tm-content-container">					
					<div class="row mt-3 mb-5 pb-3">
						<div class="col-12">
							<div class="mx-auto tm-about-text-container px-3">
								
								<p class="mb-4 text-center"> (معرض فتات) هو معرض مخصص للخدمات والمنتجات الفنيه  يتيح لمنسوبي ومحترفي الأعمال الفنيه عرض نماذج من اعمالهم الفنيه من خلاله مما يسهل علي زوار المعرض (العملاء) الوصول الي مقدمي الخدمات الفنيه والاطلاع علي نماذج من اعمالهم الفنيه بكافه تفاصيلها</p>	
							</div>							
						</div>						
					</div>					
				</div>
                   
                </main>

                
            </div> <!-- tm-content-container -->
            
        </div>

    </div> <!-- .tm-page-wrap -->
<footer class="row pt-5" style="background: black;">
                   <div class="col-12">
                        <p class="text-center">92002100  - Care@fotat.com</p>
                    </div>
                    <div class="col-12">
                        <p class="text-center">جميع الحقوق محفوظه فتات 2021</p>
                    </div>
                </footer>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>