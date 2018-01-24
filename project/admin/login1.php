<form method="POST">
Enter username:<br>
<input type="text" name="name"><br>
Enter password:<br>
<input type="password" name ="password"><br><br>
<input type = "submit" name="sub">
<input type="reset">
</form>
<?php
session_start();
$con = mysqli_connect("localhost","root","","anuradha");
if(isset($_SESSION['name']))
{
header("location:adds.php")	;
}

if(isset($_POST['sub']))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	$s=mysqli_query($con,"select * from user where name='$name' AND password='$password'");
	$count=mysqli_num_rows($s);
	if($count==0){
		$_SESSION['name']=$name;
		$_SESSION['password']=$password;
		header("location:adds.php");
	}
	else
	{
	echo "<script> alert ('wrong details') </script>";

	}
	}
	

?>

