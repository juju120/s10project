<?php
include'dbcon.php';
$u=$_GET['uid'];
$del=mysqli_query($con,"DELETE FROM `person` WHERE id='$u'");
header("location:view.php");
?>