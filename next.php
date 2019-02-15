<html>
<body>
<form action="#" method="POST">
<?php
include'dbcon.php';
$sql=mysqli_query($con,"SELECT * FROM `person`");
?>
<table border="2">
<a href="fst.php">Add</a>
  <tr>
	<th>ID</th>
    <th>Name</th>
    <th>Address</th> 
    <th>Phone</th>
	<th>Edit</th>
	<th>Delete</th></tr>

<?php
$i=0;
while($row=mysqli_fetch_array($sql))
{
	$i++;
	echo "<tr><td>".$i."</td>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['address']."</td>";
	echo "<td>".$row['phone']."</td>";
	?>
	
<td><a href="edit.php?uid=<?php echo $row['id'];?>">Edit</a></td>
<td><a href="delete.php?uid=<?php echo $row['id'];?>">Delete</a></td></tr>
<?php
}
?>
</table>
</form>




