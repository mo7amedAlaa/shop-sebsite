<?php
include("connect.php");
if (isset($_POST['submit'])) {

    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];
    $query="INSERT INTO `user`(name, email, password) VALUES('$name', '$email', '$pass')";
    $res=mysqli_query($conn,$query);

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reg.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


    <title>Register</title>

</head>

<body>

?>
    <div class="reg">
        <form action="" method="POST">
            <span class="icons"><i class="fa-solid fa-user "></i></span>
            <input type="text" name="name" required><br>
            <span class="ic"><i class="fa-solid fa-envelope"></i></span>
            <input type="email" name="email" required><br>
            <span class="icon"><i class="fa-sharp fa-solid fa-lock"></i></span>
            <input type="password" name="password" required><br>
            <span class="ico"><i class="fa-sharp fa-solid fa-lock"></i></span>
            <input type="password" name="cpassword" required><br>
            <input type="submit" name="submit" class="btn" value=" register">
            <p>do you have an account <a href="login.php">login</a></p>
        </form>
    </div>
</body>

</html>