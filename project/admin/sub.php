<?php
$con=mysqli_connect("localhost","root","","anuradha");
session_start();
$query = mysqli_query($con,"select * from test");?>
<table border="1" width="100%">
<tr>
<th><?php echo "subject" ?></th>
<th><?php echo "questions" ?></th>
<th><?php echo "first" ?></th>
<th><?php echo "second" ?></th>
<th><?php echo "third" ?></th>
<th><?php echo "fourth" ?></th>
<th><?php echo "right_answer" ?></th>
<th><?php echo "action" ?></th>
</tr>
<?php
while($row = mysqli_fetch_assoc($query)){
	?>
	<tr>
	<td><?php echo   $row['sub'] ?></td>
	<td><?php echo  htmlentities ($row['questions']) ?></td>
	<td><?php echo  htmlentities ($row['first'] )?></td>
	<td><?php echo  htmlentities ($row['second']) ?></td>
	<td><?php echo  htmlentities ($row['third']) ?></td>
	<td><?php echo  htmlentities ($row['fourth']) ?></td>
	<td><?php echo  htmlentities ($row['right_answer'] )?></td>
<td><a href="editques.php?editques=<?php echo $row['id']; ?>">Edit</a><a href="sub.php?del=<?php echo $row['id']; ?>"> delete</a></td>
</tr>
<?php }?>
  </table>
  <?php 
if(isset($_GET['del'])){
	$id=$_GET['del'];
	$q=mysqli_query($con,"delete from test where id='$id'");
	if($q)
	{
		header("location:sub.php");		
}
}
?>
  <a href="logout.php">logout</a>