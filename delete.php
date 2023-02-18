<?php
include("config.php");
 $id= $_GET['id'];
 mysqli_query($con,"DELETE FROM prod WHERE id='$id'");
 header("location:product.php");
?>