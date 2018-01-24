
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
				<li ><a href="registration.php">registration</a></li>
				<li class="active"><a href="login.php">login</a></li>
				<li><a href="#">Contact us</a></li>
			</ul>
			</div>
			</nav>
		</div>
	</div>
</div>

</body>
</html><?php
$con=mysqli_connect("localhost","root","","anuradha");
$query=mysqli_query($con,"select * from sub");
session_start();
if(!isset($_SESSION['emailid']))
{
header("location:login.php");
}
?>
<table border="1" width="100%">
<tr>
<th><center><?php echo "subject" ?></center></th>
</tr>

<?php
while($row = mysqli_fetch_assoc($query)){
	?>
	<tr>
	<td align="center"><a href="form.php?form=<?php echo $row['id']; ?>"><?php echo $row['subject'] ?></a></td>
</tr>

<?php } ?>
</table>
<div class="container">
<br><a href="logout.php">Logout</a>
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
				<p>Address:<strong>Supriya(Ghaziabad)</strong></p>
				<p>Emailid:<strong>supriyaballia@gmail.com</strong></p>
				<p>contact:<strong>123456780</strong></p>
			</div>
		</div>
	</div>
</div>