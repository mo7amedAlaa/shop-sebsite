<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/contact.css">
    <title>Contact</title>
</head>
<body>
<div class="Contact" id="Contact">
      <div class="image">
        <div class="content">
          <h2> Contact</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam officiis dolor aut ducimus eum velit vitae accusantium facere voluptatum, qui optio esse necessitatibus molestiae fuga sint ex dicta? Vero, et!</p>
          <img src="./images/discount.png" alt="">
        </div>
      </div>
      <div class="form">
        <div class="content">
          <h2> send A Contact</h2>
          <form action="insert_contact.php" method="post">
            <input class="input" type="text" placeholder="Your Name" name="name" />
            <input class="input" type="email" placeholder="Your Email" name="email" />
            <input class="input" type="text" placeholder="Your Phone" name="mobile" />
            <textarea class="input" placeholder="Tell Us About Your Needs" name="message"></textarea>
            <input type="submit" value="Send" name="send" />
          </form>
        </div>
      </div>
    </div>
</body>
</html>