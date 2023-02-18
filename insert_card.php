<?php
include("config.php");
if(isset($_POST['add_product'])){
    $NAME=$_POST['name'];
    $PRICE=$_POST['price'];
    $insert="INSERT INTO addcart (name , price)VALUES('$NAME','$PRICE')";
    mysqli_query($con,$insert);
    header('location:card.php');
}
?>