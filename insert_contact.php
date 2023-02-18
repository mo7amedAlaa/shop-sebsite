<?php
include('config.php');
if(isset($_POST['send'])){
    $Name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['mobile'];
    $message=$_POST['message'];
    $insert="INSERT INTO contact (name , email, phone, message) VALUES('$Name','$email','$phone','$message')";
    mysqli_query($con,$insert);
    header('location:contact.php');
}
?>