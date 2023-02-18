<?php
include("config.php");
$ID=$_GET['id'];
mysqli_query($con,"DELETE FROM addcart WHERE id=$ID");
header("location:card.php");
?>