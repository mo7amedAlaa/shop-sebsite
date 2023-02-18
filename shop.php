<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/shop.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


    <title>Product</title>
</head>

<body>
    <div class="header" id="header">
        <div class="container">
            <a href="#" class="logo">Store</a>
            <ul class="main-nav">
                <li><a href="#landing" class="link">Home</a></li>
                <li><a href="#product" class="link">Product</a></li>
                <li><a href="card.php" class="link">Mycard</a></li>
                <li><a href="contact.php" class="link">Contact</a></li>
                <li><a href="logout.php" class="link">Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="landing">
        <div class="container">
            <div class="text">
                <h1>Welcome,We my store</h1>
                <p>We offer you special product</p>
            </div>
            <div class="image">
                <img src="./images/land.png" alt="">
            </div>
        </div>
    </div>
    <div class="products" id="product">
        <h2 class="main-title">Products</h2>
        <div class="container">

            <?php
            include("config.php");
            $result = mysqli_query($con, "SELECT * FROM prod");
            while ($row = mysqli_fetch_array($result)) {
                echo "
        <div class='main'>
                <div class='card' style='width: 15rem;'>
                    <img src='$row[image]' class='card_img' alt='img'>
                    <div class='card-body'>
                        <div class='title'>
                            <h5 class='name_pro'>$row[name]</h5>
                            <p class='price_pro'>$row[price]</p>
                        </div>
                        <div class='buttom'>
                        <a href='val.php? id=$row[id]' class='chart'>Add Into Chart </a>
                        </div>
                    </div>
                </div>
        </div>
        
        ";
            }
            ?>

        </div>
    </div>
    <div class="features">
        <h2 class="main-title">Features</h2>
        <div class="container">
            <div class="box quality">
                <div class="img-holder">
                    <img src="./images/features-01.jpg" alt="">
                </div>
                <h2>Quality</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, dolore. Consequuntur architecto, commodi earum quia similique, eveniet excepturi repellat fugiat doloremque unde,</p> <a href="#">More</a>
            </div>
            <div class="box time">
                <div class="img-holder">
                    <img src="./images/features-02.jpg" alt="">
                </div>
                <h2>Time</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, dolore. Consequuntur architecto, commodi earum quia similique, eveniet excepturi repellat fugiat doloremque unde,</p>
                <a href="#">More</a>
            </div>
            <div class="box passion">
                <div class="img-holder">
                    <img src="./images/features-03.jpg" alt="">
                </div>
                <h2>Passion</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, dolore. Consequuntur architecto, commodi earum quia similique, eveniet excepturi repellat fugiat doloremque unde,</p> <a href="#">More</a>
            </div>
        </div>
    </div>
    <div class="spikes"></div>
    <div class="testimonials" id="testimonials">
        <h2 class="main-title">Testimonials</h2>
        <div class="container">
            <div class="box">
                <img src="./images/avatar-01.png" alt="">
                <h3>Ahmed Khalid</h3>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab libero modi rem at, doloremque ratione numquam eveniet voluptas quis voluptat</p>
            </div>
            <div class="box">
                <img src="./images/avatar-02.png" alt="">
                <h3>Omer Khalid</h3>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab libero modi rem at, doloremque ratione numquam eveniet voluptas quis voluptat</p>
            </div>
            <div class="box">
                <img src="./images/avatar-03.png" alt="">
                <h3>Mohamed Hemdan</h3>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab libero modi rem at, doloremque ratione numquam eveniet voluptas quis voluptat</p>
            </div>
            <div class="box">
                <img src="./images/avatar-04.png" alt="">
                <h3>Ali Ahmed</h3>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab libero modi rem at, doloremque ratione numquam eveniet voluptas quis voluptat</p>
            </div>
            <div class="box">
                <img src="./images/avatar-05.png" alt="">
                <h3>Kamal Hemdan</h3>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab libero modi rem at, doloremque ratione numquam eveniet voluptas quis voluptat</p>
            </div>
            <div class="box">
                <img src="./images/avatar-06.png" alt="">
                <h3>Ahmed Mohamed</h3>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab libero modi rem at, doloremque ratione numquam eveniet voluptas quis voluptat</p>
            </div>
        </div>
    </div>
    
    <div class="footer">
        <div class="container">
            <div class="box ">
                <h3>BfcAi</h3>
                <ul class="social">
                    <li>
                        <a href="#" class="facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Autem non ad exercitationem nemo numquam ex?
                </p>
            </div>
            <div class="box">
                <ul class="links">
                    <li><a href="#">Important Link 1</a></li>
                    <li><a href="#">Important Link 2</a></li>
                    <li><a href="#">Important Link 3</a></li>
                    <li><a href="#">Important Link 4</a></li>
                    <li><a href="#">Important Link 5</a></li>
                </ul>
            </div>
            <div class="box">
                <div class="line">
                    <i class="fas fa-map-marker-alt fa-fw"></i>
                    <div class="info">Egypt, Giza, Inside The Sphinx, Room Number 220</div>
                </div>
                <div class="line">
                    <i class="far fa-clock fa-fw"></i>
                    <div class="info">Business Hours: From 10:00 To 18:00</div>
                </div>
                <div class="line">
                    <i class="fas fa-phone-volume fa-fw"></i>
                    <div class="info">
                        <span>+20123456789</span>
                        <span>+20198765432</span>
                    </div>
                </div>
            </div>
            <div class="box footer-gallary">
                <img src="./images/gallery-01.png" alt="">
                <img src="./images/gallery-02.png" alt="">
                <img src="./images/gallery-03.png" alt="">
                <img src="./images/gallery-04.png" alt="">
                <img src="./images/gallery-04.png" alt="">
                <img src="./images/gallery-02.png" alt="">
            </div>
        </div>
        <p class="copyright">Made With &lt;3 By Ahmed</p>
    </div>
</body>

</html>