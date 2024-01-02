<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Dates</h1>
<h2>Using new Date()</h2>
<p>Create a new date object with the current date and time:</p>

<input type="text" id="demo">

<script>
 var d = new Date();
 var date=d.getDate();
 var m=d.getMonth();
 var y=d.getFullYear();
document.getElementById("demo").value = date+"/"+m+"/"+y;
</script>
<?php
	$date_create
?>
</body>
</html>
