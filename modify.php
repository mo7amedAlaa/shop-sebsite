<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Update Product</title>
</head>
<body>
    <?php
        include("config.php");
        $ID=$_GET['id'];
        $up=mysqli_query($con,"SELECT * FROM prod WHERE id=$ID");
        $data=mysqli_fetch_array($up);
    ?>
    <div class="main">
        <form action="up.php" method="POST" enctype="multipart/form-data"> 
            <h1>Modify Products</h1>
            <label for="product_Id" class="product" >Product number</label><br>
            <input type='text' id='product_Id' name='id' value='<?php echo$data['id'] ?>'>
            <br>
            <label for="product_name" class="product" >Product name</label>
            <br>
            <input type="text" id="product_name" name="name" value="<?php echo$data['name']?>">
            <br>
            <label for="product_price" class="product" >Product price</label>
            <br>
            <input type="text" id="product_price" name="price" value="<?php echo$data['price']?>">
            <br>
            <input type="file" id="file" name="image" style="display:none;">
            <label for="file" class="choose">modify the product image</label>
            <button name="update" type="submit">Modify product</button>
            <br>
            <a href="product.php">عرض المنتجات</a>
        </form>
        <p> @ Developer By Bfcai</p>

    </div>
    
</body>
</html>