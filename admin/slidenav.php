<?php
    // include_once 'config.php';

    // session_start();
    // if(isset($_SESSION['uid'])){
?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Medicare Hospitals Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/logo.png">
	<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="./vendor/lightgallery/css/lightgallery.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
            <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a href="dashboard.php" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">User Management</span>
						</a>
                        <ul aria-expanded="false">
							<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<span class="nav-text">Users </span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="user-doctor.php">Doctors</a></li>
							<li><a href="user-lab.php">Lab Assistants</a></li>
							<li><a href="user-it.php">IT Division</a></li>
						</ul>
                    </li>
							<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<span class="nav-text">Jobs </span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="jobs.php">Current Jobs</a></li>
							<li><a href="jobs_new.php">Assign Job</a></li>
						</ul>
                    </li>
                                    <li><a href="register.php">User Registration</a></li>
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-internet"></i>
							<span class="nav-text">Site Management</span>
						</a>
                        <ul aria-expanded="false">
							<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<span class="nav-text">Blogs </span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="blog-view.php">View</a></li>
							<li><a href="blog-new.php">New Blog</a></li>
						</ul>
                    </li>
							<li><a href="contactus.php">Contact Us Details</a></li>
						</ul>
                    </li>
                    <li><a href="appointment.php" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Appointments</span>
						</a>
					</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Configuration Setup</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="confugrations-view.php">View</a></li>
							<li><a href="confugrations-new.php">New Configuration</a></li>
						</ul>
                    </li>
                    <li><a href="profile.php" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-controls-3"></i>
							<span class="nav-text">Profile Settings</span>
						</a>
					</li>
                </ul>
				
				<div class="copyright">
					<p><strong>Medicare Hospital Admin Dashboard</strong> © 2021 All Rights Reserved</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
    <body>

</html>
    <?php
    

    // else {
    //   echo "<script>alert('You have No access');window.location='login.php';</script>";
    // }
?>