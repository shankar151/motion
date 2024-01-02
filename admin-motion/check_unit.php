<?php
	include('inc/config.php');

	$unit_sr_no="";
	$unit_name=$_GET['unit_name'];
	
		echo $qs="select * from manage_topic where unit_name='$unit_name'";
		$data=mysqli_query($con,$qs);
		
		while($row=mysqli_fetch_array($data,MYSQLI_BOTH))
		{
			echo "<option value='".$row['unit']."'>
							".$row['unit']."
						</option>";
		}													
?>