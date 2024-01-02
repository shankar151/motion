<?php
 include('inc/config.php');
 
		$question_id="";
		$question="";
		$opt_1="";
		$opt_2="";
		$opt_3="";
		$opt_4="";
		$option="";
		$course_id="";
		$course="";
		
				
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

	<!-- Modal Search Button Bacground Overlay -->
   

	<!-- Main Header Nav For Mobile -->
	

	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">Quiz</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Quiz</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our FAQ -->
	<section class="our-faq">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-xl-4">
					<div class="faq_question_widget">
						<h4 class="title">Correct Answer</h4>
						<div class="widget_list">
							<ul class="list_details">
								<li><a href="#">P</a></li>
								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-xl-8">
				
					<form method="post" enctype="multipart/form-data">
						<div class="col-lg-12">
							<div class="my_course_content_container">
								<div class="my_setting_content mb30">
									<div class="my_setting_content_header">
										<div class="my_sch_title">
											<h4 class="m0">Quesitons:-</h4>
										</div>
									</div>
									<div class="row my_setting_content_details pb0">
										<div class="col-xl-12" style="width:1000px">
											<div class="row">
												<div class="col-xl-6">
													<div class="my_profile_setting_input form-group">
												    	<label for="formGroupExampleInput1">Question</label>
												    	<input type="hidden" class="form-control" placeholder="Please enter your question" name="question_id">
															<input type="text" class="form-control" placeholder="Please enter your question" name="question" value="<?php echo $row['question']; ?>" required>
													</div>
												
												</div>
												
												
											</div>
											
											<div class="row">
													<div class="col-xl-6">
													<div class="my_profile_setting_input form-group">
												    	<label for="exampleInputPhone">Option 1</label>
												    	<input type="text" class="form-control" name="opt_1" placeholder="option 1" value="<?php echo $row['option_1']; ?>" required>
													</div>
													</div>
													
													<div class="col-xl-6">
													<div class="my_profile_setting_input form-group">
												    	<label for="exampleInputPhone">Option 2</label>
												    	<input type="text" class="form-control" name="opt_2" placeholder="option 2" value="<?php echo $row['option_2']; ?>" required>
													</div>
													</div>
													
													
												</div>
												
												<div class="row">
													<div class="col-xl-6">
													<div class="my_profile_setting_input form-group">
												    	<label for="exampleInputPhone">Option 3</label>
												    	<input type="text" class="form-control" name="opt_3" placeholder="option 3" value="<?php echo $row['option_3']; ?>" required>
													</div>
													</div>
													
													<div class="col-xl-6">
													<div class="my_profile_setting_input form-group">
												    	<label for="exampleInputPhone">Option 4</label>
												    	<input type="text" class="form-control" name="opt_4" placeholder="option 4" value="<?php echo $row['option_4']; ?>" required>
													</div>
													</div>
													
													
												</div>
											
												<hr color="black"/>
												
												<div class="col-lg-6">
													<div class="shortcode_widget_radiobox">
															<h4 class="lg20">Correct Option</h4>
														<div class="ui_kit_radiobox">
															<div class="radio">
																<input id="radio_one" name="option" type="radio" value="option_1" checked="" <?php if($row['correct_option']=="option_1"){echo "checked";} ?>>
																<label for="radio_one"><span class="radio-label"></span>Option 1</label>
															</div>
															<br/>
															<div class="radio">
																<input id="radio_two" name="option" type="radio" value="option_2" <?php if($row['correct_option']=="option_2"){echo "checked";} ?> >
																<label for="radio_two"><span class="radio-label"></span>Option 2</label>
															</div>
															<br/>
															<div class="radio">
																<input id="radio_three" name="option" type="radio" value="option_3" <?php if($row['correct_option']=="option_3"){echo "checked";} ?>>
																<label for="radio_three"><span class="radio-label"></span>Option 3</label>
															</div>
															<br/>
															<div class="radio">
																<input id="radio_four" name="option" type="radio" value="option_4" <?php if($row['correct_option']=="option_4"){echo "checked";} ?>>
																<label for="radio_four"><span class="radio-label"></span>Option 4</label>
															</div>
															<br/>
														</div>								
													</div>
												</div>
												<hr color="black"/>
													
											</div>
										</div>
									</div>
									
									
									
										<!--<div class="col-xl-4">
											<div class="my_profile_setting_input form-group">
										    	<label for="formGroupExampleInputZ">Video URL</label>
										    	<input type="text" class="form-control" id="formGroupExampleInputZ">
											</div>
										</div>-->
									    <div class="col-lg-12" style="text-align:center;">
											<input type="submit" class="my_setting_savechange_btn btn btn-thm" name="submit" value="submit" />
									    </div>
									</div>
								</div>
							</form>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
	<?php
		include('inc/footer.php')
	?>
	<!-- Our Footer Middle Area -->
	
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
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>