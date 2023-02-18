<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/table.css">
    <title>MyCard</title>
</head>
<body>
        <center><h2>منتجاتك المحجوزه</h2></center>
    <?php
        include('config.php');
        $result=mysqli_query($con,"SELECT * FROM addcart");
        while($row=mysqli_fetch_array($result)){
            echo"
            <center>
            <main>
                <table class='table'>
                    <thead>
                        <tr>
                            <th >Product name</th>
                            <th >Product price</th>
                            <th >Delete Product</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>$row[name]</td>
                            <td>$row[price]</td>
                            <td><a href='del_card.php? id=$row[id]'>Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </center>
            
            ";
        }
    ?>
    <center>
        <a href="shop.php" class="back"> Back to products</a>
    </center>
</body>
</html>