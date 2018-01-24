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