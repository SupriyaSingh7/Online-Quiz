<?php
session_start();
$con = mysqli_connect("localhost","root","","anuradha");
$i=$_GET['f'];
$query = mysqli_query($con,"select * from test  where sub='$i'");
$p=0;
if(isset($_GET['page'])){
	$p=$_GET['page']*5-5;
}
$query = mysqli_query($con,"select * from test limit $p,5 ");
?>
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
<input type="radio" name="ques_<?php echo $row['id'] ?>" value="<?php echo htmlentities ($row['second'])?>">
<td><?php echo htmlentities ($row['second'] )?></td><br><br>
<input type="radio" name="ques_<?php echo $row['id'] ?>" value="<?php echo htmlentities ($row['third'])?>">
<td><?php echo htmlentities ($row['third'] )?></td><br><br>
<input type="radio" name="ques_<?php echo $row['id'] ?> "value="<?php echo htmlentities ($row['fourth'])?>"> 
<td><?php echo htmlentities ($row['fourth'] )?></td><br><br>
<?php }?><br>
<input type="submit" name ="submit">
</form> 
<?php
if(isset($_POST['submit']))
{
	$nm = 0;
foreach($f as $b){
	$m = $_POST[$b];
	$query = mysqli_query($con,"select * from test where right_answer ='$m'");
	while($row=mysqli_fetch_array($query)){
		echo htmlentities($row['right_answer'])."<br>";
		$nm++;
	}
}
echo $nm;
}
?>
<?php
$quer=mysqli_query($con,"select * from test ");
$totalpage= ceil(mysqli_num_rows($quer)/5);
 $anu=$_GET['f'];
for($i=1;$i<=$totalpage;$i++)
{
	?>
	<a href="f.php?page=<?php echo $i; ?>"><?php echo $i;?></a>
	
<?php } ?>