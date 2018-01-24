<?php
$con=mysqli_connect("localhost","root","","anuradha");
session_start();
$id=$_GET['editques'];
$q=mysqli_query($con,"select * from test where id='$id'");
$row=mysqli_fetch_assoc($q);
?>
<form method="post">
<select name="rows">
<?php
$que=mysqli_query($con,"select * from sub");
while($r = mysqli_fetch_assoc($que)){
?>
<option value="<?php echo $r['id'] ?>"><?php echo $r['subject'] ?></option> 
<?php } ?>
</select><br><br><br>
Enter question:<input type="text" name="question" value="<?php echo htmlentities ($row['questions'])?>"><br><br><br>
Enter first option::<input type="text" name="first" value="<?php echo htmlentities ($row['first'])?>"><br><br><br>
Enter second option:<input type="text" name="second" value="<?php echo htmlentities ($row['second'])?>"><br><br><br>
Enter third option:<input type="text" name="third" value="<?php echo htmlentities ($row['third'])?>"><br><br><br>
Enter fourth option:<input type="text" name="fourth" value="<?php echo htmlentities ($row['fourth'])?>"><br><br><br>
Enter right_answer:<input type="text" name="ra" value="<?php echo htmlentities ($row['right_answer'])?>"><br><br>
<input type="submit" name="sub">
</form>
<?php
if(isset($_POST['sub']))
{
	
	$qid=$_POST['rows'];
	$ques=$_POST['question'];
	$first=$_POST['first'];
	$second=$_POST['second'];
	$third=$_POST['third'];
	$fourth=$_POST['fourth'];
	$ra=$_POST['ra'];
	$query = mysqli_query($con,"update test set sub='$qid' ,questions='$ques',first='$first',second='$second',third='$third',fourth='$fourth',right_answer='$ra' where id='$id' ");
	if($query){
		echo "<script>alert('question updated successfully')</script>";
	}
}
?> 
<a href="logout.php">logout</a> 