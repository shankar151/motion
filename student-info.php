<?php
	include('inc/config.php');
	
	$stu_id="";
	$stu_photo="";
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
	$per_pincode=$row['per_pincode'];
	
	$per=$per_house." ".$per_street." ".$per_colony." ".$per_city." ".$per_state." ".$per_country." ".$per_pincode;*/
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
	$courses=$row['courses']; */
	
	
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
    

    <!-- Custom styles for this page -->
    <link href="table_js/dataTables.bootstrap4.min.css" rel="stylesheet">
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
								<h4 class="title float-left">Student Information</h4>
								<ol class="breadcrumb float-right">
							    	<li class="breadcrumb-item"><a href="admin-dashboard.php">Home</a></li>
							    	<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
						</div>
						
						<form method="post" encytype="multipart/form-data">
						
						<div class="card shadow mb-12">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Student Details</h6>
                        </div>
												<?php
													if(isset($_GET['stu_id']))
													{
													$x=$_GET['stu_id'];
													
													$qs="select * from student order by stu_id='$x' desc";
													
													$data=mysqli_query($con,$qs);
													
													$row=mysqli_fetch_array($data,MYSQLI_BOTH);
													
												?>
                        <div id="tale"class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" border="1" cellspacing="0">
																	<thead>
																		<tr>
																			<th scope="col" colspan="4" style="text-align:center;">Application of Student</th>
																			
																		</tr>
																	</thead>
																	<tbody>
																	
																		<tr>
																			<td colspan="4">
																					<div class="card-body text-left">
																						<!-- Profile picture image-->
																						
																						<img id="blah" alt="your image" style="width:150px;height:150px" class="img-account-profile rounded-square mb-2" 
																						src="upload/<?php echo $row['stu_photo']; ?>">
																						
																					 </div>
																			</td>
																		</tr>
																		
																		<tr>
																			<th scope="row">Student First Name</th>
																			<td> <?php echo $row['first_name']; ?> </td>
																			<th scope="row">Student Last Name</th>
																			<td> <?php echo $row['last_name']; ?> </td>
																		</tr>
																		<tr>
																			<th scope="row">Date Of Birth</th>
																			<td> <?php echo $row['dob']; ?> </td>
																			<th scope="row">Gender</th>
																			<td> <?php echo $row['gender']; ?> </td>
																		</tr>
																		<tr>
																			<th scope="row">Category</th>
																			<td><?php echo $row['category']; ?></td>
																			<th scope="row">Religion</th>
																			<td><?php echo $row['religion']; ?></td>
																		</tr>
																		
																		<tr>
																			<th scope="row">Mobile No</th>
																			<td> <?php echo $row['mobile']; ?></td>
																			<th scope="row">Email Id</th>
																			<td> <?php echo $row['email']; ?></td>
																		</tr>
																		
																		<tr>
																			<th scope="row">Mother Tongue</th>
																			<td> <?php echo $row['mother_ton']; ?>s</td>
																			<th scope="row">Identification</th>
																			<td> <?php echo $row['ident']; ?></td>
																		</tr>
																		
																		<tr>
																			<th scope="row">Aadhar Card Number</th>
																			<td> <?php echo $row['aadhar']; ?></td>
																			<th scope="row">PAN Card Number</th>
																			<td><?php echo $row['pan']; ?></td>
																		</tr>
																		
																		<tr>
																			<th scope="row">Marital Status</th>
																			<td> <?php echo $row['marital']; ?></td>
																			<th scope="row">Covid Certificate</th>
																			<td> <a href="upload/<?php echo $row['report_photo']; ?>" target="_blank">Open</a></td>
																		</tr>
																		
																		<tr>
																			<th scope="row">Corespondance Address</th>
																			<td> <?php echo $row['cor_house']." ".$row['cor_street']." ".$row['cor_colony']." ".$row['cor_city']." ".$row['cor_state']." ".$row['cor_country']." ".$row['cor_pincode']; ?></td>
																			<th scope="row">Permanent Address</th>
																			<td> <?php echo $row['per_house']." ".$row['per_street']." ".$row['per_colony']." ".$row['per_city']." ".$row['per_state']." ".$row['per_country']." ".$row['per_pincode']; ?></td>
																		</tr>
																		
																		<tr>
																			<th scope="col" colspan="4" style="text-align:center;">Father/Guardian Details</th>
																		</tr>
																		
																		<tr>
																			<th scope="row">Father's First Name</th>
																			<td> <?php echo $row['father_first_name']; ?></td>
																			<th scope="row">Father's Last Name</th>
																			<td> <?php echo $row['father_last_name']; ?></td>
																		</tr>
																		
																		<tr>
																			<th scope="row">Mother's First Name</th>
																			<td> <?php echo $row['mother_first_name']; ?></td>
																			<th scope="row">Mother's Last Name</th>
																			<td> <?php echo $row['mother_last_name']; ?></td>
																		</tr>
																		
																		<tr>
																			<th scope="row">Father's Mobile No.</th>
																			<td> <?php echo $row['father_mobile']; ?></td>
																			<th scope="row">Father's Email</th>
																			<td> <?php echo $row['father_email']; ?></td>
																		</tr>
																		
																		<tr>
																			<th scope="row" >Annual Income</th>
																			<td colspan="2"> <?php echo $row['annual_income']; ?></td>
																		</tr>
																		
																		<tr>
																			<th scope="row">Guardian Name</th>
																			<td> <?php echo $row['guardian_name']; ?></td>
																			<th scope="row">Guardian Relation</th>
																			<td> <?php echo $row['guardian_relation']; ?></td>
																		</tr>
																		
																		<tr>
																			<th scope="col" colspan="4" style="text-align:center;">Qualification</th>
																		</tr>
																		
																		<tr>
																			<th scope="row" style="text-align:center;" colspan="4">10<sup>th</sup>High School</th>
																		</tr>
																		
																			<tr>
																			<th scope="row">Board</th>
																			<td> <?php echo $row['board_10']; ?></td>
																			<th scope="row">Passing Year</th>
																			<td> <?php echo $row['passing_year_10']; ?></td>
																		</tr>
																		
																			<tr>
																			<th scope="row">Marks Obtained</th>
																			<td> <?php echo $row['marks_10']; ?></td>
																			<th scope="row">Total Marks</th>
																			<td> <?php echo $row['total_marks_10']; ?></td>
																		</tr>
																		
																		<tr>
																			<th scope="row">Percentage</th>
																			<td> <?php echo $row['percentage_10']; ?></td>
																			<th scope="row">College Name</th>
																			<td> <?php echo $row['college_10']; ?></td>
																		</tr>
																		
																		<tr>
																			<th scope="row">High School Marksheet</th>
																			<td> <a href="upload/<?php echo $row['photo_10']; ?>" target="_blank"> Open</a></td>
																		</tr>
																		
																		<tr>
																			<th scope="row" style="text-align:center;" colspan="4">12<sup>th</sup> Intermediate</th>
																		</tr>
																		
																			<tr>
																			<th scope="row">Board</th>
																			<td> <?php echo $row['board_12']; ?></td>
																			<th scope="row">Passing Year</th>
																			<td> <?php echo $row['passing_year_12']; ?></td>
																		</tr>
																		
																			<tr>
																			<th scope="row">Marks Obtained</th>
																			<td> <?php echo $row['marks_12']; ?></td>
																			<th scope="row">Total Marks</th>
																			<td> <?php echo $row['total_marks_12']; ?></td>
																		</tr>
																		
																			<tr>
																			<th scope="row">Percentage</th>
																			<td> <?php echo $row['percentage_12']; ?></td>
																			<th scope="row">College Name</th>
																			<td> <?php echo $row['college_12']; ?></td>
																		</tr>
																			
																		<tr>
																			<th scope="row">Intermediate Marksheet</th>
																			<td> <a href="upload/<?php echo $row['photo_12']; ?>" target="_blank">Open</a></td>
																		</tr>
																		
																		<tr>
																			<td colspan="4"></td>
																		</tr>
																		<tr>
																			<th scope="row">Higher Qualification</th>
																			<td> <?php echo $row['high_qual']; ?></td>
																			<th scope="row">Gap Year</th>
																			<td> <?php echo $row['gap_year']; ?></td>
																		</tr>
																		
																		<tr>
																			<th scope="row" colspan="2">Selected Course</th>
																			<td colspan="2"> <?php echo $row['courses']; ?></td>
																		</tr>
																		
																		
																			
																	</tbody>
																	
																	
																</table>
                            </div>
                        </div>
												
											<?php
												}
													
											?>
												<table>
													<tr>
																			<td scope="row" style="text-align:center;" colspan="4"><input type="button" onclick="printDiv()" value="Print">
																			</td>
																			</tr>
												</table>
                    </div>

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
<script>
																						function printDiv() {
																								var divContents = document.getElementById("tale").innerHTML;
																								var a = window.open('', '', 'height=900, width=900');
																								a.document.write('<html>');
																								a.document.write('<body > ');
																								a.document.write(divContents);
																								a.document.write('</body></html>');
																								a.document.close();
																								a.print();
																						}
																			</script>
</body>

	<!--table JavaScript-->
	
 <!-- Bootstrap core JavaScript-->
   

    <!-- Core plugin JavaScript-->
    

    <!-- Custom scripts for all pages-->
   

    <!-- Page level plugins -->
    <script src="table_js/jquery.dataTables.min.js"></script>
    <script src="table_js/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="table_js/datatables-demo.js"></script>
		
		
		<script>
			imgInp.onchange = evt => {
				const [file] = imgInp.files
				if (file) {
					blah.src = URL.createObjectURL(file)
				}
			}
		</script>
</html>