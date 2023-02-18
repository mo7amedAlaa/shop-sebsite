<?php
include("config.php");
 $id= $_GET['id'];
 mysqli_query($con,"DELETE FROM contact WHERE id='$id'");
 header("location:contact_review.php");
?>