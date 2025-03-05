<?php
$id=$_GET['id'];
$con=mysqli_connect('localhost','root','','ecommerce');
mysqli_query($con,"DELETE from `tbluser` WHERE id=$id");
header("location:user.php");
?>