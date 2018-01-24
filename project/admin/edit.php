<?php
$con=mysqli_connect("localhost","root","","anuradha");
$id=$_GET['edit'];
?>
<form method="post">
<select name="rows">
<?php
$query=mysqli_query($con,"select * from sub");
while($row = mysqli_fetch_assoc($query)){
?>
<option value="<?php echo $row['id'] ?>"><?php echo $row['subject'] ?></option> 
<?php } ?>
</select>
Enter question:<input type="text" name="question"><br><br>
Enter first option:<input type="text" name ="first"><br><br><br>
Enter second option:<input type="text" name="second"><br><br><br>
Enter third option:<input type="text" name="third"><br><br><br>
Enter fourth option:<input type="text" name="fourth"><br><br><br>
Enter right_answer:<input type="text" name="right_answer"><br><br>
<input type="submit" name="sub">
</form>
<?php

if(isset($_POST['sub']))
{
	
	$id=$_POST['rows'];
	$ques=$_POST['question'];
	$first=$_POST['first'];
	$second=$_POST['second'];
	$third=$_POST['third'];
	$fourth=$_POST['fourth'];
	$ra=$_POST['right_answer'];
	$q = mysqli_query($con,"insert into test (sub,questions,first,second,third,fourth,right_answer)values('$id','$ques','$first','$second','$third','$fourth','$ra')");
	if($q){
		echo "<script>alert('question added successfully')</script>";
	}
}
?> 
<a href="logout.php">logout</a>