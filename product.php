<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/product.css">
    <title>Product</title>
</head>
<body>
    <h2>All Products Available</h2>
    <?php
    include("config.php");
    $result=mysqli_query($con,"SELECT * FROM prod");
    while($row=mysqli_fetch_array($result)){
        echo"
        <div class='main'>
                <div class='card' style='width: 15rem;'>
                    <img src='$row[image]' class='card_img' alt='img'>
                    <div class='card-body'>
                        <div class='title'>
                            <h5 class='name_pro'>$row[name]</h5>
                            <p class='price_pro'>$row[price]</p>
                        </div>
                        <div class='buttom'>
                        <a href='delete.php? id=$row[id]' class='delete'> Delete </a>
                        <a href='modify.php? id=$row[id]' class='modify'>Modify </a>
                        </div>
                    </div>
                </div>
        </div>
        
        ";
    }
    ?>
    
</body>
</html>