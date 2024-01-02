<?php
	include('inc/config.php');
	
	/*$qs="select * from student";
	
	$data=mysqli_query($con,$qs);
	
	$row=mysqli_fetch_array($data);
	
	$stu_id=$row['stu_id'];
	$first_name=$row['first_name'];
	$last_name=$row['last_name'];
	
	$dob=$row['dob'];
	$gender=$row['gender'];
	$category=$row['category'];
	$religion=$row['religion'];
	$mobile=$row['mobile'];
	$email=$row['email'];
	
	$mother_ton=$row['mother_ton'];
	$ident=$row['ident'];
	$aadhar=$row['aadhar'];
	$pan=$row['pan'];
	$marital=$row['marital'];
	$report_photo=$row['report_photo'];*/
	
	
	/*For correspondance Address */
	
	/*$cor_house=$row['cor_house'];
	$cor_street=$row['cor_street'];
	$cor_colony=$row['cor_colony'];
	$cor_city=$row['cor_city'];
	$cor_state=$row['cor_state'];
	$cor_country=$row['cor_country'];
	$cor_pincode=$row['cor_pincode'];*/
	
	/*For permanent Address */
	
	/*$per_house=$row['per_house'];
	$per_street=$row['per_street'];
	$per_colony=$row['per_colony'];
	$per_city=$row['per_city'];
	$per_state=$row['per_state'];
	$per_country=$row['per_country'];
	$per_pincode=$row['per_pincode'];*/
	
	/* For Father/Guardian information*/
	
	/*$father_first_name=$row['father_first_name'];
	$father_last_name=$row['father_last_name'];
	
	$mother_first_name=$row['mother_first_name'];
	$mother_last_name=$row['mother_last_name'];
	
	$father_mobile=$row['father_mobile'];
	$father_email=$row['father_email'];
	
	$annual_income=$row['annual_income'];
	
	$guardian_name=$row['guardian_name'];
	$guardian_relation=$row['guardian_relation'];*/
	
	/* For Academics 10th*/
	
	/*$board_10=$row['board_10'];
	$passing_year_10=$row['passing_year_10'];
	
	$marks_10=$row['marks_10'];
	$total_marks_10=$row['total_marks_10'];
	
	$percentage_10=$row['percentage_10'];
	$college_10=$row['college_10'];
	
	$grade_photo_10=$row['photo_10'];*/
	
	/* For Academics 12th*/
	
	/*$board_12=$row['board_12'];
	
	$passing_year_12=$row['passing_year_12'];
	
	$marks_12=$row['marks_12'];
	$total_marks_12=$row['total_marks_12'];
	
	$percentage_12=$row['percentage_12'];
	$college_12=$row['college_12'];
	
	$grade_photo_12=$row['photo_12'];

	$high_qual=$row['high_qual'];
	$gap_year=$row['gap_year'];
	$courses=$row['courses'];*/
	
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
	$courses="";
	
	if(isset($_POST['update']))
	{
		extract($_POST);
		
		$pic=$_FILES['report_photo']['name'];
		$photo_10=$_FILES['grade_card_10']['name'];
		$photo_12=$_FILES['grade_card_12']['name'];
		$stu_photo=$_FILES['stu_photo']['name'];
		$sign=$_FILES['sign']['name'];
		
		if(isset($_GET['stu_id']))
		{
			$x=$_GET['stu_id'];
			
			if($stu_photo!="")
			{
				$qs="update student set stu_photo='$stu_photo' where stu_id='$x'";
			
				mysqli_query($con,$qs);
			}
			
			if($pic!="")
			{
				$qs="update student set report_photo='$pic' where stu_id='$x'";
			
				mysqli_query($con,$qs);
			}
			
			if($photo_10!="")
			{
				$qs="update student set photo_10='$photo_10' where stu_id='$x'";
			
				mysqli_query($con,$qs);
			}
			
			if($photo_12!="")
			{
				$qs="update student set photo_12='$photo_12' where stu_id='$x'";
			
				mysqli_query($con,$qs);
			}
			
			if($sign!="")
			{
				$qs="update student set signature='$sign' where stu_id='$x'";
			
				mysqli_query($con,$qs);
			}
		
					$qs="update student set first_name='$first_name',last_name='$last_name',dob='$dob' ,gender='$gender' ,category='$category',religion='$religion',mobile='$mobile',
				email='$email',mother_ton='$mother_ton',ident='$ident',aadhar='$aadhar',pan='$pan',marital='$marital',cor_house='$cor_house',cor_street='$cor_street',cor_colony='$cor_colony',
				cor_city='$cor_city',cor_state='$cor_state',cor_country='$cor_country',cor_pincode='$cor_pincode',per_house='$per_house',per_street='$per_street',per_colony='$per_colony',per_city='$per_city',
				per_state='$per_state',per_country='$per_country',per_pincode='$per_pincode',father_first_name='$father_first_name',father_last_name='$father_last_name',mother_first_name='$mother_first_name',
				mother_last_name='mother_last_name',father_mobile='$father_mobile',father_email='$father_email',annual_income='$annual_income',guardian_name='$guardian_name',guardian_relation='$guardian_relation',
				board_10='$board_10',passing_year_10='$passing_year_10',marks_10='$marks_10',total_marks_10='$total_marks_10',percentage_10='$percentage_10',college_10='$college_10',
				board_12='$board_12',passing_year_12='$passing_year_12',marks_12='$marks_12',total_marks_12='$total_marks_12',percentage_12='$percentage_12',college_12='$college_12',
				high_qual='$high_qual',gap_year='$gap_year',course='$course_id' where stu_id='$x'";
			
				mysqli_query($con,$qs);
				
				move_uploaded_file($_FILES['report_photo']['tmp_name'],"../motion/photo/".$pic);
				move_uploaded_file($_FILES['grade_card_10']['tmp_name'],"../motion/photo/".$photo_10);
				move_uploaded_file($_FILES['grade_card_12']['tmp_name'],"../motion/photo/".$photo_12);
				move_uploaded_file($_FILES['stu_photo']['tmp_name'],"../motion/photo/".$stu_photo);
				move_uploaded_file($_FILES['sign']['tmp_name'],"../motion/photo/".$sign);
		
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
								<h4 class="title float-left">Students</h4>
								<ol class="breadcrumb float-right">
							    	<li class="breadcrumb-item"><a href="admin-dashboard.php">Home</a></li>
							    	<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
						</div>
						
						<div class="col-sm-12 ">
						<div style="margin:100px;">
						
						<?php
							if(isset($_GET['stu_id']))
							{
								$x=$_GET['stu_id'];
								$qs="select * from student where stu_id='$x'";
								
								$data=mysqli_query($con,$qs);
								$row=mysqli_fetch_array($data);
								
								
						?>
							<form method="post" enctype="multipart/form-data">
								<fieldset>
									<legend><h3 style="color:magenta;text-align:center;">Basic Information</h3></legend><br/><br/>
									
											  <div class="card mb-4 mb-xl-0">
               
								<?php
									echo $row['stu_photo'];
								?>
                <div class="card-body text-left">
                    <!-- Profile picture image-->
										
                    <img id="blah" alt="your image" style="width:150px;height:150px" class="img-account-profile rounded-square mb-2" src="../motion/photo/<?php echo $row['stu_photo']; ?>">
										
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
									
										<div class="col">
											<div class="form-group">
													<h5>Mother Tongue</h5>
													<input type="text" class="form-control h50" placeholder="Language" name="mother_ton" value="<?php echo $row['mother_ton']; ?>">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Identification</h5>
													<input type="text" class="form-control h50" placeholder="eg: cut mark on forhead" name="ident" value="<?php echo $row['ident']; ?>">
											</div>
										</div>
									</div>
									
									<div class="row">
									
										<div class="col">
											<div class="form-group">
													<h5>Aadhar Card Number</h5>
													<input type="text" class="form-control h50" placeholder="Aadhar card number" name="aadhar" value="<?php echo $row['aadhar']; ?>">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>PAN Card Number</h5>
													<input type="text" class="form-control h50" placeholder="PAN card number" name="pan" value="<?php echo $row['pan']; ?>">
											</div>
										</div>
									</div>
									
									<div class="row">
									
										<div class="col">
												<h5>Marital Status</h5>
												<select class="selectpicker custom-select-lg mb-3" name="marital">
												
												<option value="--select--"<?php if($row['marital']=="--select--") echo "selected"; ?>>--select--</option>
												<option value="single" <?php if($row['marital']=="single") echo "selected"; ?>>Single</option>
												<option value="married" <?php if($row['marital']=="married") echo "selected"; ?>>Married</option>
												<option value="divorced" <?php if($row['marital']=="divorces") echo "selected"; ?>>Divorced</option>
												<option value="other"<?php if($row['marital']=="other") echo "selected"; ?>>Other</option>
												</select>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Upload Covid Vaccination Report</h5>
													<input type="file" name="report_photo" ><span><?php echo $row['report_photo']; ?></span>
											</div>
										</div>
									</div>
									
									<br/>
									<h4><u>Correspondance Address</u></h4><br/>
									<div class="row">
										
										<div class="col">
										
											<div class="form-group">
													<h5>House no.</h5>
													<input type="text" class="form-control h50" placeholder="House no." name="cor_house" value="<?php echo $row['cor_house']; ?>">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Street</h5>
													<input type="text" class="form-control h50" placeholder="Street" name="cor_street" value="<?php echo $row['cor_street']; ?>">
											</div>
										</div>
										
										
									</div>
									
									<div class="row">
										<div class="col">
											<div class="form-group">
													<h5>Colony/Apartment</h5>
													<input type="text" class="form-control h50" placeholder="Colony/Apartment" name="cor_colony" value="<?php echo $row['cor_colony']; ?>">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>City/Village</h5>
													<input type="text" class="form-control h50" placeholder="Street" name="cor_city" value="<?php echo $row['cor_city']; ?>">
											</div>
										</div>
										
									</div>
									
									<div class="row">
										<div class="col">
											<div class="form-group">
													<h5>State</h5>
													<input type="text" class="form-control h50" placeholder="State" name="cor_state" value="<?php echo $row['cor_state']; ?>">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Country</h5>
													<input type="text" class="form-control h50" placeholder="Country" name="cor_country" value="<?php echo $row['cor_country']; ?>">
											</div>
										</div>
										
									</div>
									
										<div class="row">
											<div class="col-6">
												<div class="form-group">
														<h5>Pincode</h5>
														<input type="text" class="form-control h50" placeholder="Pincode" name="cor_pincode" value="<?php echo $row['cor_pincode']; ?>">
												</div>
											</div>
										</div>
										
										<br/>
									<h4><u>Permanent Address</u></h4><br/>
									<div class="row">
										
										<div class="col">
										
											<div class="form-group">
													<h5>House no.</h5>
													<input type="text" class="form-control h50" placeholder="House no." name="per_house" value="<?php echo $row['per_house']; ?>">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Street</h5>
													<input type="text" class="form-control h50" placeholder="Street" name="per_street" value="<?php echo $row['per_street']; ?>">
											</div>
										</div>
										
										
									</div>
									
									<div class="row">
										<div class="col">
											<div class="form-group">
													<h5>Colony/Apartment</h5>
													<input type="text" class="form-control h50" placeholder="Colony/Apartment" name="per_colony" value="<?php echo $row['per_colony']; ?>">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>City/Village</h5>
													<input type="text" class="form-control h50" placeholder="Street" name="per_city" value="<?php echo $row['per_city']; ?>">
											</div>
										</div>
										
									</div>
									
									<div class="row">
										<div class="col">
											<div class="form-group">
													<h5>State</h5>
													<input type="text" class="form-control h50" placeholder="State" name="per_state" value="<?php echo $row['per_state']; ?>">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Country</h5>
													<input type="text" class="form-control h50" placeholder="Country" name="per_country" value="<?php echo $row['per_country']; ?>">
											</div>
										</div>
										
									</div>
									
										<div class="row">
											<div class="col-6">
												<div class="form-group">
														<h5>Pincode</h5>
														<input type="text" class="form-control h50" placeholder="Pincode" name="per_pincode" value="<?php echo $row['per_pincode']; ?>">
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
													<input type="text" class="form-control h50" placeholder="Father's first name" name="father_first_name" value="<?php echo $row['father_first_name']; ?>">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Father's last name</h5>
													<input type="text" class="form-control h50" placeholder="Father's last name" name="father_last_name" value="<?php echo $row['father_last_name']; ?>">
											</div>
										</div>
										
									</div>
									
									<div class="row">
										<div class="col">
											<div class="form-group">
													<h5>Mother's first name</h5>
													<input type="text" class="form-control h50" placeholder="Mother's first name" name="mother_first_name" value="<?php echo $row['mother_first_name']; ?>">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Mother's last name</h5>
													<input type="text" class="form-control h50" placeholder="Mother's last name" name="mother_last_name" value="<?php echo $row['mother_last_name']; ?>">
											</div>
										</div>
										
									</div>
									
									
										
									<div class="row">
									
										<div class="col">
											<div class="form-group">
													<h5>Father's Mobile Number</h5>
													<input type="mobile" class="form-control h50" placeholder="Father's mobile number" name="father_mobile" value="<?php echo $row['father_mobile']; ?>">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Father's Email</h5>
													<input type="email" class="form-control h50" placeholder="Father's email Id" name="father_email" value="<?php echo $row['father_email']; ?>">
											</div>
										</div>
									</div>
									
									<div class="row">
											<div class="col-6">
												<div class="form-group">
														<h5>Annual Income</h5>
														<input type="text" class="form-control h50" placeholder="Annual income" name="annual_income" value="<?php echo $row['annual_income']; ?>">
												</div>
											</div>
										</div>
									<br/>
									<h4><u>Guardian Information</u></h4><br/>
									
									<div class="row">
										<div class="col">
											<div class="form-group">
													<h5>Guardian name</h5>
													<input type="text" class="form-control h50" placeholder="Guardian name" name="guardian_name" value="<?php echo $row['guardian_name']; ?>">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Guardian Relation</h5>
													<input type="text" class="form-control h50" placeholder="Guardian relation" name="guardian_relation" value="<?php echo $row['guardian_relation']; ?>">
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
																
																<td><input type="text" class="form-control h50" name="board_10" value="<?php echo $row['board_10']; ?>"/></td>
																<td><input type="text" class="form-control h50" name="passing_year_10" value="<?php echo $row['passing_year_10']; ?>"/></td>
																<td><input type="text" class="form-control h50" name="marks_10" value="<?php echo $row['marks_10']; ?>"/></td>
																<td><input type="text" class="form-control h50" name="total_marks_10" value="<?php echo $row['total_marks_10']; ?>"/></td>
																<td><input type="text" class="form-control h50" name="percentage_10" value="<?php echo $row['percentage_10']; ?>"/></td>
																<td><input type="text" class="form-control h50" name="college_10" value="<?php echo $row['college_10']; ?>"/></td>
																<td><input type="file" class="form-control h50" name="grade_card_10" /><span><?php echo $row['photo_10'];?></span></td>
															</tr>
															
															<tr>
																<td><b>12<sup>th</sup> Intermediate</b></td>
																<td><input type="text" class="form-control h50" name="board_12" value="<?php echo $row['board_12']; ?>"/></td>
																<td><input type="text" class="form-control h50" name="passing_year_12" value="<?php echo $row['passing_year_12']; ?>"/></td>
																<td><input type="text" class="form-control h50" name="marks_12" value="<?php echo $row['marks_12']; ?>"/></td>
																<td><input type="text" class="form-control h50" name="total_marks_12" value="<?php echo $row['total_marks_12']; ?>"/></td>
																<td><input type="text" class="form-control h50" name="percentage_12" value="<?php echo $row['percentage_12']; ?>"/></td>
																<td><input type="text" class="form-control h50" name="college_12" value="<?php echo $row['college_12']; ?>"/></td>
																<td><input type="file" class="form-control h50" name="grade_card_12" /><span><?php echo $row['photo_12']; ?></span></td>
															</tr>
												</table>
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col">
											<div class="form-group">
													<h5>Higher Qualification</h5>
													<input type="text" class="form-control h50" placeholder="Higher qualification" name="high_qual" value="<?php echo $row['high_qual']; ?>">
											</div>
										</div>
										
										<div class="col">
											<div class="form-group">
													<h5>Gap Year</h5>
													<input type="text" class="form-control h50" placeholder="Gap Year" name="gap_year" value="<?php echo $row['gap_year']; ?>">
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
																	$qs="select * from course left join student on course_id=course";
																	$data=mysqli_query($con,$qs);
																	
																	while($row=mysqli_fetch_array($data,MYSQLI_BOTH))
																	{
																																				
																		if($row['course_id']==$row['course'])
																		{
																			echo "<option value='".$row['course_id']."' selected>
																							".$row['course_name']."
																						</option>";
																		}
																		else
																		{
																			echo "<option value='".$row['course_id']."'>
																							".$row['course_name']."
																						</option>";
																		}
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
										
										<input class="btn btn-lg btn-success" type="submit" value="Update" name="update"/>
									</div>
								</div>
								
								
							</form>
						<?php
							}
						?>
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