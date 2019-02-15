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
{	$u=$_GET["uid"];
	$a=$_POST["name"];
	$b=$_POST["address"];
	$c=$_POST["phone"];
	$edit=mysqli_query($con,"UPDATE `person` SET `name`='$a',`address`='$b',`phone`='$c' WHERE id='$u'");
	header("location:view.php");
}
?>