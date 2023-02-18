<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Shop online</title>
    <style>
        .link {
    background-color: #c600c6;
    padding: 20px;
    border-radius: 20px;
    color: white;
    position: relative;
    left: 20px;
    top: 30px;
  }
  .link:hover{
    background-color: #f400f4;
    color: white;
  }
    </style>
</head>
<body>
    <a href="contact_review.php" class="link">Review</a>
    <div class="main">
        <form action="insert.php" method="POST" enctype="multipart/form-data"> <!--حتي يتم رفع الصوره -->
            <h1>Online store</h1>
            <img src="./images/logo.jpg" alt=""><br>
            <label for="product_name" class="product" >Product name</label><br>
            <input type="text" id="product_name" name="name"  ><br>
            <label for="product_price" class="product" >Product price</label><br>
            <input type="text" id="product_price" name="price"><br>
            <input type="file" id="file" name="image" style="display:none;">
            <label for="file" class="choose">chosse image</label>
            <button name="upload"> upload product</button>
            <br>
            <a href="product.php"> show product</a>
        </form>
        <p> @ Developer By Bfcai</p>
    </div>
</body>
</html>