<?php
	include('inc/config.php');

	$course_price="";
	$course_id=$_GET['course_id'];
	
	$qs="select * from manage_unit where select_course='$course_id'";
	$data=mysqli_query($con,$qs);
	
	while($row=mysqli_fetch_array($data,MYSQLI_BOTH))
	{
		echo "<option value='".$row['unit_name']."'>
						".$row['unit_name']."
					</option>";
	}
															
?>