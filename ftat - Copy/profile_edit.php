<?php

session_start();
if(!isset($_SESSION['id'])){
    header("Location: login.php");
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>profile edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
		<div class="main-body">
		<!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">الصفحة الرئيسيه</a></li>
              <li class="breadcrumb-item"><a href="profile.php">الصفحة الشخصية</a></li>
              <li class="breadcrumb-item"><a href="profile_edit.php">تعديل الصفحة الشخصية</a></li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<?php echo $_SESSION['name'];?>
									<p class="text-secondary mb-1">
									    <?php echo $_SESSION['name'];?>
                                          <p class="text-secondary mb-1">
                                              <?php

                                            if($_SESSION['job']==1){
                                                echo "مونتاج";
                                            }
                                            else if($_SESSION['job']==2){
                                                echo "مصور فوتوغرافى";
                                            }
                                            else if($_SESSION['job']==3){
                                                echo "رسام";
                                            }
                                            else if($_SESSION['job']==4){
                                                echo "اشغال يدويه";
                                            }
                                            else if($_SESSION['job']==5){
                                                echo "خطاط";
                                            }
                                            else if($_SESSION['job']==6){
                                                echo "مصمم ";
                                            }
                                            else
                                            {
                                                echo " ";
                                            }

                                            ?>
									</p>
									<p class="text-muted font-size-sm"><?php echo $_SESSION['address'];?></p>
								</div>
							</div>
							<hr class="my-4">
							
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
						<form method="POST" action="edit_profile.php">
						<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Job title</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<select class="form-select" name="job" aria-label="Default select example">
                                      <option selected> <?php
                        
                        if($_SESSION['job']==1){
                            echo "مونتاج";
                        }
                        else if($_SESSION['job']==2){
                            echo "مصور فوتوغرافى";
                        }
                        else if($_SESSION['job']==3){
                            echo "رسام";
                        }
                        else if($_SESSION['job']==4){
                            echo "اشغال يدويه";
                        }
                        else if($_SESSION['job']==5){
                            echo "خطاط";
                        }
                        else if($_SESSION['job']==6){
                            echo "مصمم ";
                        }
                        else
                        {
                            echo " ";
                        }
                        
                        ?></option>
                                      <option value="1">مونتاج</option>
                                      <option value="2">مصور فوتوغرافى</option>
                                      <option value="3">رسام</option>
                                      <option value="4">اشغال يدويه</option>
                                      <option value="5">خطاط</option>
                                      <option value="6">مصمم </option>
                                    </select>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="name" class="form-control" value=" <?php echo $_SESSION['name'];?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="email" class="form-control" value=" <?php echo $_SESSION['email'];?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Password</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="password" class="form-control" value="<?php echo $_SESSION['password'];?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">phone</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="phone" class="form-control" value="John Doe">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Address</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="address" class="form-control" value="<?php echo $_SESSION['address'];?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Gender</h6>
								</div>
								<div class="col-sm-9 text-secondary">
								<h6>Male</h6>
									<input type="radio" name="gender" class="form-control" value="0">
								<h6>Female</h6>
									<input type="radio" name="gender" class="form-control" value="1">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">birthday</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="date" name="Day" class="form-control rounded-0" />
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">behance link</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="behance" class="form-control" value="<?php echo $_SESSION['behance'];?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">website link</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="website" class="form-control" value="<?php echo $_SESSION['website'];?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">github link</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="github" class="form-control" value="<?php echo $_SESSION['github'];?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">instagram link</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="instagram" class="form-control" value="<?php echo $_SESSION['instagram'];?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">facebook link</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="facebook" class="form-control" value="<?php echo $_SESSION['facebook'];?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">twitter link</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="twitter" class="form-control" value="<?php echo $_SESSION['twitter'];?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="submit" name="submit" class="btn btn-primary px-4" value="Save Changes">
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<style type="text/css">
body{
    background: #f7f7ff;
    margin-top:20px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>