<?php
$con=mysqli_connect("localhost","root","","anuradha");
session_start();
?>
<form method="post">
Enter subject:<input type="text" name="subject"><br><br>
<input type="submit" name="sub">
</form>
<?php

if(isset($_POST['sub']))
{
	
	$sub=$_POST['subject'];
		$q = mysqli_query($con,"insert into sub (subject)value('$sub')");
	if($q){
		echo "<script>alert('subject added successfully')</script>";
	}
}
?> 
<a href="logout.php">logout</a> 
