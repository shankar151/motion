<?php
	session_start();
	
	include('inc/config.php');
	
	if(!isset($_SESSION['email']))
	{
		header('location:index.php');
	}
	
	if(isset($_GET['id']))
	{
		$x=$_GET['id'];
	}
									
?>
	
	<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="academy, college, coursera, courses, education, elearning, kindergarten, lms, lynda, online course, online education, school, training, udemy, university">
<meta name="description" content="Edumy - LMS Online Education Course & School HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/dashbord_navitaion.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Motion - LMS Online Education Course & School HTML Template</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
	<?php
		include('inc/mo-dash-header.php');
	?>
	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
	        <ul class="header_user_notif dashbord_pages_mobile_version pull-right">
                <li class="user_notif">
					<div class="dropdown">
					    <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-email"></span></a>
					    <div class="dropdown-menu notification_dropdown_content">
						
					</div>
                </li>
                <li class="user_notif">
					<div class="dropdown">
					    <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-alarm"></span></a>
					   
					</div>
                </li>
                <li class="user_setting">
					<div class="dropdown">
                		<a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src="images/team/e1.png" alt="e1.png"></a>
					    <div class="dropdown-menu">
					    	<div class="user_set_header">
					    		<img class="float-left" src="images/team/e1.png" alt="e1.png">
						    	<p>Kim Hunter <br><span class="address">kimhunter@gmail.com</span></p>
					    	</div>
					    	<div class="user_setting_content">
								<a class="dropdown-item active" href="#">My Profile</a>
								<a class="dropdown-item" href="#">Messages</a>
								<a class="dropdown-item" href="#">Purchase history</a>
								<a class="dropdown-item" href="#">Help</a>
								<a class="dropdown-item" href="#">Log out</a>
					    	</div>
					    </div>
					</div>
		        </li>
            </ul>
						<!-- /.mobile-menu -->
			<div class="header stylehome1 dashbord_mobile_logo dashbord_pages">
				<div class="main_logo_home2">
		            <img class="nav_logo_img img-fluid float-left mt20" src="images/header-logo.png" alt="header-logo.png">
		            <span>Motion</span>
				</div>
				<ul class="menu_bar_home2">
					<li class="list-inline-item"></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
	
	</div>

	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord pb50">
		<div class="container-fluid">
			<div class="row" >
				<?php
					include('inc/mo-dash-sidepanel.php');
				?>
		<div class="col-sm-12 col-lg-8 col-xl-10">
			<div class="row" >
				<section class="blog_post_container"">
				<div class="container">
				<div class="row">
					<div class="col-lg-8 col-xl-9">
					<div class="main_blog_post_content">
			
					<form method="post" >
						<div class="mbp_thumb_post">
						
						<?php
								
							{	$qs="select * from course where course_id='$x'";
								
								$data=mysqli_query($con,$qs);
								$row=mysqli_fetch_array($data);
						?>
							<div class="details pt0">
								<h1 class="mb25" align="left"> Details of <?php echo $row['course_name']; ?></h1>
							</div>
							<div  >
								<img class="img-fluid" src="photo/<?php echo $row['course_image']; ?>" alt="image" style="width:600px;border:5px solid silver;border-radius:20px 0px;">
								
							</div>
							<br/><br/><br/><br/>
							<div class="details">
								<h1 align="left"><?php echo $row['course_name']; ?> Description</h1>
								<p align="left"><?php echo $row['description']; ?></p>
							<?php
								}
							?>
								
								<br/><br/>
								<?php
									$qs="select * from manage_unit where select_course='$x' order by unit_sr_no";
									
									$data=mysqli_query($con,$qs);
									while($row=mysqli_fetch_array($data))
									{
										
								?>
								<div>
									<h2 class="mb0"><?php echo $row['unit_name']; ?></h2>
									<ul class="bs_content_list">
										<li><p><b><a href="topic_course.php?tp=<?php echo $row['unit_sr_no']; ?>">Unit <?php echo $row['unit_sr_no']; ?></a></b></p></li>
									</ul>
								</div>
								<?php
									}
								?>
							</div>
							
							
							
						</div>
					</form>
					
						
					</div>
					</div>
					</div>
					</div>
				</section>
			</div>
		</div>
	</section>
	
	<!--footer-->
					<?php
						include('inc/footer.php');
					?>
<a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="js/chart.min.js"></script>
<script type="text/javascript" src="js/chart-custome.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/snackbar.min.js"></script>
<script type="text/javascript" src="js/simplebar.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/scrollto.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/progressbar.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/timepicker.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/dashboard-script.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>