<?php
	session_start();
	include('inc/config.php');
	
	if(!isset($_SESSION['email']))
	{
		header('location:index.php');
	}
	
	$stu_id="";
	$stu_photo="";
	$first_name="";
	$last_name="";
	$dob="";
	$gender="";
	$category="";
	$religion="";
	$mobile="";
	$email="";
	
	if(isset($_POST['update']))
	{
		extract($_POST);
		
		$stu_photo=$_FILES['stu_photo']['name'];
		
		if(isset($_GET['stu_id']))
		{
			$x=$_GET['stu_id'];
			
			if($stu_photo=="")
			{
				$qs="update student set first_name='$first_name',last_name='$last_name',dob='$dob',gender='$gender',category='$category',religion='$religion',mobile='$mobile',email='$email' where stu_id='$x'";
					
				mysqli_query($con,$qs);
			}
			else
			{
				$qs="update student set stu_photo='$stu_photo',first_name='$first_name',last_name='$last_name',dob='$dob',gender='$gender',category='$category',religion='$religion',mobile='$mobile',email='$email' where stu_id='$x'";
				
				mysqli_query($con,$qs);
			}
		}
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
<title>Edumy - LMS Online Education Course & School HTML Template</title>
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

<style>
					#set{
						padding:5px;
						background:magenta;
						display:table;
						color:#fff;
						border-radius:20px;
					}
					.file
					{
						display:none;
					}
					#set:hover
					{
						background:green;
					}
			</style>
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
							
							
							<a class="view_all_noti text-thm" href="#">View all alerts</a>
					    </div>
					</div>
                </li>
                <li class="user_notif">
					<div class="dropdown">
					    <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-alarm"></span></a>
					    <div class="dropdown-menu notification_dropdown_content">
							
							
						
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
						<?php
							if(isset($_GET['stu_id']))
							{
								 $x=$_GET['stu_id'];
								 $qs="select * from student where stu_id='$x'";
								
								$data=mysqli_query($con,$qs);
								$row=mysqli_fetch_array($data);
								
								//echo var_dump ($row)
						?>
							<form method="post" enctype="multipart/form-data" style="width:800px;left-margin:50px;">
								<fieldset>
									<legend><h3 style="color:magenta;text-align:center;">Student Profile</h3></legend>
								</fieldset>
									<br/><br/>
									
							 <div class="card mb-4 mb-xl-0">
               
								
                <div class="card-body text-left">
                    <!-- Profile picture image-->
										
                    <img id="blah" alt="your image" style="width:150px;height:150px" class="img-account-profile rounded-square mb-2" src="upload/<?php echo $row['stu_photo']; ?>">
										
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
										
                   <div class="card-body text-left">
										<label class="btn btn-primary" id="set" style="margin-top:50px;margin-left:80px;"/>Upload Student Photo<input class="file" id="imgInp" type="file" name="stu_photo"/></label>
									 </div>
									 
									  <div class="card-header">Student Photo</div>
									
								 </div>
            </div>
									<div class="row">
									
										<div class="col">
											<div class="form-group">
													<h5>First name</h5>
													<input type="hidden" class="form-control h50" placeholder="First name" name="stu_id" value="<?php echo $row['stu_id']; ?>">
													<input type="text" class="form-control h50" placeholder="First name" name="first_name" value="<?php echo $row['first_name']; ?>">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Last name</h5>
													<input type="text" class="form-control h50" placeholder="Last name" name="last_name" value="<?php echo $row['last_name']; ?>">
											</div>
										</div>
									</div>
									
									<div class="row">
									
										<div class="col">
											<div class="form-group">
													<h5>Date Of Birth</h5>
													<input type="date" class="form-control h50" name="dob" value="<?php echo $row['dob']; ?>">
											</div>
										</div>
										
										<div class="col">
												<h5>Gender</h5>
											<div class="ui_kit_radiobox">
												<div class="radio">
													<input id="radio_one" name="gender" value="male" type="radio" checked="" <?php if($row['gender']=="male"){echo "checked";} ?> >
													<label for="radio_one"><span class="radio-label"></span> Male</label>
												</div>
												<div class="radio">
													<input id="radio_two" name="gender" value="female" type="radio" <?php if($row['gender']=="female"){echo "checked";} ?>>
													<label for="radio_two"><span class="radio-label"></span> Female</label>
												</div>
												<div class="radio">
													<input id="radio_three" name="gender" value="other" type="radio" <?php if($row['gender']=="other"){echo "checked";} ?>>
													<label for="radio_three"><span class="radio-label"></span> Other</label>
												</div>
											</div>								
										</div>
										
									</div>
									
									<div class="row">
									
										<div class="col">
												<h5>Category</h5>
												<select class="selectpicker custom-select-lg mb-3" name="category">
											
												<option value="--select--"<?php if($row['category']=="--select--") echo "selected"; ?>>--select--</option>
												<option value="Gen" <?php if($row['category']=="Gen") echo "selected"; ?> >General</option>
												<option value="OBC" <?php if($row['category']=="OBC") echo "selected"; ?> >OBC</option>
												<option value="SC" <?php if($row['category']=="SC") echo "selected"; ?> >SC</option>
												<option value="ST" <?php if($row['category']=="ST") echo "selected"; ?> >ST</option>
												<option value="EWS" <?php if($row['category']=="EWS") echo "selected"; ?>>EWS</option>
												<option value="Other" <?php if($row['category']=="Other") echo "selected"; ?>>Other</option>
												</select>
										</div>
										<div class="col">
												<h5>Religion</h5>
												<select class="selectpicker custom-select-lg mb-3" name="religion">
												
												<option value="--select--"<?php if($row['religion']=="--select--") echo "selected"; ?>>--select--</option>
												<option value="Hindu"<?php if($row['religion']=="Hindu") echo "selected"; ?>>Hindu</option>
												<option value="Muslim"<?php if($row['religion']=="Muslim") echo "selected"; ?>>Muslim</option>
												<option value="Sikh"<?php if($row['religion']=="Sikh") echo "selected"; ?>>Sikh</option>
												<option value="Christian"<?php if($row['religion']=="Christian") echo "selected"; ?>>Christian</option>
												<option value="Buddhist"<?php if($row['religion']=="Buddhist") echo "selected"; ?>>Buddhist</option>
												<option value="Jain"<?php if($row['religion']=="Jain") echo "selected"; ?>>Jain</option>
												<option value="Jews"<?php if($row['religion']=="Jews") echo "selected"; ?>>Jews</option>
												<option value="Parsi"<?php if($row['religion']=="Parsi") echo "selected"; ?>>Parsi</option>
												<option value="Athiest"<?php if($row['religion']=="Athiest") echo "selected"; ?>>Athiest</option>
												<option value="Other"<?php if($row['religion']=="Other") echo "selected"; ?>>Other</option>
												</select>
										</div>
									</div>
									
									<div class="row">
									
										<div class="col">
											<div class="form-group">
													<h5>Mobile Number</h5>
													<input type="mobile" class="form-control h50" placeholder="Mobile number" name="mobile" value="<?php echo $row['mobile']; ?>">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Email</h5>
													<input type="email" class="form-control h50" placeholder="Email Id" name="email" value="<?php echo $row['email']; ?>" >
											</div>
										</div>
									</div>
									
									<div class="row">
								
									<div class="col-12" align="center">
										<input class="btn btn-lg btn-success" type="submit" value="Update" name="update"/>
									</div>
								</div>
				
					</form>
					<?php
						}
					?>
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