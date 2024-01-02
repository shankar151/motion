
<div class="col-sm-12 col-lg-4 col-xl-2 dn-smd pl0" >
					<div class="user_board">
						<div class="user_profile">
							<div class="media">
							  	<div class="media-body">
							    	<h4 class="mt-0">Student Panel</h4>
								</div>
							</div>
						</div>
						<div class="dashbord_nav_list" style="">
							<ul>
								<li class="active"><a href="index.php"><span class="flaticon-puzzle-1"></span> Motion Homepage </a></li>
								<li class="active"><a href="motion-dashboard.php"><span class="flaticon-puzzle-1"></span> Dashboard </a></li>
								<li><a href="courses.php"><span class="flaticon-online-learning"></span> My Courses</a></li>
								<li><a href="idcard.php" target="_blank"><span class="flaticon-online-learning"></span> Id Card</a></li>
								<li><a href="calendar_index1.php" ><span class="flaticon-online-learning"></span> Assign Events</a></li>
								<li><a href="fees_status.php"><span class="flaticon-shopping-bag-1"></span> Fees Status</a></li>
								<li><a href="mynotes.php"><span class="flaticon-speech-bubble"></span> My Notes</a></li>
								<li><a href="forum_que.php"><span class="flaticon-speech-bubble"></span> Ask Questions</a></li>
								<li><a href="forum_reply.php"><span class="flaticon-speech-bubble"></span> Reply Questions</a></li>
								<li><a href="review.php"><span class="flaticon-rating"></span> Reviews</a></li>
								<li><a href="bookmark.php"><span class="flaticon-like"></span> Bookmarks</a></li>
								<li><a href="index.php"><span class="flaticon-add-contact"></span> Buy Courses</a></li>
							</ul>
							<h4>Account</h4>
							<ul>
									<?php
										
										$stu_id=$_SESSION['stu_id'];
										{
									?>
								<li><a href="update_student_profile.php?stu_id=<?php echo $stu_id;?>"><span class="flaticon-settings"></span>Update profile</a></li>
									<?php
										}
									?>
								 <li ><a href="mo-dash-sidepanel.php" data-toggle="modal" data-target="#exampleModalCenter"> <span style="font-size:17px;" class="flaticon-settings">&nbsp; &nbsp; Update Login Id</span></a></li>
								<li><a href="logout.php"><span class="flaticon-logout"></span> Logout</a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<!-- Modal -->
	<div class="sign_up_modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered" role="document">
	    	<div class="modal-content">
		      	
	    	
				
				<div class="tab-content" id="myTabContent">
				  	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="login_form">
						
						<!--Login and registeration of students-->
							
						</div>
				  	</div>
						
						 	<div id="profile">
						<div class="sign_up_form">
							<div class="heading">
								<h3 class="text-center">Update Login Id</h3>
								
							</div>
							<form action="update_login.php" method="post">
								
								 <div class="form-group">
							    	<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email Address" name="upd_email">
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Old Password" name="old_password">
								</div>
								
								<div class="form-group">
							    	<input type="password" class="form-control" id="exampleInputPassword2" placeholder="New Password" name="upd_password">
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirm New Password" name="con_password">
								</div>
								<div class="form-group custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="exampleCheck2">
									<label class="custom-control-label" for="exampleCheck2">Remember me</label>
								</div>
								<input type="submit" class="btn btn-log btn-block btn-thm2" name="update" value="Update Details">
								<hr>
								
							</form>
						</div>
				  	</div>
						
				</div>
	    	</div>
	  	</div>
	</div>
	