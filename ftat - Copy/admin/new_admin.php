<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>فتات</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

</head>

<body style="background-color:black;">
    <div class="tm-page-wrap mx-auto">
        <br>
        <br>
        <div class="container-fluid">
            <div id="content" class="mx-auto tm-content-container">
                <main>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-page-title mb-4" style="text-align: center;">New Admin</h2>       
                        </div>
                    </div>
                    <div class="mx-auto tm-content-container">					
					<div class="mx-auto pb-3 tm-about-text-container px-3">
                        <div class="row">
                            <div class="col-lg-12 mb-5">
                                <form id="contact-form" action="add_new.php" method="POST" class="tm-contact-form">
                                  <div class="form-group">
                                    <input type="text" name="admin_name" class="form-control rounded-0" placeholder="الاسم" required="" />
                                  </div>
                                  <div class="form-group">
                                    <input type="email" name="admin_email" class="form-control rounded-0" placeholder="البريد الالكترونى" required="" />
                                  </div>
                                  <div class="form-group">
                                    <input type="password" name="admin_password" class="form-control rounded-0" placeholder="الرقم السرى" required="" />
                                  </div>

                                  <div class="form-group" style="margin:0 auto; position: relative; right: 350px;">
                                    <input type="submit" name="submit" class="btn btn-primary rounded-0 d-block ml-auto mr-0 tm-btn-animate tm-btn-submit tm-icon-submit" value="Submit"/>
                                  </div>
                                </form>  
                                <br>
                                <br>
                            </div>
                        </div>  
                    </div> 					
				</div>
                   
                </main>

                
            </div> <!-- tm-content-container -->
            
        </div>

    </div> <!-- .tm-page-wrap -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>

</html>