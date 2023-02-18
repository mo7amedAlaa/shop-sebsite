<?php
include("connect.php");
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * FROM user WHERE email='$email' and password='$password'";
$res=mysqli_query($conn,$query);

if(mysqli_num_rows($res)>0)
	 {
		 $row=mysqli_fetch_array($res);
		 $email=$row['email'];
		 $password=$row['password'];
		 echo '<script>alert("thank you")</script>';
         header("location:shop.php");
	 }
	 else {
		 echo '<h4 class="text-center alert alert-danger">البيانات غير صحيحة</h4>';
	 }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>login</title>
</head>

<body>
    <div class="login">
        <form action="" method="POST">
            <span class="icon"><i class="fa-solid fa-user"></i></span>
            <input type="email" name="email" required><br>
            <span class="icons"><i class="fa-sharp fa-solid fa-lock"></i></span>
            <input type="password" name="password" required><br>
            <input type="submit" name="submit" class="btn" value=" login">
            <p>Not register yet? <a href="register.php"> register</a></p>
        </form>
    </div>
</body>

</html>