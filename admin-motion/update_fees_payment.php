<?php
		include('inc/config.php');
		
		$stu_id="";
		$fees_amount="";
		$fees_date="";
		$fees_method="";
		
		if(isset($_GET['upd']))
		{
			$x=$_GET['upd'];
			
			$qs="select * from fees_transaction left join student on fees_sid=stu_id where fees_id='$x'";
			
			$data=mysqli_query($con,$qs);
			$row=mysqli_fetch_array($data);
		}
		
		if(isset($_POST['update']))
		{
			extract($_POST);
			
			$qs="update fees_transaction set fees_sid='$stu_id',fees_amount='$fees_amount',fees_date='$fees_date',fees_method='$fees_method'";
			
			mysqli_query($con,$qs);
			header('location:fees_payment.php');
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
		
			<!--For Photo button and browsing-->
		<style>
					#set{
						padding:5px;
						background:orange;
						display:table;
						color:#fff;
						border-radius:20px;
					}
					input[type='file']
					{
						display:;
					}
					#set:hover
					{
						background:green;
					}
			</style>
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
	<?php
		include('inc/header.php');
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
							<div class="so_content" data-simplebar="init">
								<ul>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
								</ul>
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
							<div class="so_content" data-simplebar="init">
								<ul>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
									<li>
										<h5>Status Update</h5>
										<p>This is an automated server response message. All systems are online.</p>
									</li>
								</ul>
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
					include('inc/sidepanel.php');
				?>
				<div class="col-sm-12 col-lg-8 col-xl-10">
					<div class="row">
					
					<!--mobile dropdown menu-->
					
						<?php
							include('inc/mobile_dropdown.php');
						?>
						
						<!--main content-->
						
						<div class="col-lg-12">
							<nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
								<h4 class="title float-left">Fees Payment Status</h4>
								<ol class="breadcrumb float-right">
							    	<li class="breadcrumb-item"><a href="admin-dashboard.php">Home</a></li>
							    	<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
						</div>
						
						<form method="post" enctype="multipart/form-data">
						<div class="col-lg-12">
							<div class="my_course_content_container">
							
								<div class="my_setting_content mb30" style="width:1000px">
									<div class="my_setting_content_header">
										<div class="my_sch_title">
											<h4 class="m0">Payment info</h4>
										</div>
									</div>
									<div class="row my_setting_content_details pb0">
										<div class="col-xl-12">
											<div class="row">
												<div class="col-xl-6">
													<div class="my_profile_setting_input form-group">
												    	<label for="formGroupExampleInput1">Stu Id</label>
												    	<input type="hidden" class="form-control" id="formGroupExampleInput1" placeholder="UX/UI" name="assig_course_id">
															<select name="stu_id" class="form-control" >
																<?php
																		echo "<option value='".$row['stu_id']."'>
																						".$row['stu_id']." ".$row['first_name']."
																					</option>";
																	
																?>
															</select>
													</div>
												
												</div>
												
												<div class="col-xl-6">
													<div class="my_profile_setting_input form-group">
												    	<label for="formGroupExampleInput3">Fees Amount</label>
												    	<input type="text" class="form-control" id="formGroupExampleInput3" placeholder="$89" name="fees_amount" value="<?php echo $row['fees_amount']; ?>" required>
													</div>
												</div>
											</div>
											
											<div class="row">
													<div class="col-xl-6">
													<div class="my_profile_setting_input form-group">
												    	<label for="exampleInputPhone">Fees Submit Date</label>
												    	<input type="date" class="form-control" name="fees_date" value="<?php echo $row['fees_date']; ?>" required>
													</div>
													</div>
													
													<div class="col-xl-6">
													<div class="my_profile_setting_input form-group">
												    	<label for="formGroupExampleInputX">Fees Method</label>
												    	
															<input type="text" class="form-control" name="fees_method" placeholder="Online/Offline" value="<?php echo $row['fees_method']; ?>" required>
													</div>
												</div>
												</div>
											</div>
										</div>
									</div>
									    <div class="col-lg-12" style="text-align:center;">
											<input type="submit" class="my_setting_savechange_btn btn btn-thm" name="update" value="Update"/>
									    </div>
									</div>
								</div>
							</form>
						
							
							</div>
						</div>
						
						
					
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

<!--For photo browsing/opening-->
<script>
			imgInp.onchange = evt => {
				const [file] = imgInp.files
				if (file) {
					blah.src = URL.createObjectURL(file)
				}
			}
		</script>
</body>
</html>