<?php
	include('inc/config.php');
	
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
	$password="";
	$sign="";
	
	$mother_ton="";
	$ident="";
	$aadhar="";
	$pan="";
	$marital="";
	$pic="";
	
	/*For correspondance Address */
	
	$cor_house="";
	$cor_street="";
	$cor_colony="";
	$cor_city="";
	$cor_state="";
	$cor_country="";
	$cor_pincode="";
	
	/*For permanent Address */
	
	$per_house="";
	$per_street="";
	$per_colony="";
	$per_city="";
	$per_state="";
	$per_country="";
	$per_pincode="";
	
	/* For Father/Guardian information*/
	
	$father_first_name="";
	$father_last_name="";
	
	$mother_first_name="";
	$mother_last_name="";
	
	$father_mobile="";
	$father_email="";
	
	$annual_income="";
	
	$guardian_name="";
	$guardian_relation="";
	
	/* For Academics 10th*/
	
	$board_10="";
	$passing_year_10="";
	
	$marks_10="";
	$total_marks_10="";
	
	$percentage_10="";
	$college_10="";
	
	$grade_photo_10=""; 
	
	/* For Academics 12th*/
	
	$board_12="";
	$passing_year_12="";
	
	$marks_12="";
	$total_marks_12="";
	
	$percentage_12="";
	$college_12="";
	
	$grade_photo_12="";

	$high_qual="";
	$gap_year="";
	$courses_id="";
	
	if(isset($_POST['save']))
	{
		extract($_POST);
		
		$pic=$_FILES['report_photo']['name'];
		echo $photo_10=$_FILES['grade_card_10']['name'];
		echo $photo_12=$_FILES['grade_card_12']['name'];
		echo $stu_photo=$_FILES['stu_photo']['name'];
		echo $sign=$_FILES['sign']['name'];
		
		
		echo $qs="insert into student(stu_photo,signature,first_name,last_name,dob,gender,category,religion,mobile,
		email,password,mother_ton,ident,aadhar,pan,marital,report_photo,cor_house,cor_street,cor_colony,
		cor_city,cor_state,cor_country,cor_pincode,per_house,per_street,per_colony,per_city,
		per_state,per_country,per_pincode,father_first_name,father_last_name,mother_first_name,
		mother_last_name,father_mobile,father_email,annual_income,guardian_name,guardian_relation,
		board_10,passing_year_10,marks_10,total_marks_10,percentage_10,college_10,photo_10,
		board_12,passing_year_12,marks_12,total_marks_12,percentage_12,college_12,photo_12,
		high_qual,gap_year,course)
		values
		('$stu_photo','$sign','$first_name','$last_name','$dob','$gender','$category','$religion','$mobile',
		'$email','$aadhar','$mother_ton','$ident','$aadhar','$pan','$marital','$pic','$cor_house'
		,'$cor_street','$cor_colony','$cor_city','$cor_state','$cor_country','$cor_pincode',
		'$per_house'
		,'$per_street','$per_colony','$per_city','$per_state','$per_country','$per_pincode',
		'$father_first_name','$father_last_name','$mother_first_name','$mother_last_name',
		'$father_mobile','$father_email','$annual_income','$guardian_name','$guardian_relation',
		'$board_10','$passing_year_10','$marks_10','$total_marks_10','$percentage_10','$college_10'
		,'$photo_10','$board_12','$passing_year_12','$marks_12','$total_marks_12','$percentage_12',
		'$college_12'
		,'$photo_12','$high_qual','$gap_year','$course_id')";
		
		mysqli_query($con,$qs) or die(mysqli_error($con));
		
		move_uploaded_file($_FILES['report_photo']['tmp_name'],"photo/".$pic);
		move_uploaded_file($_FILES['grade_card_10']['tmp_name'],"photo/".$photo_10);
		move_uploaded_file($_FILES['grade_card_12']['tmp_name'],"photo/".$photo_12);
		move_uploaded_file($_FILES['stu_photo']['tmp_name'],"photo/".$stu_photo);
		move_uploaded_file($_FILES['sign']['tmp_name'],"photo/".$sign);
		
		header('location:form.php');
	}
	
	$qs="select * from student";
	$data=mysqli_query($con,$qs);
	
	$row=mysqli_fetch_array($data);
	
	$stu_photo=$row['stu_photo'];
	
	
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
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Motion - LMS Online Education Course </title>
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
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
	<?php
		include('inc/header.php');
	?>
	<!-- Modal -->
	<div class="sign_up_modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered" role="document">
	    	<div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      	</div>
	    		<ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
				  	<li class="nav-item">
				    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="student-dashboard.php" role="tab" aria-controls="home" aria-selected="true">Login</a>
				  	</li>
				  	<li class="nav-item">
				    	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
				  	</li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="login_form">
							<form action="#">
								<div class="heading">
									<h3 class="text-center">Login to your account</h3>
									<p class="text-center">Don't have an account? <a class="text-thm" href="#">Sign Up!</a></p>
								</div>
								 <div class="form-group">
							    	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address">
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
								</div>
								<div class="form-group custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="exampleCheck1">
									<label class="custom-control-label" for="exampleCheck1">Remember me</label>
									<a class="tdu btn-fpswd float-right" href="#">Forgot Password?</a>
								</div>
								<a href="student-dashboard.php"><button type="submit" class="btn btn-log btn-block btn-thm2">Login</button></a>
								<hr>
								<div class="row mt40">
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
									</div>
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
									</div>
								</div>
							</form>
						</div>
				  	</div>
				  	<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="sign_up_form">
							<div class="heading">
								<h3 class="text-center">Create New Account</h3>
								<p class="text-center">Have an account? <a class="text-thm" href="#">Login</a></p>
							</div>
							<form action="#">
								<div class="form-group">
							    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Username">
								</div>
								 <div class="form-group">
							    	<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email Address">
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirm Password">
								</div>
								<div class="form-group custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="exampleCheck2">
									<label class="custom-control-label" for="exampleCheck2">Want to become an instructor?</label>
								</div>
								<button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>
								<hr>
								<div class="row mt40">
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
									</div>
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
									</div>
								</div>
							</form>
						</div>
				  	</div>
				</div>
	    	</div>
	  	</div>
	</div>
	<!-- Modal Search Button Bacground Overlay -->
    <div class="search_overlay dn-992">
		<div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
		    <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i class="fa fa-times"></i></a>
		    <div id="mk-fullscreen-search-wrapper">
		      <form method="get" id="mk-fullscreen-searchform">
		        <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input">
		        <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
		      </form>
		    </div>
		</div>
	</div>

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2">
		            <img class="nav_logo_img img-fluid float-left mt20" src="images/header-logo.png" alt="header-logo.png">
		            <span>Motion</span>
				</div>
				<ul class="menu_bar_home2">
					<li class="list-inline-item">
	                	<div class="search_overlay">
						  <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
						    <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
						  </a>
							<div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
							    <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i class="fa fa-times"></i></a>
							    <div id="mk-fullscreen-search-wrapper2">
							      <form method="get" id="mk-fullscreen-searchform2">
							        <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input2">
							        <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
							      </form>
							    </div>
							</div>
						</div>
					</li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li><span>Home</span>
	                <ul>
	                    <li><a href="index.html">Home 1</a></li>
	                    <li><a href="index2.html">Home 2</a></li>
	                    <li><a href="index3.html">Home 3</a></li>
	                    <li><a href="index4.html">Home 4</a></li>
	                    <li><a href="index5.html">Home 5</a></li>
	                    <li><a href="index6.html">Home - University</a></li>
	                    <li><a href="index7.html">Home College</a></li>
	                    <li><a href="index8.html">Home Kindergarten</a></li>
	                </ul>
				</li>
				<li><span>Courses</span>
					<ul>
						<li><span>Courses List</span>
							<ul>
	                            <li><a href="page-course-v1.html">Courses v1</a></li>
	                            <li><a href="page-course-v2.html">Courses v2</a></li>
	                            <li><a href="page-course-v3.html">Courses v3</a></li>
							</ul>
						</li>
						<li><span>Courses Single</span>
							<ul>
	                            <li><a href="page-course-single-v1.html">Single V1</a></li>
	                            <li><a href="page-course-single-v2.html">Single V2</a></li>
	                            <li><a href="page-course-single-v3.html">Single V3</a></li>
							</ul>
						</li>
                        <li><a href="page-instructors.html">Instructors</a></li>
		                <li><a href="page-instructors-single.html">Instructor Single</a></li>
					</ul>
				</li>
				<li><span>Events</span>
					<ul>
						<li><a href="page-event.html">Event List</a></li>
						<li><a href="page-event-single.html">Event Single</a></li>
					</ul>
				</li>
				<li><span>Pages</span>
					<ul>
						<li><span>Shop Pages</span>
							<ul>
			                    <li><a href="page-shop.html">Shop</a></li>
			                    <li><a href="page-shop-single.html">Shop Single</a></li>
			                    <li><a href="page-shop-cart.html">Cart</a></li>
			                    <li><a href="page-shop-checkout.html">Checkout</a></li>
			                    <li><a href="page-shop-order.html">Order</a></li>
							</ul>
						</li>
						<li><span>User Admin</span>
							<ul>
								<li><a href="page-dashboard.html">Dashboard</a></li>
								<li><a href="page-my-courses.html">My Courses</a></li>
								<li><a href="page-my-order.html">My Order</a></li>
								<li><a href="page-my-message.html">My Message</a></li>
								<li><a href="page-my-review.html">My Review</a></li>
								<li><a href="page-my-bookmarks.html">My Bookmarks</a></li>
								<li><a href="page-my-listing.html">My Listing</a></li>
								<li><a href="page-my-setting.html">My Setting</a></li>
		                    </ul>
						</li>
		                <li><a href="page-about.html">About Us</a></li>
						<li><a href="page-gallery.html">Gallery</a></li>
						<li><a href="page-faq.html">Faq</a></li>
						<li><a href="page-login.html">LogIn</a></li>
						<li><a href="page-register.html">Register</a></li>
						<li><a href="page-pricing.html">Membership</a></li>
						<li><a href="page-error.html">404 Page</a></li>
						<li><a href="page-terms.html">Terms and Conditions</a></li>
						<li><a href="page-become-instructor.html">Become an Instructor</a></li>
						<li><a href="page-ui-element.html">UI Elements</a></li>
					</ul>
				</li>
				<li><span>Blog</span>
					<ul>
	                    <li><a href="page-blog-v1.html">Blog List 1</a></li>
	                    <li><a href="page-blog-grid.html">Blog List 2</a></li>
	                    <li><a href="page-blog-list.html">Blog List 3</a></li>
	                    <li><a href="page-blog-single.html">Single Post</a></li>
					</ul>
				</li>
				
				<li><span><a href="form.php">Student Form</a></span>
					
				</li>
				<li><a href="page-contact.html">Contact</a></li>
				<li><a href="page-login.html"><span class="flaticon-user"></span> Login</a></li>
				<li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li>
			</ul>
		</nav>
	</div>

	<!-- 2nd Home Slider -->
	<div class="home1-mainslider">
		<div class="container-fluid p0">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-banner-wrapper">
					    <div class="banner-style-one owl-theme owl-carousel">
					        <div class="slide slide-one" style="background-image: url(images/home/1.jpg); height: 95vh;">
					            <div class="container">
					                <div class="row home-content">
					                    <div class="col-lg-12 text-center p0">
					                        <h3 class="banner-title">Self EducatIon Resources and Infos</h3>
					                        <p>Technology is brining a massive wave of evolution on learning things on different ways.</p>
					                        <div class="btn-block"><a href="#" class="banner-btn">Ready to get Started?</a></div>
					                    </div>
					                </div>
					            </div>
					        </div>
					        <div class="slide slide-one" style="background-image: url(images/home/2.jpg);height: 95vh;">
					            <div class="container">
					                <div class="row home-content">
					                    <div class="col-lg-12 text-center p0">
					                        <h3 class="banner-title">Self EducatIon Resources and Infos</h3>
					                        <p>Technology is brining a massive wave of evolution on learning things on different ways</p>
					                        <div class="btn-block"><a href="#" class="banner-btn">Ready to get Started?</a></div>
					                    </div>
					                </div>
					            </div>
					        </div>
					        <div class="slide slide-one" style="background-image: url(images/home/3.jpg);height: 95vh;">
					            <div class="container">
					                <div class="row home-content">
					                    <div class="col-lg-12 text-center p0">
					                        <h3 class="banner-title">Find the Best Courses</h3>
					                        <p>Technology is brining a massive wave of evolution on learning things on different ways</p>
					                        <div class="btn-block"><a href="#" class="banner-btn">Ready to get Started?</a></div>
					                    </div>
					                </div>
					            </div>
					        </div>
					    </div>
					    <div class="carousel-btn-block banner-carousel-btn">
					        <span class="carousel-btn left-btn"><i class="flaticon-left-arrow left"></i> <span class="left">PR <br> EV</span></span>
					        <span class="carousel-btn right-btn"><span class="right">NE <br> XT</span> <i class="flaticon-right-arrow-1 right"></i></span>
					    </div><!-- /.carousel-btn-block banner-carousel-btn -->
					</div><!-- /.main-banner-wrapper -->
				</div>
			</div>
		</div>
		
	</div>


	<!-- School Category Courses -->
					<div class="col-sm-12 ">
						<div style="margin:100px;">
							<form method="post" enctype="multipart/form-data">
								<fieldset>
									<legend><h3 style="color:magenta;text-align:center;">Basic Information</h3></legend><br/><br/>
									
									  <div class="card mb-4 mb-xl-0 row">
               
								<?php
									echo $stu_photo;
								?>
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
								 
								  <div class="card-body text-left">
                    <!-- Profile picture image-->
										
                    <img id="si" alt="your image" style="width:150px;height:150px" class="img-account-profile rounded-square mb-2" src="../motion/photo/<?php echo $row['signature']; ?>">
										
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
										
                   <div class="card-body text-left">
										<label class="btn btn-primary" id="set" style="margin-top:50px;margin-left:80px;"/>Upload Student Signature<input class="file" id="imgsi" type="file" name="sign"/></label>
									 </div>
									 
									  <div class="card-header">Student Signature</div>
									
								 </div>
								 
									
            </div>
									<div class="row">
									
										<div class="col">
											<div class="form-group">
													<h5>First name</h5>
													<input type="hidden" class="form-control h50" placeholder="First name" name="stu_id">
													<input type="text" class="form-control h50" placeholder="First name" name="first_name">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Last name</h5>
													<input type="text" class="form-control h50" placeholder="Last name" name="last_name">
											</div>
										</div>
									</div>
									
									<div class="row">
									
										<div class="col">
											<div class="form-group">
													<h5>Date Of Birth</h5>
													<input type="date" class="form-control h50" name="dob">
											</div>
										</div>
										
										<div class="col">
												<h5>Gender</h5>
											<div class="ui_kit_radiobox">
												<div class="radio">
													<input id="radio_one" name="gender" value="male" type="radio" checked="">
													<label for="radio_one"><span class="radio-label"></span> Male</label>
												</div>
												<div class="radio">
													<input id="radio_two" name="gender" value="female" type="radio">
													<label for="radio_two"><span class="radio-label"></span> Female</label>
												</div>
												<div class="radio">
													<input id="radio_three" name="gender" value="other" type="radio">
													<label for="radio_three"><span class="radio-label"></span> Other</label>
												</div>
											</div>								
										</div>
										
									</div>
									
									<div class="row">
									
										<div class="col">
												<h5>Category</h5>
												<select class="selectpicker custom-select-lg mb-3" name="category">
												<option value="--select--">--select--</option>
												<option value="Gen">General</option>
												<option value="OBC">OBC</option>
												<option value="SC">SC</option>
												<option value="ST">ST</option>
												<option value="EWS">EWS</option>
												<option value="Other">Other</option>
												</select>
										</div>
										<div class="col">
												<h5>Religion</h5>
												<select class="selectpicker custom-select-lg mb-3" name="religion">
												<option value="--select--">--select--</option>
												<option value="Hindu">Hindu</option>
												<option value="Muslim">Muslim</option>
												<option value="Sikh">Sikh</option>
												<option value="Christian">Christian</option>
												<option value="Buddhist">Buddhist</option>
												<option value="Jain">Jain</option>
												<option value="Jews">Jews</option>
												<option value="Parsi">Parsi</option>
												<option value="Athiest">Athiest</option>
												<option value="Other">Other</option>
												</select>
										</div>
									</div>
									
									<div class="row">
									
										<div class="col">
											<div class="form-group">
													<h5>Mobile Number</h5>
													<input type="mobile" class="form-control h50" placeholder="Mobile number" name="mobile">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Email</h5>
													<input type="email" class="form-control h50" placeholder="Email Id" name="email" required>
											</div>
										</div>
									</div>
									
									<div class="row">
									
										<div class="col">
											<div class="form-group">
													<h5>Mother Tongue</h5>
													<input type="text" class="form-control h50" placeholder="Language" name="mother_ton">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Identification</h5>
													<input type="text" class="form-control h50" placeholder="eg: cut mark on forhead" name="ident">
											</div>
										</div>
									</div>
									
									<div class="row">
									
										<div class="col">
											<div class="form-group">
													<h5>Aadhar Card Number</h5>
													<input type="text" class="form-control h50" placeholder="Aadhar card number" name="aadhar" required>
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>PAN Card Number</h5>
													<input type="text" class="form-control h50" placeholder="PAN card number" name="pan">
											</div>
										</div>
									</div>
									
									<div class="row">
									
										<div class="col">
												<h5>Marital Status</h5>
												<select class="selectpicker custom-select-lg mb-3" name="marital">
												<option value="--select--">--select--</option>
												<option value="single">Single</option>
												<option value="married">Married</option>
												<option value="divorced">Divorced</option>
												<option value="other">Other</option>
												</select>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Upload Covid Vaccination Report</h5>
													<img src=""/>
													<input type="file" name="report_photo">
											</div>
										</div>
									</div>
									
									<br/>
									<h4><u>Correspondance Address</u></h4><br/>
									<div class="row">
										
										<div class="col">
										
											<div class="form-group">
													<h5>House no.</h5>
													<input type="text" class="form-control h50" placeholder="House no." name="cor_house">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Street</h5>
													<input type="text" class="form-control h50" placeholder="Street" name="cor_street">
											</div>
										</div>
										
										
									</div>
									
									<div class="row">
										<div class="col">
											<div class="form-group">
													<h5>Colony/Apartment</h5>
													<input type="text" class="form-control h50" placeholder="Colony/Apartment" name="cor_colony">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>City/Village</h5>
													<input type="text" class="form-control h50" placeholder="Street" name="cor_city">
											</div>
										</div>
										
									</div>
									
									<div class="row">
										<div class="col">
											<div class="form-group">
													<h5>State</h5>
													<input type="text" class="form-control h50" placeholder="State" name="cor_state">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Country</h5>
													<input type="text" class="form-control h50" placeholder="Country" name="cor_country">
											</div>
										</div>
										
									</div>
									
										<div class="row">
											<div class="col-6">
												<div class="form-group">
														<h5>Pincode</h5>
														<input type="text" class="form-control h50" placeholder="Pincode" name="cor_pincode">
												</div>
											</div>
										</div>
										
										<br/>
									<h4><u>Permanent Address</u></h4><br/>
									<div class="row">
										
										<div class="col">
										
											<div class="form-group">
													<h5>House no.</h5>
													<input type="text" class="form-control h50" placeholder="House no." name="per_house">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Street</h5>
													<input type="text" class="form-control h50" placeholder="Street" name="per_street">
											</div>
										</div>
										
										
									</div>
									
									<div class="row">
										<div class="col">
											<div class="form-group">
													<h5>Colony/Apartment</h5>
													<input type="text" class="form-control h50" placeholder="Colony/Apartment" name="per_colony">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>City/Village</h5>
													<input type="text" class="form-control h50" placeholder="Street" name="per_city">
											</div>
										</div>
										
									</div>
									
									<div class="row">
										<div class="col">
											<div class="form-group">
													<h5>State</h5>
													<input type="text" class="form-control h50" placeholder="State" name="per_state">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Country</h5>
													<input type="text" class="form-control h50" placeholder="Country" name="per_country">
											</div>
										</div>
										
									</div>
									
										<div class="row">
											<div class="col-6">
												<div class="form-group">
														<h5>Pincode</h5>
														<input type="text" class="form-control h50" placeholder="Pincode" name="per_pincode">
												</div>
											</div>
										</div>
									
									
								</fieldset>
								
								<fieldset>
									<legend><h3 style="color:Blue;text-align:center;">Father/Guardian Details</h3></legend>
									
									<div class="row">
										<div class="col">
											<div class="form-group">
													<h5>Father's first name</h5>
													<input type="text" class="form-control h50" placeholder="Father's first name" name="father_first_name">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Father's last name</h5>
													<input type="text" class="form-control h50" placeholder="Father's last name" name="father_last_name">
											</div>
										</div>
										
									</div>
									
									<div class="row">
										<div class="col">
											<div class="form-group">
													<h5>Mother's first name</h5>
													<input type="text" class="form-control h50" placeholder="Mother's first name" name="mother_first_name">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Mother's last name</h5>
													<input type="text" class="form-control h50" placeholder="Mother's last name" name="mother_last_name">
											</div>
										</div>
										
									</div>
									
									
										
									<div class="row">
									
										<div class="col">
											<div class="form-group">
													<h5>Father's Mobile Number</h5>
													<input type="mobile" class="form-control h50" placeholder="Father's mobile number" name="father_mobile">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Father's Email</h5>
													<input type="email" class="form-control h50" placeholder="Father's email Id" name="father_email">
											</div>
										</div>
									</div>
									
									<div class="row">
											<div class="col-6">
												<div class="form-group">
														<h5>Annual Income</h5>
														<input type="text" class="form-control h50" placeholder="Annual income" name="annual_income">
												</div>
											</div>
										</div>
									<br/>
									<h4><u>Guardian Information</u></h4><br/>
									
									<div class="row">
										<div class="col">
											<div class="form-group">
													<h5>Guardian name</h5>
													<input type="text" class="form-control h50" placeholder="Guardian name" name="guardian_name">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Guardian Relation</h5>
													<input type="text" class="form-control h50" placeholder="Guardian relation" name="guardian_relation">
											</div>
										</div>
										
									</div>
								</fieldset>
								
								<fieldset>
									<legend><h3 style="color:Brown;text-align:center;">Academics</h3></legend>
									
									<div class="col">
										<div class="shortcode_widget_table">
											<h4>Qualification</h4>
											<div class="row">
												<table class="table" width="400px">
													
															<tr bgcolor="skyblue">
																<th scope="col"></th>
																<th scope="col">Board</th>
																<th scope="col">Passing Year</th>
																<th scope="col">Marks Obtained</th>
																<th scope="col">Total Marks</th>
																<th scope="col">Percentage</th>
																<th scope="col">College Name</th>
																<th scope="col">Upload Grade Card</th>
															</tr>
													
															<tr>
																<td><b>10<sup>th</sup> High School</b></td>
																
																<td><input type="text" class="form-control h50" name="board_10"/></td>
																<td><input type="text" class="form-control h50" name="passing_year_10"/></td>
																<td><input type="text" class="form-control h50" name="marks_10"/></td>
																<td><input type="text" class="form-control h50" name="total_marks_10"/></td>
																<td><input type="text" class="form-control h50" name="percentage_10"/></td>
																<td><input type="text" class="form-control h50" name="college_10"/></td>
																<td><input type="file" name="grade_card_10"/></td>
															</tr>
															
															<tr>
																<td><b>12<sup>th</sup> Intermediate</b></td>
																<td><input type="text" class="form-control h50" name="board_12"/></td>
																<td><input type="text" class="form-control h50" name="passing_year_12"/></td>
																<td><input type="text" class="form-control h50" name="marks_12"/></td>
																<td><input type="text" class="form-control h50" name="total_marks_12"/></td>
																<td><input type="text" class="form-control h50" name="percentage_12"/></td>
																<td><input type="text" class="form-control h50" name="college_12"/></td>
																<td><input type="file" name="grade_card_12"/></td>
															</tr>
												</table>
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col">
											<div class="form-group">
													<h5>Higher Qualification</h5>
													<input type="text" class="form-control h50" placeholder="Higher qualification" name="high_qual">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Gap Year</h5>
													<input type="text" class="form-control h50" placeholder="Gap Year" name="gap_year">
											</div>
										</div>
										
									</div>
									
									<div class="row">
										<div class="col-6">
											<div class="shortcode_widget_multiselect" >
													<h5>Select Courses</h5>
												<div class="ui_kit_multi_select_box">
													<select class="selectpicker" name="course_id">
														<?php
																	$qs="select * from course";
																	$data=mysqli_query($con,$qs);
																	
																	while($row=mysqli_fetch_array($data,MYSQLI_BOTH))
																	{
																		echo "<option value='".$row['course_id']."'>
																						".$row['course_name']."
																					</option>";
																	}
																?>
													</select>
												</div>						
											</div>
										</div>
									</div>
								</fieldset>
								<br/><br/>
								
								<div class="row">
								
									<div class="col-12" align="center">
										<input class="btn btn-lg btn-danger" type="reset" value="Reset"/>
										<input class="btn btn-lg btn-success" type="submit" value="Submit" name="save" onclick="alert('Dear Students Login User Name is your Email Id and your Password is your Aadhar Number?')"/>
									</div>
								</div>
								
								
							</form>
						</div>
					</div>
					
	<!-- Our Footer Bottom Area -->
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
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/isotop.js"></script>
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
			
			imgsi.onchange = evt => {
				const [file] = imgsi.files
				if (file) {
					si.src = URL.createObjectURL(file)
				}
			}
		</script>
</body>
</html>