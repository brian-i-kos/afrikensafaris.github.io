<?php
session_start();

	include("function.php");
	include("connection.php");

   //$user_data = $check_login($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

 

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="index.php" class="logo">SHARECAR.</a>

   <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="rides.php">Rides</a>
        <a href="about.php">About Us</a>
        <a href="contact.php">Contact</a>
        <a><i class="fas fa-user-circle"></i>
            <div class="user-toggle">
               <p> Hello,<?php if(isset($_SESSION['user_name']))
                     {
                        echo  $user_data['user_name'];

                     }?></p>
                <a href="signup.php" target="_blank">Signup</a>
                <a href="login.php" target="_blank" >Login</a>
                <a href="logout.php" target="_blank">Logout</a>
            </div>
        </a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>
   
</section>

<!-- header section ends -->

<div class="heading" style="background:url(img/header-bg-1.png) no-repeat">
   <h1>Contact form</h1>
</div>

<!-- form section starts  -->

<section class="contact">
 
   <form action="contact.php" method="post">
      <div class="inputBox">
         <span>name :</span>
         <input type="text" placeholder="enter your name" name="name">
      </div>
      <div class="inputBox">
         <span>email :</span>
         <input type="email" placeholder="enter your email" name="email">
      </div>
      <div class="inputBox">
         <span>phone :</span>
         <input type="number" placeholder="enter your number" name="phone">
      </div>
      <div class="inputBox">
         <span>address :</span>
         <input type="text" placeholder="enter your address" name="address">
      </div>
   </form>   
   <div class="text-area">
      <textarea name="message" id="message" cols="30" rows="10"></textarea>
      <input type="submit" value="Send Message" class="btn" name="send">
   </div>                

</section>
<div class="container"></div>
<!-- form section ends -->


















<!-- footer section starts  -->

<section class="footer">

 
<div class="box-container">

<div class="box">
   <h3>Quick Links</h3>
   <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
   <a href="rides.php"> <i class="fas fa-angle-right"></i> Rides</a>
   <a href="about.php"> <i class="fas fa-angle-right"></i> About us</a>
   <a href="contact.php"> <i class="fas fa-angle-right"></i> Contact us</a>
</div>

<div class="box">
      <h3>Extra Links</h3>
      <a href="signup.php"> <i class="fas fa-angle-right"></i> Sign up</a>
      <a href="login.php"> <i class="fas fa-angle-right"></i> Login</a>
      <a href="logout.php"> <i class="fas fa-angle-right"></i> Sign out</a>
    
   </div> 

   <div class="box">
      <h3>Contact Info</h3>
      <a href="#"> <i class="fas fa-phone"></i> +254702118686 </a>
      <a href="#"> <i class="fas fa-phone"></i> +254784945294 </a>
      <a href="#"> <i class="fas fa-envelope"></i> sharecar@gmail.com </a>
      <a href="#"> <i class="fas fa-map"></i> Eldoret, Kenya </a>
   </div>

   <div class="box">
      <h3>Follow Us</h3>
      <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
      <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
      <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
      <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
   </div>

</div>

<div class="credit"> <span><i class="fa fa-copyright"></i></span> Brian K. Kosgey</div>
</section>

<!-- footer section ends -->











<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>