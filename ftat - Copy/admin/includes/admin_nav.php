<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Ftat Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               <li><a href="../index.php">Home Page</a></li>
               
               
               
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['name'];?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-arrows-v"></i>View<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts_dropdown" class="collapse">
                            <li>
                                <a href="view_all.php">View all Users</a>
                            </li>
                            <li>
                                <a href="view_all_video_editors.php">View all Video Editors</a>
                            </li>
                            <li>
                                <a href="view_all_photographers.php">View all Photographers</a>
                            </li>
                            <li>
                                <a href="view_all_painters.php">View all Painters</a>
                            </li>
                            <li>
                                <a href="view_allhandmakers.php">View all Handmaders</a>
                            </li>
                            <li>
                                <a href="view_all_writers.php">View all Writers</a>
                            </li>
                            <li>
                                <a href="view_all_designers.php">View all Designers</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="feedbacks.php"><i class="fa fa-fw fa-file"></i> Feedbacks</a>
                    </li>
                     <li>
                        <a href="update_inp.php"><i class="fa fa-fw fa-file"></i>Update</a>
                    </li>
                    <li>
                        <a href="delete_inp.php"><i class="fa fa-fw fa-file"></i>delete</a>
                    </li>
                    <li>
                        <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i>Profile</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
