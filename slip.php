<?php
	session_start();
	
	include('inc/config.php');
	
	if(isset($_GET['pr']))
	{
		$y=$_GET['pr'];
		
		$qs="select * from fees_transaction left join student on fees_sid=stu_id where fees_id='$y'";
		
		$data=mysqli_query($con,$qs);
		$row=mysqli_fetch_array($data);
	}
	
?>
<!doctype html>
<html>

<head><title>payment slip</title>
</head>

<body>
	<table border="1" cellspacing="0" width="600px" height="300px" align="center" cellpadding="5px">
		<tr>
			<th colspan="2" style="background-color:skyblue;color:maroon;" height="50px"><h2><font size="6px">Motion Institute</font></h2></th>
		</tr>
		<tr>
			<th colspan="2" bgcolor="pink" color="white"><b>Payment slip</b></th>
		</tr>
		<tr>
			<td colspan="2" bgcolor="brown"></td>
		</tr>
		
		<tr>
			<td>Date Of Fees Submit</td>
			<td> <?php echo $row['fees_date']; ?></td>
		</tr>
		
		<tr>
			<td>Student Name</td>
			<td> <?php echo $row['first_name']." ".$row['last_name']; ?></</td>
		</tr>
		
		<tr>
			<td>Fees Method</td>
			<td> <?php echo $row['fees_method']; ?></</td>
		</tr>
		
		<tr style="border-radius:10px;">
			<td>Fees Amount</td>
			<td> <?php echo $row['fees_amount']; ?></</td>
		</tr>
	</table>
</body>
</html>
