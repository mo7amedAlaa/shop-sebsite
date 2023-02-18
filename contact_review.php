<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .main{
            background-color: #d26900;
            width: fit-content;
            height:fit-content;
            margin: 20px;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 1px 1px 10px #f27900;
        }
        p{
            color: white;
            font-size: 18px;
            font-weight: bold;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        a{
            text-decoration: none;
            color: white;
            font-size: 18px;
            background-color: black;
            padding: 10px;
            border-radius: 17px;
            position: relative;
            left: 70px;
        }
        .contact .container{
    display: grid;
    grid-template-columns: repeat(auto-fill,minmax(250px,1fr));
    gap: 40px;
}
    </style>
    <title>Reviews</title>
</head>
<body>
<div class="contact" id="product">
       <center><h2 class="main-title">Reviews</h2></center> 
        <div class="container">

            <?php
            include("config.php");
            $result = mysqli_query($con, "SELECT * FROM contact");
            while ($row = mysqli_fetch_array($result)) {
                echo "
        <div class='main'>
                <div  style='width: 15rem;'>
                    <div class='review'>
                        <div class='title'>
                            <p >number: $row[id]</p>
                            <p >Name: $row[name]</p>
                            <p > Email: $row[email]</p>
                            <p >Phone: $row[phone]</p>
                            <p >Message: $row[message]</p>
                        </div>
                        <div class='buttom'>
                        <a href='contact_delete.php? id=$row[id]' class='delete'>Delete</a>
                        </div>
                    </div>
                </div>
        </div>
        
        ";
            }
            ?>

        </div>
    </div>
</body>
</html>