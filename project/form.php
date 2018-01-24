
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
</html><?php
session_start();
$con = mysqli_connect("localhost","root","","anuradha");
if(!isset($_SESSION['emailid']))
{
header("location:login.php");
}
$i=$_GET['form'];
$query = mysqli_query($con,"select * from test  where sub='$i'");
?>
	<h1><center><u>Test your knowledge</u></center></h1>
<?php
$f = array();
while($row = mysqli_fetch_assoc($query)){
	array_push($f,"ques_".$row['id']);
	?>

	<table width="100%" height="20px">
	
<tr>
	<td><?php echo htmlentities ($row['questions'] )?></td></table> 
<form method="post"> 
<input type="radio" name="ques_<?php echo $row['id']?>" value="<?php echo htmlentities ($row['first'])?>">
<td><?php echo htmlentities ($row['first'] )?></td><br><br>
<input type="radio" name="ques_<?php echo $row['id']?>" value="<?php echo htmlentities ($row['second'])?>">
<td><?php echo htmlentities ($row['second'] )?></td><br><br>
<input type="radio" name="ques_<?php echo $row['id']?>" value="<?php echo htmlentities ($row['third'])?>">
<td><?php echo htmlentities ($row['third'] )?></td><br><br>
<input type="radio" name="ques_<?php echo $row['id'] ?>"value="<?php echo htmlentities ($row['fourth'])?>"> 
<td><?php echo htmlentities ($row['fourth'] )?></td><br><br>
<?php }?><br>
<input type="submit" name ="submit">
</form> 
<?php
if(isset($_POST['submit']))
{
	$nm = 0;
foreach($f as $b)
{
	$m = $_POST[$b];
	$query = mysqli_query($con,"select * from test where right_answer ='$m'");
	while($row=mysqli_fetch_array($query))
	{
		$nm++;
	}
}
echo "your score is:";
echo $nm;
} 
$email = $_SESSION['emailid'];
$q=mysqli_query($con,"select * from student where emailid='$email'");
$r= mysqli_fetch_assoc($q);
$sid = $r['id'];
if(isset($nm)){
	$subid=$_GET['form'];
mysqli_query($con,"insert into marks (std_id,sub,mark) value('$sid','$subid','$nm')");
}
?>
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
