<?php
session_start();

	include("function.php");
	include("connection.php");

   //$user_data = $check_login($conn);


if($_SERVER['REQUEST_METHOD'] == "POST")
{
   //something was posted
   $surname = $_POST['surname'];
   $firstname = $_POST['firstname'];
   $contact = $_POST['phone'];
   $destination = $_POST['destination'];
   $origin = $_POST['origin'];
   $price = $_POST['price'];
   $car_reg_no = $_POST['car_registration'];
   $car_make = $_POST['car_make'];
   $seats = $_POST['no_of_seats'];
   $date = $_POST['dep_date'];


   if(!empty($surname) && !empty($firstname) &&!empty($contact) && !is_numeric($surname) && !is_numeric($firstname) 
    && !empty($destination)  && !empty($origin)&& !empty($price)  && !empty($car_reg_no)  && !empty($car_make) 
     && !empty($seats)  && !empty($date)) 
   
   {

      //save to database
      $query = "INSERT INTO rides (surname, firsname, phone_number, destination, 
      origin, price, car_registratin_no, car_make, no_of_seats, dep_date) values ('$surname','$firstname','$contact'
      , $destination','$origin','$price','$car_reg_no','$car_make',' $seats','$date')";

      mysqli_query($conn, $query);
      
      echo "Ride posted successfully";
      
      
   }else
   {
      echo "Please enter some valid information!";
   }
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>rides</title>

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
   <h1>rides</h1>
</div>
<section class="posted">
   <?php
      
   ?>

</section>

<!-- rides body section starts -->
<section class="posts">
   <h2>Post a ride</h2>
   <form action="rides.php" Method="post">
      
      
      <label>Surname :</label>
      <input type="text" placeholder="enter your surname" name="surname">
   
      <label>Firstname :</label>
      <input type="text" placeholder="enter your first name" name="firstname">

      <label>Phone Number:</label>
      <input type="number" placeholder="enter your Phone number" name="phone">
   
      <label>Destination :</label>
      <input type="text" placeholder="enter your Destination" name="destination">
   
      <label>Origin :</label>
      <input type="text" placeholder="Enter the place of depature" name="origin">
   
      <label>Price:</label>
      <input type="number" placeholder="enter the price" name="price">
   
      <label>Car resgistration No. :</label>
      <input type="text" placeholder="KCZ 543U" name="car_registration">
   
      <label>Car Make :</label>
      <input type="text" placeholder="enter the make of your car" name="car_make">
   
      <label>Available seats :</label>
      <input type="number" placeholder="" name="no_of_seats">

      <label>Departure Date :</label>
      <input type="date" placeholder="" name="dep_date">

      <input type="submit" class="btn"value="POST">
   </form>   
 
   
</section>
<div class="container"></div>
<!-- rides body section ends -->

<!-- Rides section starts  -->

<section class="rides">

   <h1 class="heading-title">top destinations</h1>

   <div class="grid-container">

      <div class="grid-item">
         <div class="image">
            <img src="img/nairobi.jpg" alt="">
         </div>
         <div class="content">
            
         <h3>Jouneys to Nairobi</h3>
            <a href="rides.php" class="btn">View offers</a>
         </div>
      </div>

      <div class="grid-item">
         <div class="image">
            <img src="img/Nakuru.jpg" alt="">
         </div>
         <div class="content">
            
            <h3>Jouneys to Nakuru</h3>
            <a href="rides.php" class="btn">View offers</a>
         </div>
      </div>

      <div class="grid-item">
         <div class="image">
            <img src="img/Kisumu.jpg" alt="">
         </div>
         <div class="content">
            
         <h3>Jouneys to Kisumu</h3>
            <a href="rides.php" class="btn">View offers</a>
         </div>
      </div>

      <div class="grid-item">
         <div class="image">
            <img src="img/Eldoret.jpg" alt="">
         </div>
         <div class="content">
            
         <h3>Jouneys to Eldoret</h3>
            <a href="rides.php" class="btn">View offers</a>
         </div>
      </div>

      <div class="grid-item">
         <div class="image">
            <img src="img/homa-bay.jpg" alt="">
         </div>
         <div class="content">
            
         <h3>Jouneys to Homa Bay</h3>
            <a href="rides.php" class="btn">View offers</a>
         </div>
      </div>

      <div class="grid-item">
         <div class="image">
            <img src="img/kisii.jpg" alt="">
         </div>
         <div class="content">
            
         <h3>Jouneys to Kisii</h3>
            <a href="rides.php" class="btn">View offers</a>
         </div>
      </div>

      <div class="grid-item">
         <div class="image">
            <img src="img/Mombassa.jpg" alt="">
         </div>
         <div class="content">
            
         <h3>Jouneys to Mombasa</h3>
            <a href="rides.php" class="btn">View offers</a>
         </div>
      </div>

      <div class="grid-item">
         <div class="image">
            <img src="img/Narok.jpg" alt="">
         </div>
         <div class="content">
            
         <h3>Jouneys to Narok</h3>
         <a href="rides.php" class="btn">View offers</a>
         </div>
      </div>

</section>
<div class="container"></div>
<!-- Rides section ends -->

<!-- footer section starts  -->

<section class="footer" style="background: url(img/footer-bg-1.jpg)">


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