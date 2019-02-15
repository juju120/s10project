<html>
<body>
<form action="#" method="POST">
  First name: <input type="text" name="name"><br>
  address:<input type="text" name="address"><br>
  Phone no:<input type="text" name="phone"><br>
  <input type="submit" name="Submit">
</form>
</body>
</html>
<?php
include 'dbcon.php';
if(isset($_POST["Submit"]))
{
	$a=$_POST["name"];
	$b=$_POST["address"];
	$c=$_POST["phone"];
	$sql="INSERT INTO `person`(`name`,`address`,`phone`) VALUES ('$a','$b','$c')";
	$result=mysqli_query($con,$sql);
}
?>
