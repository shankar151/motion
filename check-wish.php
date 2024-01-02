<?php
	session_start();
	include('inc/config.php');

	$mt_id="";
	$stu_id="";
	
	$stu_id=$_SESSION['stu_id'];
	$mt_id=$_GET['mt_id'];

	$qs="select * from bookmark where book_topic_id='$mt_id'";
	$data=mysqli_query($con,$qs);
	
	$row=mysqli_fetch_array($data);
	//echo var_dump($row);
		
		if(mysqli_num_rows($data)>0)
		{
			//echo "<h4>Already Wishlisted</h4>";
			echo $a = "0";
			$qs="delete from bookmark where book_topic_id='$mt_id'";
			
		}
		else
		{
			echo $a = "1";
			$qs="insert into bookmark(book_stu_id,book_topic_id)values('$stu_id','$mt_id')";
			
		}
		mysqli_query($con,$qs) or die(mysqli_error($con));
		
?>