<?php
$con=mysqli_connect("localhost","root","","anuradha");
session_start();
if(!isset($_SESSION['name']))
{
header("location:login1.php");
}
$query = mysqli_query($con,"select * from sub");?>
<table border="1" width="100%">
<tr>
<th><?php echo "subject name" ?></th>
<th><?php echo "action" ?></th>
</tr>
<?php
while($row = mysqli_fetch_assoc($query)){
	?>
	<tr>
	<td><?php echo $row['subject'] ?></td>
<td><a href="edit.php?edit=<?php echo $row['id']; ?>">Edit</a><a href="#?del=<?php echo $row['id']; ?>"> delete</a></td>
</tr>
<?php }?>
  </table>
  <a href="logout.php">logout</a>