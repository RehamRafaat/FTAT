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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="tm-page-wrap mx-auto">
        <br>
        <br>
        <div class="container-fluid">
            <div id="content" class="mx-auto tm-content-container">
                <main>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-page-title mb-4" style="text-align: center;">انشاء حساب</h2>       
                        </div>
                    </div>
                    <div class="mx-auto tm-content-container">					
					<div class="mx-auto pb-3 tm-about-text-container px-3">
                        <div class="row">
                            <div class="col-lg-6 mb-5">
                                <form id="contact-form" action="Signup.Inc.php" method="POST" class="tm-contact-form">
                                  <div class="form-group">
                                    <input type="text" name="name" class="form-control rounded-0" placeholder="الاسم" required="" />
                                  </div>
                                  <div class="form-group">
                                    <input type="text" name="phone" class="form-control rounded-0" placeholder="الهاتف" required="" />
                                  </div>
                                  <div class="form-group">
                                    <input type="email" name="email" class="form-control rounded-0" placeholder="البريد الالكترونى" required="" />
                                  </div>
                                  <div class="form-group">
                                    <input type="password" name="password" class="form-control rounded-0" placeholder="الرقم السرى" required="" />
                                  </div>
                                   <div class="form-group">
                                    <input type="text" name="address" class="form-control rounded-0" placeholder="العنوان" required="" />
                                  </div>
                                  <div class="form-group">
                                    <input type="text" name="behance" class="form-control rounded-0" placeholder="behance link"/>
                                  </div>
                                  <div class="form-group">
                                    <input type="text" name="website" class="form-control rounded-0" placeholder="Website link"/>
                                  </div>
                                  <div class="form-group">
                                    <input type="text" name="github" class="form-control rounded-0" placeholder="Github link"/>
                                  </div>
                                  <div class="form-group">
                                    <input type="text" name="instagram" class="form-control rounded-0" placeholder="instagram link"/>
                                  </div>
                                  <div class="form-group">
                                    <input type="text" name="facebook" class="form-control rounded-0" placeholder="Facebook link"/>
                                  </div>
                                  <div class="form-group">
                                    <input type="text" name="twitter" class="form-control rounded-0" placeholder="Twitter link"/>
                                  </div>
                                  <div class="form-group">
                                     <label style="float:right;">تاريخ الميلاد</label>
                                    <input type="date" name="Day" class="form-control rounded-0" placeholder="تاريخ الميلاد" required="" />
                                  </div>
                                   <div class="form-group">
                                   <div style="float:right;">
                                    <h2>النوع</h2>
                                      <label>ذكر</label>
                                    <input type="radio" name="gender" required="" value="0"/>
                                      <label>انثى</label>
                                    <input type="radio" name="gender" required="" value="1"/>
                                    </div>
                                  </div>
                                   <div class="form-group">
                                    <h2>فئة المستخدم</h2>
                                      <label>مقدمة الخدمة</label>
                                    <input type="radio" name="feaa" required=""/>
                                      <label>العميل</label>
                                    <input type="radio" name="feaa" required="" />
                                  </div>
                                   <select class="form-select" name="job" aria-label="Default select example">
                                      <option selected>الوظيفه</option>
                                      <option value="1">مونتاج</option>
                                      <option value="2">مصور فوتوغرافى</option>
                                      <option value="3">رسام</option>
                                      <option value="4">اشغال يدويه</option>
                                      <option value="5">خطاط</option>
                                      <option value="6">مصمم</option>
                                    </select>
                                  <div class="form-group mb-0">
                                    <input type="submit" name="submit" class="btn btn-primary rounded-0 d-block ml-auto mr-0 tm-btn-animate tm-btn-submit tm-icon-submit" value="تسجيل"/>
                                  </div>
                                </form>    
                            </div>
                            <div class="col-lg-6">
                                 <h2 class="text-right">عضو بالفعل ؟</h2>
                                 <br>
                                 <h3 class="text-right">اذا كنت عضو بالفعل من فضلك انقر على الزر التالى لتسجيل الدخول</h3>
                                 <br>
                                 <a href="login.php"><button type="submit" class="btn btn-primary"><span>تسجيل الدخول</span></button></a>
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