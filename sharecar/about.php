<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

 
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
   <h1>about us</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="img/low emissions.jpg" alt="" style="height: 440px;">
   </div>

   <div class="content"style="font-color: #222;">
      <h3>Our Objectives</h3>
      <p>Due to the increase in the number of motor vehicles in the world generally und the subsequent climate change 
         due to pollution from, we find it important to make an impact in fighting climate change through sharecar.
      </p>
      <p>Each user of sharecar app is contributing towards the fight against climate change and global warming.</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-recycle"></i>
            <span>Foster a clean environment</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>foster a saving culture</span>
         </div>
         <div class="icons">
            <i class="fas fa-globe"></i>
            <span>reduce global warming</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->
<section>
   <h1 class="heading-title">user reviews </h1>
   <div class="reviews">
   
        <div class="grid-item2">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>I not only save money but I also earn some money through using sharecar. This has become a side hustle
               for me and it feels good since i know i am helping protect our environment. This is a good thing and its impact is big!
            </p>
            <h3>Chela Mile</h3>
            <span>Driver</span>
            <img src="img/chela.jpg" alt="">
         </div>

         <div class="grid-item2">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Ever since I started using sharecar, I have saved on alot of of travel expenses and has also made it convinient
               and cheaper to travel conmpared to the days I used to go by bus.
            </p>
            <h3>Mohamed Kesse</h3>
            <span>Sharecar user</span>
            <img src="img/kastel.jpeg" alt="">
         </div>

         <div class="grid-item2">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>the only challenge i had with sharecarnis the fact that you rarely find people driving to smaller towns or regions
               . I hope this will change in the future when there will be more people using this site.
            </p>
            <h3>Mbaye Diang</h3>
            <span>Sharecar user</span>
            <img src="img/kimaru.jpg" alt="">
         </div>
   </div>
</section>
<div class="container"></div>
<!-- reviews section ends -->















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









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>