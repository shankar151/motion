<?php
session_start();

	include('inc/config.php');
	
	$pic="";
	
	$x=$_SESSION['stu_id'];
	
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
		<title>Motion - LMS Online Education Course</title>
		<!-- Favicon -->
		<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
		<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
				<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
				<!--[if lt IE 9]>
					<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
					<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
				<![endif]-->
				
				<!--table css-->
		

    <!-- Custom fonts for this template -->
   
   

    <!-- Custom styles for this template -->
    

    <!-- Style for search box of tables -->
    <link href="table_js/dataTables.bootstrap4.min.css" rel="stylesheet">
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
							<div class="so_heading">
								<p>Notifications</p>
							</div>
							
							<a class="view_all_noti text-thm" href="#">View all alerts</a>
					    </div>
					</div>
                </li>
                <li class="user_notif">
					<div class="dropdown">
					    <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-alarm"></span></a>
					    <div class="dropdown-menu notification_dropdown_content">
							<div class="so_heading">
								<p>Notifications</p>
							</div>
							
							<a class="view_all_noti text-thm" href="#">View all alerts</a>
					    </div>
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
			<div class="row">
				<?php
					include('inc/mo-dash-sidepanel.php');
				?>
				<div class="col-sm-12 col-lg-8 col-xl-10">
					<div class="row">
					
					<!--mobile dropdown menu-->
					
						<div class="col-lg-12">
							<div class="dashboard_navigationbar dn db-991">
								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
									<ul id="myDropdown" class="dropdown-content">
										<li class="active"><a href="page-dashboard.html"><span class="flaticon-puzzle-1"></span> Dashboard</a></li>
										<li><a href="courses.php"><span class="flaticon-online-learning"></span> My Courses</a></li>
										<li><a href="order.php"><span class="flaticon-shopping-bag-1"></span> Order</a></li>
										<li><a href="message.php"><span class="flaticon-speech-bubble"></span> Messages</a></li>
										<li><a href="review.php"><span class="flaticon-rating"></span> Reviews</a></li>
										<li><a href="bookmarks.php"><span class="flaticon-like"></span> Bookmarks</a></li>
										<li><a href="listing.php"><span class="flaticon-add-contact"></span> Add listing</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						<!--main content-->
						
						<div class="col-lg-12">
							<nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
								<h4 class="title float-left">My Courses</h4>
								<ol class="breadcrumb float-right">
							    	<li class="breadcrumb-item"><a href="admin-dashboard.php">Home</a></li>
							    	<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
						</div>
						
						<form method="post" enctype="multipart/form-data">
							<!-- Top Courses -->
	
	<section id="top-courses" class="top-courses pb30">
		<div class="container">
			
			<div class="row">
			 	<div class="col-lg-12">
			 		<div id="options" class="alpha-pag full">
						
					</div><!-- FILTER BUTTONS -->
			 		<div class="emply-text-sec">
			 			<div class="row" id="masonry_abc">
						<?php
							$qs=" select * from course inner join student on course_id=course where stu_id='$x'";
							
							$data=mysqli_query($con,$qs) or die(mysqli_error($con));
							
							while($row=mysqli_fetch_array($data,MYSQLI_BOTH))
							{
						?>
						<!--div-->
			 				<div class="col-md-6 col-lg-4 col-xl-3 business design" style="width:1000px;height:200px;">
								<div class="top_courses">
									<div class="thumb">
										<img style="height:190px" class="img-whp" src="../motion/photo/<?php echo $row['course_image']; ?>" alt="image">
										<div class="overlay">
											<div class="tag">Best Seller</div>
											<div class="icon"><span class="flaticon-like"></span></div>
											<a class="tc_preview_course" href="stu_course.php?id=<?php echo $row['course_id']; ?>">Preview Course</a>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<h5><?php echo $row['course_name']; ?></h5>
											<ul class="tc_review">
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#">(6)</a></li>
											</ul>
										</div>
										<div class="tc_footer">
											<ul class="tc_meta float-left">
												<li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
												<li class="list-inline-item"><a href="#">1548</a></li>
												<li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
												<li class="list-inline-item"><a href="#">25</a></li>
											</ul>
											<div class="tc_price float-right"><?php echo $row['course_price']; ?></div>
										</div>
									</div>
								</div>
			 				</div>
							<!--div-->
							<?php
							}
							?>
			 				
			 				
									</div>
								</div>
			 				</div>
			 			</div>
			 		</div>
	</section>

									</form>
						
						
						
					</div>
					
				</div>
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

	<!--table JavaScript-->
	
 <!-- Bootstrap core JavaScript-->
   

    <!-- Core plugin JavaScript-->
    

    <!-- Custom scripts for all pages-->
   

    <!-- Search Box of Table plugins -->
    <script src="table_js/jquery.dataTables.min.js"></script>
    <script src="table_js/dataTables.bootstrap4.min.js"></script>

    <!-- Search Box of Table custom scripts -->
    <script src="table_js/datatables-demo.js"></script>

</html>