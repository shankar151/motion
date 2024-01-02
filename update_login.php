<?php
session_start();

	include('inc/config.php');
	
		if(isset($_POST['update']))
			{
				extract($_POST);
				
				$stu_id=$_SESSION['stu_id'];
				$old_password=$_SESSION['password'];
			
			if($old_password==$old_password)
				{
					if($upd_password==$con_password)
					{
						$qs="update student set password='$upd_password' where stu_id='$stu_id'";
						
						mysqli_query($con,$qs);
						
						header('location:motion-dashboard.php');
					}
					else
					{
						echo $msg="please enter valid password and confirm password";
					}
				}
				else
				{
					echo $msg="Please enter valid password";
				}
			}
?>