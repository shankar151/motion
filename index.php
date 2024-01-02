<?php
	session_start();
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
				    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
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
								<button type="submit" class="btn btn-log btn-block btn-thm2">Login</button>
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
		<div class="container home_iconbox_container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-sm-6 col-lg-3">
							<div class="home_icon_box">
								<div class="icon"><img src="images/home/hicon1.png" alt="hicon1.png"></div>
								<p>Learn From The Experts</p>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="home_icon_box">
								<div class="icon mt15"><img src="images/home/hicon2.png" alt="hicon2.png"></div>
								<p>Book Library & Store</p>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="home_icon_box">
								<div class="icon"><img src="images/home/hicon3.png" alt="hicon3.png"></div>
								<p>Worldwide Recognize</p>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="home_icon_box">
								<div class="icon"><img src="images/home/hicon4.png" alt="hicon4.png"></div>
								<p>Best Industry Leaders</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- School Category Courses -->
	<section id="our-courses" class="our-courses pt90 pt650-992">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a href="#our-courses">
				    	<div class="mouse_scroll">
			        		<div class="icon"><span class="flaticon-download-arrow"></span></div>
				    	</div>
				    </a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">Via School Categories Courses</h3>
						<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<div class="img_hvr_box" style="background-image: url(images/courses/1.jpg);">
						<div class="overlay">
							<div class="details">
								<h5>Design</h5>
								<p>Over 800 Courses</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="img_hvr_box" style="background-image: url(images/courses/2.jpg);">
						<div class="overlay">
							<div class="details">
								<h5>Business</h5>
								<p>Over 1,400 Courses</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="img_hvr_box" style="background-image: url(images/courses/3.jpg);">
						<div class="overlay">
							<div class="details">
								<h5>Software Development</h5>
								<p>Over 350 Courses</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="img_hvr_box" style="background-image: url(images/courses/4.jpg);">
						<div class="overlay">
							<div class="details">
								<h5>Web Development</h5>
								<p>Over 640 Courses</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="img_hvr_box" style="background-image: url(images/courses/5.jpg);">
						<div class="overlay">
							<div class="details">
								<h5>Photography</h5>
								<p>Over 740 Courses</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="img_hvr_box" style="background-image: url(images/courses/6.jpg);">
						<div class="overlay">
							<div class="details">
								<h5>Audio + Music</h5>
								<p>Over 120 Courses</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="img_hvr_box" style="background-image: url(images/courses/7.jpg);">
						<div class="overlay">
							<div class="details">
								<h5>Marketing</h5>
								<p>Over 200 Courses</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="img_hvr_box" style="background-image: url(images/courses/8.jpg);">
						<div class="overlay">
							<div class="details">
								<h5>3D + Animation</h5>
								<p>Over 900 Courses</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 offset-lg-3">
					<div class="courses_all_btn text-center">
						<a class="btn btn-transparent" href="#">View All Courses</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Divider -->
	<section class="divider_home1 bg-img2 parallax" data-stellar-background-ratio="0.3">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="divider-one">
						<p class="color-white">STARTING ONLINE LEARNING</p>
						<h1 class="color-white text-uppercase">Enhance your skIlls wIth best OnlIne courses</h1>
						<a class="btn btn-transparent divider-btn" href="#">Get Started Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Top Courses -->
	<section id="top-courses" class="top-courses pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">Browse Our Top Courses</h3>
						<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
					</div>
				</div>
			</div>
			<div class="row">
			 	<div class="col-lg-12">
			 		<div id="options" class="alpha-pag full">
						<div class="option-isotop">
							<ul id="filter" class="option-set" data-option-key="filter">
								<li class="list-inline-item"><a href="#all" data-option-value="*" class="selected">Developer</a></li>
								<li class="list-inline-item"><a href="#business" data-option-value=".business">Business</a></li>
								<li class="list-inline-item"><a href="#design" data-option-value=".design">Design</a></li>
								<li class="list-inline-item"><a href="#web" data-option-value=".web">Web</a></li>
								<li class="list-inline-item"><a href="#marketing" data-option-value=".marketing">Marketing</a></li>
							</ul>
						</div>
					</div><!-- FILTER BUTTONS -->
			 		<div class="emply-text-sec">
			 			<div class="row" id="masonry_abc">
						<?php
							$qs = "select * from course";
							$data = mysqli_query($con,$qs);
							while($row = mysqli_fetch_array($data,MYSQLI_BOTH))
							{		
						?>
			 				<div class="col-md-6 col-lg-4 col-xl-3 business design">
								<div class="top_courses">
									<div class="thumb">
										<img class="img-whp" src="../motion/photo/<?php echo $row['course_image']; ?>" alt="t1.jpg" width="100px" height="200px">
										<div class="overlay">
											<div class="tag">Best Seller</div>
											<div class="icon"><span class="flaticon-like"></span></div>
											<a class="tc_preview_course" href="course_single.php?c_id=<?php echo $row['course_id']; ?>">Preview Course</a>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p></p>
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
							<?php
							}
							?>
			 			</div>
			 		</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Testimonials -->
	<section id="our-testimonials" class="our-testimonials">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">What People Say</h3>
						<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="testimonialsec">
						<ul class="tes-nav">
							<li>
								<img class="img-fluid" src="images/testimonial/1.jpg" alt="1.jpg"/>
							</li>
							<li>
								<img class="img-fluid" src="images/testimonial/2.jpg" alt="2.jpg"/>
							</li>
							<li>
								<img class="img-fluid" src="images/testimonial/3.jpg" alt="3.jpg"/>
							</li>
							<li>
								<img class="img-fluid" src="images/testimonial/4.jpg" alt="4.jpg"/>
							</li>
						</ul>
						<ul class="tes-for">
							<li>
								<div class="testimonial_item">
									<div class="details">
										<h5>Ali Tufan</h5>
										<span class="small text-thm">Client</span>
										<p>Customization is very easy with this theme. Clean and quality design and full support for any kind of request! Great theme!</p>
									</div>
								</div>
							</li>
							<li>
								<div class="testimonial_item">
									<div class="details">
										<h5>Ali Tufan</h5>
										<span class="small text-thm">Client</span>
										<p>Customization is very easy with this theme. Clean and quality design and full support for any kind of request! Great theme!</p>
									</div>
								</div>
							</li>
							<li>
								<div class="testimonial_item">
									<div class="details">
										<h5>Ali Tufan</h5>
										<span class="small text-thm">Client</span>
										<p>Customization is very easy with this theme. Clean and quality design and full support for any kind of request! Great theme!</p>
									</div>
								</div>
							</li>
							<li>
								<div class="testimonial_item">
									<div class="details">
										<h5>Ali Tufan</h5>
										<span class="small text-thm">Client</span>
										<p>Customization is very easy with this theme. Clean and quality design and full support for any kind of request! Great theme!</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Blog -->
	<section class="our-blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">Latest News And Events</h3>
						<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-xl-6">
					<div class="blog_slider_home1">
						<div class="item">
							<div class="blog_post one">
								<div class="thumb">
									<div class="post_title">Events</div>
									<img class="img-fluid w100" src="images/blog/1.jpg" alt="1.jpg">
									<a class="post_date" href="#"><span>28 <br> March</span></a>
								</div>
								<div class="details">
									<div class="post_meta">
										<ul>
											<li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
											<li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
										</ul>
									</div>
									<h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="blog_post one">
								<div class="thumb">
									<div class="post_title">Events</div>
									<img class="img-fluid w100" src="images/blog/1a.jpg" alt="1a.jpg">
									<a class="post_date" href="#"><span>28 <br> March</span></a>
								</div>
								<div class="details">
									<div class="post_meta">
										<ul>
											<li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
											<li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
										</ul>
									</div>
									<h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="blog_post one">
								<div class="thumb">
									<div class="post_title">Events</div>
									<img class="img-fluid w100" src="images/blog/1b.jpg" alt="1b.jpg">
									<a class="post_date" href="#"><span>28 <br> March</span></a>
								</div>
								<div class="details">
									<div class="post_meta">
										<ul>
											<li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
											<li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
										</ul>
									</div>
									<h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3">
					<div class="blog_post">
						<div class="thumb">
							<img class="img-fluid w100" src="images/blog/2.jpg" alt="2.jpg">
							<a class="post_date" href="#">July 21, 2019</a>
						</div>
						<div class="details">
							<h5>Marketing</h5>
							<h4>A Solution Built for Teachers</h4>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3">
					<div class="blog_post">
						<div class="thumb">
							<img class="img-fluid w100" src="images/blog/3.jpg" alt="3.jpg">
							<a class="post_date" href="#">July 21, 2019</a>
						</div>
						<div class="details">
							<h5>Business</h5>
							<h4>An Overworked Newspaper Editor</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt50">
				<div class="col-lg-12">
					<div class="read_more_home text-center">
						<h4>Like what you see? <a href="#">See more posts<span class="flaticon-right-arrow pl10"></span></a></h4>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Popular Job Categories -->
	<section class="home1-divider2 parallax" data-stellar-background-ratio="0.3">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-lg-7">
					<div class="app_grid">
						<h1 class="mt0">Download & Enjoy</h1>
						<p>Access your courses anywhere, anytime & prepare<br> with practice tests.</p>
						<button class="apple_btn btn-transparent">
							<span class="icon">
								<span class="flaticon-apple"></span>
							</span>
							<span class="title">App Store</span>
							<span class="subtitle">Available now on the</span>
						</button>
						<button class="play_store_btn btn-transparent">
							<span class="icon">
								<span class="flaticon-google-play"></span>
							</span>
							<span class="title">Google Play</span>
							<span class="subtitle">Get in on</span>
						</button>
					</div>
				</div>
				<div class="col-md-5 col-lg-5">
					<div class="phone_img">
						<img class="img-fluid" src="images/resource/phone_home.png" alt="phone_home.png">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Partners -->
	<section id="our-partners" class="our-partners">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">Need To Train Your Team?</h3>
						<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/1.png" alt="1.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/2.png" alt="2.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/3.png" alt="3.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/4.png" alt="4.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/5.png" alt="5.png">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Newslatters -->
	<section id="our-newslatters" class="our-newslatters">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">Get Newsletter</h3>
						<p>Your download should start automatically, if not Click here. Should I give up, huh?.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="footer_apps_widget_home1">
						<form class="form-inline mailchimp_form">
							<input type="email" class="form-control" placeholder="Email address">
							<button type="submit" class="btn btn-lg btn-thm dbxshad">Get it now <span class="flaticon-right-arrow-1"></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
	<section class="footer_one">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
					<div class="footer_contact_widget">
						<h4>CONTACT</h4>
						<p>329 Queensberry Street, North Melbourne </p>
						<p>VIC 3051, Australia.</p>
						<p>123 456 7890</p>
						<p>support@edumy.com</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
					<div class="footer_company_widget">
						<h4>COMPANY</h4>
						<ul class="list-unstyled">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="page-contact.html">Contact</a></li>
							<li><a href="#">Become a Teacher</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
					<div class="footer_program_widget">
						<h4>PROGRAMS</h4>
						<ul class="list-unstyled">
							<li><a href="#">Nanodegree Plus</a></li>
							<li><a href="#">Veterans</a></li>
							<li><a href="#">Georgia</a></li>
							<li><a href="#">Self-Driving Car</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
					<div class="footer_support_widget">
						<h4>SUPPORT</h4>
						<ul class="list-unstyled">
							<li><a href="#">Documentation</a></li>
							<li><a href="#">Forums</a></li>
							<li><a href="#">Language Packs</a></li>
							<li><a href="#">Release Status</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-md-3 col-lg-3">
					<div class="footer_apps_widget">
						<h4>MOBILE</h4>
						<div class="app_grid">
							<button class="apple_btn btn-dark">
								<span class="icon">
									<span class="flaticon-apple"></span>
								</span>
								<span class="title">App Store</span>
								<span class="subtitle">Available now on the</span>
							</button>
							<button class="play_store_btn btn-dark">
								<span class="icon">
									<span class="flaticon-google-play"></span>
								</span>
								<span class="title">Google Play</span>
								<span class="subtitle">Get in on</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer Middle Area -->
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
</body>
</html>