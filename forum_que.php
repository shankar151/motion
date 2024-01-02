<?php
	session_start();
	include('inc/config.php');
	
	$stu_id="";
	$mynotes="";
	$current_date="";
	
	if(!isset($_SESSION['email']))
	{
		header('location:index.php');
	}
	
	$stu_id=$_SESSION['stu_id'];
	
	$qs="select * from student where stu_id='$stu_id'";
	
	$data=mysqli_query($con,$qs);
	$row=mysqli_fetch_array($data);
	
	$course_id=$row['course'];
	
	if(isset($_POST['save']))
	{
		extract($_POST);
		
		echo $qs="insert into forum_question(question,stu_id,date)values('$question','$stu_id','$current_date')";
		
		mysqli_query($con,$qs) or die(mysqli_error($con));
		
		header('location:forum_que.php');
	}
	
	if(isset($_GET['del']))
	{
		$x=$_GET['del'];
		
		$qs="delete from forum_question where que_id='$x'";
		
		mysqli_query($con,$qs);
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
					include('inc/mo-dash-sidepanel.php');
				?>
				
				<?php
					include('inc/mob-sidepanel.php');
				?>
				
				<div class="col-sm-12 col-lg-8 col-xl-10">
				
					<div class="col-lg-12">
							<nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
								<h4 class="title float-left">Ask Questions</h4>
								<ol class="breadcrumb float-right">
							    	<li class="breadcrumb-item"><a href="admin-dashboard.php">Home</a></li>
							    	<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
						</div>
						
						<form method="post" enctype="multipart/form-data">
						
							<div class="row my_setting_content_details">
										<div class="col-xl-4">
											<div class="my_profile_setting_input form-group">
										    	<label for="formGroupExampleInputY">Student Name</label>
										    	<input type="text" class="form-control" id="formGroupExampleInputY" placeholder="student name" value="<?php echo $row['first_name']." ".$row['last_name']; ?>" readonly>
											</div>
										</div>
										
										<div class="col-xl-4">
											<div class="my_profile_setting_input form-group">
										    	<label for="formGroupExampleInputY">Date</label>
										    	<input type="text" class="form-control"  name="current_date" value="<?php echo date("d/m/Y"); ?>" readonly>
											</div>
										</div>
										<div class="col-lg-12">	
											<div class="my_resume_textarea">
												<div class="form-group">
												    <label for="exampleFormControlTextarea1">Ask Questions</label>
												    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="question"></textarea>
												</div>
											</div>
										</div>
										
										<div class="col-lg-12">
											<input type="submit" class="my_setting_savechange_btn btn btn-thm" name="save" value="Post your question">
									    </div>
									</div>
						</div>
					</form>
						
						
						<form>
							<div class="card shadow mb-12" style="width:1100px;">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Questions Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="1000px" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Que Id</th>
                                            <th>Student Name</th>
                                            <th>Course</th>
                                            <th>Date</th>
                                            <th>Question</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
																						<th>Que Id</th>
                                            <th>Student Name</th>
																						<th>Course</th>
                                            <th>Date</th>
                                            <th>Question</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
																		<?php
																			echo $stu_id;
																			
																			$qs="select * from ((student inner join forum_question on student.stu_id=forum_question.stu_id) inner join course on course=course_id) where course='$course_id'";
																			
																			$data=mysqli_query($con,$qs);
																			
																			while($row=mysqli_fetch_array($data,MYSQLI_BOTH))
																			{
																		?>
                                        <tr>
                                            <td><?php echo $row['que_id']; ?></td>
																						<td><?php echo $row['first_name']." ".$row['last_name']; ?></td>
                                           
                                            <td><?php echo $row['course_name']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
																						 <td><?php echo $row['question']; ?></td>
                                            <td><a href="forum_que.php?del=<?php echo $row['que_id']; ?>">Delete</a></td>
                                        </tr>
                                      <?php
																				}
																			?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
							</div>
							</form>
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