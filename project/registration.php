
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="anu.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>online exam
		</title>

</head>
<body >
	<div class="container-fluid top_bar">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
				<a href="#"><i class="icons fa fa-facebook" style="color:white;"></i></a>
				<a href="#"><i class="icons fa fa-twitter" style="color:white;"></i></a>
				<a href="#"><i class="icons fa fa-google-plus" style="color:white;"></i></a>
				<a href="#"><i class="icons fa fa-youtube-play" style="color:white;"></i></a>
				</div>
				<div class="col-sm-9 text-right">
				<span class="contact glyphicon glyphicon-earphone">1234567890</span>
				<span class="contact glyphicon glyphicon-envelope">a@gmail.com</span>
				</div>
			</div>
		</div>
	</div>
<div class="container" style="background-color:white;">
	<div class="row">
		<div class="col-sm-5">
			<img src="image1\a.jpg" width="50%" height="100px">
		</div>
		<div class="col-sm-7  menu ">
			<nav class="navbar navbar-default">
			<div class="navbar-header">
			<button type="button"  class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			</div>
			<div class="collapse navbar-collapse" id= "mynavbar">
			<ul class="nav navbar-nav pull-right">
				<li ><a href="#">home</a></li>
				<li class="active"><a href="registration.php">registration</a></li>
				<li><a href="login.php">login</a></li>
				<li><a href="#">Contact us</a></li>
			</ul>
			</div>
			</nav>
		</div>
	</div>
</div>

</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","anuradha");
?>
<div class="container">
<form method="post">
<fieldset><legend>Register here</legend></fieldset>
<fieldset>
<legend>First Name</legend>
<input type="text" name="fname" required placeholder="please write your first name">
</fieldset>
<fieldset>
<legend>Last Name</legend>
<input type="text" name="lname"  required placeholder="please write your last name">
</fieldset>
<fieldset>
<legend>Email</legend>
<input type="email" name="mail"  required placeholder="please write your mail">
</fieldset>
<fieldset>
<legend>password</legend>
<input type="password" name="pass"  required placeholder="please enter your password">
</fieldset>
<fieldset>
<legend>address</legend>
<input type="text" name="add"  required placeholder="please enter your address">
</fieldset>
<fieldset>
<legend>Gender</legend>
Male<input type="radio" name="gender" value="mail">
Female<input type="radio" name ="gender" value="femail"> 
</fieldset>
<fieldset>
<legend>age</legend>
<input type="number" name="age" required placeholder="please enter your address" >
</fieldset>
<fieldset>
<legend>contact-number</legend>
<input type="number" name="con" required placeholder="please enter your contact number" >
</fieldset><br>
<fieldset>
<input type="submit" name="submit"></fieldset>
</div>
<?php
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$emailid=$_POST['mail'];
	$pass=$_POST['pass'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
    $add=$_POST['add'];
	$cons=$_POST['con'];
	$sel=mysqli_query($con,"select * from student where emailid='$emailid'");
	$count=mysqli_num_rows($sel);
	if($count==1)
	{
		echo "<script> alert ('already registerd')</script>";
	}
	else 
	{
	$q="insert into student(fname,lname,emailid,password,gender,age,addres,contact)values('$fname','$lname','$emailid','$pass','$gender','$age','$add','$cons')";
	$mess=mysqli_query($con,$q);
	if($mess)
	{
	echo "<script> alert ('.')</script>";	
	}
 	}
}
?>
<div class="container">
Already registered?
<a href="login.php">click here</a>
</div>
<div class="container-fluid footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h3>Quick links</h3>
				<ul>
				<li class="active"><a href="anu.html">home</a></li>
				<li><a href="registration.php">registration</a></li>
				<li><a href="login.php">login</a></li>
				<li><a href="#">Contact us</a></li>
			</ul>
				
			</div>
			<div class="col-sm-6">
				<h3>Contact details</h3>
				<p>Address:<strong>KIET(Ghaziabad)</strong></p>
				<p>Emailid:<strong>supriyaballia@gmail.com</strong></p>
				<p>contact:<strong>123456780</strong></p>
			</div>
		</div>
	</div>
</div>