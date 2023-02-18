<?php
include('config.php');
$ID = $_GET['id'];
$up = mysqli_query($con, "SELECT * FROM prod WHERE id=$ID");
$data = mysqli_fetch_array($up);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/shop.css">
    <style>
        h2{
            color: white;
        }
        .main {
            background-color: #787878;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 480px;
            height: 350px;
            border-radius:10px;
            
        }

        input[type=text] {
            padding: 10px;
            margin: 5px;
            width: 250px;
            background: none;
            color: white;
            outline: none;
            border: none;
            border-bottom:2px white solid ;
            position: relative;
            left: 105px;
            font-size: 25px;
        }
        button{
            margin-top: 30px;
            background: none;
            outline: none;
            border: none;
            color: white;
            font-size: 20px;
            font-weight: bold;
            font-family: Georgia, 'Times New Roman', Times, serif;
            position: relative;
            left: 70px;
            background-color: #282828;
            border-radius: 10px;
            padding: 20px;
            cursor: pointer;
        }
        button:hover{
            background-color:black;
        }
        a{
            text-decoration: none;
            color: white;
            position: relative;
            top: 52px;
            left: -25px;
            background-color: black;
            margin-top: 30px;
            border-radius: 2px;
            padding-top: 2pxpx;
            padding-bottom: 4px;
        }
    </style>
    <title>Confirm Buy Product</title>
</head>

<body>
    <div class="main">
        <form action="insert_card.php" method="POST">
            <h2>Do YOU want to Buy The Product ?</h2>
            <input type="text" name="name" value="<?php echo $data['name']?>"><br>
            <input type="text" name="price" value="<?php echo $data['price']?>"><br>
            <button name="add_product" type="submit" class="btn">Confirm the Product into chart</button>
            <a href="shop.php">Back TO Products</a>
        </form>
    </div>
</body>

</html>