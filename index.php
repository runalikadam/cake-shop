<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/validation.js"></script>

        <title>Online Cake Shop</title>
        
    </head>
    <body>
        <div class="main_container" id="home">
            <div class="navbar">
                <div class="header">
                <div class="logo">
                    <a href="#">Cake Shop</a>
                    
                </div>
                
                <div class="navbar_items">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Product</a>
    <div class="dropdown-content">
      <a href="#">Cake</a>
      <a href="#">Pestries</a>
      <a href="#">layered cake</a>
      <a href="#">cupcake</a>
      <a href="#">cookies</a>
    </div>
  </li>
                        
                        <li><a href="#contactus">Contact</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Log in</a></li>
                        
                    </ul>
                </div>
                </div>
            </div>
        </div><br><br>

        <div class="banner_image">
            <img src="images/cake2.jpg" width="100%" height="600px">
        </div>
        <div  class="about" id="about">
            <h1 class="title">About us</h1>
            <p>A cake shop is a retail business specializing in producing and/or selling cakes; they may also sell cupcakes, muffins, sponges, as well as other baked goods that fall under the title of a cake.In our online cake shop, you will discover endless normal cakes adjusted to any sustenance motivations, narrow mindedness, and vegetarian. You can pick inventive and regular cakes to make recollections in the occasions with loved ones.</p>
        </div>

        
        
        <div class="products" id="products">
            <h1 class="title">Our Products</h1>
            <p>In our online cake shop, you will discover endless normal cakes adjusted to any sustenance motivations, narrow mindedness, and vegetarian. You can pick inventive and regular cakes to make recollections in the occasions with loved ones.</p>
            <div class="diff_products">
                <div class="diff_product_item">
            
            <img src="images/cupcake.jpg" alt="product_image">
            <h3>cup cake</h3>
            <p>These Moist Chocolate Cupcakes are completely from scratch & full of chocolate flavor! The cupcake is so moist, it melts in your mouth .</p>
            </div>
                 
                <div class="diff_product_item">
            
                    <img src="images/pestry.jpg" alt="product_image">
            <h3>Pestries</h3>
            <p>f all cake is baked and all baked goods are pastry then all cake is pastry. ... The second, and infinitely more delicious definition is of a sweet baked good that is made of flour, fat, sugar, leaveners and flavorings.</p>
            </div>
                  
                <div class="diff_product_item">
            
                    <img src="images/layered cake.jpg" alt="product_image">
            <h3>layered cake</h3>
            <p>The perfect everyday layer cake for every occasion! It's no surprise that you don't see a lot of layer cakes here on the blog.</p>
            </div>
                   
            
            </div>
        </div><br><br>
        <section class="my-4">
        <div class="contactus" id="contactus">
            <h1 class="title">Contact Us</h1>
            <form name="myForm" action="#contactus" onsubmit="return validateForm()" method="post">
            <form method="post" action="">
                <div class="form_wrapper">
                
                <div class="form_input">
                    <input type="text" name="name" placeholder="Name">
                </div>
                <div class="form_input">
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="form_input">
                    <input type="text" name="subject" placeholder="Subject">
                </div>
                 <div class="form_input">
                     <textarea name="message" placeholder="Message"></textarea>
                </div>
                <div class="btn">
                   <input type="submit" name="submit" name="submit">  
            </div>
                
        </div>
        </div>
</form>
</form>
        </section>
            
        <div class="footer">
            <a href="#">cake shop</a>
        </div>
        <?php
if (isset($_POST['submit'])){
require 'connection.php';
$conn = Connect();

$Name = $conn->real_escape_string($_POST['name']);
$Email = $conn->real_escape_string($_POST['email']);

$Subject = $conn->real_escape_string($_POST['subject']);
$Message = $conn->real_escape_string($_POST['message']);

$query = "INSERT into contact(Name,Email,subject,Message) VALUES('$Name','$Email','$Subject','$Message')";
$success = $conn->query($query);

if (!$success){
  die("Couldnt enter data: ".$conn->error);
}

$conn->close();
}
?>
   
     
    </body>
</html>
