<?php
function check_book($con,$stu_id,$mt_id)
{
	$qs="select * from bookmark where book_stu_id='$stu_id' and book_topic_id='$mt_id'";
	
	$data=mysqli_query($con,$qs) or die(mysqli_error($con));
	if(mysqli_num_rows($data)>0)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
?>