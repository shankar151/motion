<?php
	session_start();
	
	include('inc/config.php');
	
	$stu_id=$_SESSION['stu_id'];
	
	$qs="select * from student inner join course on course=course_id where stu_id='$stu_id'";
	
	$data=mysqli_query($con,$qs);
	
	$row=mysqli_fetch_array($data,MYSQLI_BOTH);
	
	$address=$row['cor_house']." ".$row['cor_street']." ".$row['cor_colony']." ".$row['cor_city']." ".$row['cor_state']." ".$row['cor_country']." ".$row['cor_pincode'];
?>

<!doctype html>
<html>
	<head>
	<!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
		<title>Id Card</title>
		<style>
			#bimage
			{
				width:600px;
				height:350px;
				background-image:url('photo/idcard.jpg');
				margin-left:400px;
				margin-top:100px;
				border:3px solid blue;
				border-radius:20px;
				
			}
			
			#img1
			{
				top:fixed;
			}
			
			.first
			{
				color:black;
				font-weight:bold;
			}
			
			.second
			{
				color:maroon;
				font-weight:bold;
			}
			
			#img2
			{
				opacity:50%;
			}
			
			#print
			{
				margin-left:700px;
				margin-top:70px;
				
			}
			
			.button {
				background-color: rgb(50, 139, 168); /* Green */
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				border-radius:5px;
			}
			
			.button:hover
			{
				background-color:green;
				color:white;
			}
		</style>
	</head>
	<body id="body">
	
	<div id="data">
	<div id="bimage">
			<table width="100%" cellspacing="0" >
			<tr >
				<th>
					<img class="logo2 img-fluid" src="images/header-logo2.png" alt="header-logo2.png" style="margin-left:20px;margin-top:10px;" id="img1">
				</th>
				<th colspan="2" ><h2><i><font color="red" face="Arial" >MOTION UNIVERSITY<hr color="orange" /></font></i></h2>Maidan Garhi, New Delhi-110068.</th>
				
				<th><img src="upload/qrcode.webp" width="90px" height="70px" style=";"/></th>
				
			</tr>
			</table>
			
			<hr color="green"/>
			
			<table width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td class="first"> &nbsp Name :</td>
					<td class="second"><?php echo $row['first_name']." ".$row['last_name']; ?></td>
					
					<!--Student Images-->
					
					<td rowspan="6"><img src="../motion/photo/<?php echo $row['stu_photo']; ?>" width="130px" height="150px" style="border-radius:10px;margin-top:0px;border:4px solid white;"/></td>
					
				</tr>
				
				<tr>
					<td class="first" width="120px">&nbsp Father Name :</td>
					<td class="second"><?php echo $row['father_first_name']." ".$row['father_last_name']; ?></td>
				</tr>
				
				<tr>
					<td class="first">&nbsp Course :</td>
					<td class="second"><?php echo $row['course_name']; ?></td>
				</tr>
				
				<tr>
					<td class="first">&nbsp DOB :</td>
					<td class="second"><?php echo $row['dob']; ?></td>
				</tr>
				
				<tr>
					<td class="first">&nbsp Mobile :</td>
					<td class="second"><?php echo $row['mobile']; ?></td>
				</tr>
				
				<tr>
					<td class="first">&nbsp Email :</td>
					<td class="second"><?php echo $row['email']; ?></td>
				</tr>
				<tr>
					<td class="first">&nbsp Address :</td>
					<td class="second" rowspan="2"><?php echo $address; ?></td>
					<td rowspan="2"><img src="../motion/photo/<?php echo $row['signature']; ?>" width="130px" height="43px" style="border-radius:10px;border:2px solid white;"/></td>
				</tr>
				
				<tr>
					<td colspan="1"></td>
				</tr>
			</table>
		</div>
		</div>
		
		<div id="print">
		<input class="button" type="button" onclick="printPage()" value="Print">
		</div>
	</body>
	<script type="text/javascript">
		function printPage(){
			
			var body = document.getElementById('body').innerHTML;
			var data = document.getElementById('data').innerHTML;
			
			document.getElementById('body').innerHTML = data;
			
			window.print();
			document.getElementById('body').innerHTML = body;
		}

	</script>
</html>