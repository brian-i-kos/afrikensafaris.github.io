<?php
session_start();

	include("function.php");
	include("connection.php");

  // $user_data = $check_login($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

 
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">SHARECAR.</a>

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



<section class="home ">
<div class="heading" style="background:url(img/header-bg-1.png) no-repeat">
   
</div>
    <div class="search-pane">
    
        <div class="content">
            <h2>Your pick of rides at low prices</h2>
            <form class="search-bar" action="index.php" method="GET" >
               <label for="from">From</label>
               <input type="text" id="from"  name="from" value="<?php if(isset($_GET['from'])){echo $_GET['from']; } ?>">
               <label for="from">To</label>
               <input type="text" id="To" name="to" value="<?php if(isset($_GET['to'])){echo $_GET['to']; } ?>">
               <label for="date">Date</label>
               <input type="Date" id="Date"  name="date" value="<?php if(isset($_GET['date'])){echo $_GET['date']; } ?>">
               <button type = "submit" class="btn">Find a ride</button>
            </form>
           
         </div>
    </div>

   

</section>

<!-- home section ends -->
<!--results section starts-->

<section class="search-results">
   <table>
         <tr>
               <th>Surname</th>
               <th>First Name</th>
               <th>Contact</th>
               <th>Destination</th>
               <th>Origin</th>
               <th>Price in Ksh</th>
               <th>Car Reg No.</th>
               <th>Car Make</th>
               <th>Seats</th>
               <th>Date</th>
          </tr>
          <tr>
            <?php 
               include("connection.php");

               if(isset($_GET['from']))
               {
                  $_filtervalues = $_GET['from'];
                  $query = "SELECT * FROM rides WHERE CONCAT(destination, origin) LIKE '%$_filtervalues%' ";

                  $query_run = mysqli_query($conn, $query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                     foreach($query_run as $rides)
                     {
                        ?>
                        <tr>
                           <td style=" text-align:center" > <?= $rides['surname'] ?></td>
                           <td style=" text-align:center" > <?= $rides['firsname'] ?></td>
                           <td style=" text-align:center" > <?= $rides['phone_number'] ?></td>
                           <td style=" text-align:center" > <?= $rides['destination'] ?></td>
                           <td style=" text-align:center" > <?= $rides['origin'] ?></td>
                           <td style=" text-align:center" > <?= $rides['price'] ?></td>
                           <td style=" text-align:center" > <?= $rides['car_registratin_no'] ?></td>
                           <td style=" text-align:center" > <?= $rides['car_make'] ?></td>
                           <td style=" text-align:center" > <?= $rides['no_of_seats'] ?></td>
                           <td style=" text-align:center" > <?= $rides['dep_date'] ?></td>
                        </tr>
                           

                        <?php
                     }
                  }
                  else
                  {
                     ?><tr>
                        <td style="colspan:20; text-align:center" > No records found</td>
                     </tr>
                     
                     <?php
                  }
               }
            ?>
          
          </tr>   
   </table>
</section>
<!--results section ends-->

<!-- about section starts  -->
<div class="container">

</div>
<section class="about">

   <div class="image">
      <img src="img/mercedes.PNG" alt="">
   </div>

   <div class="content">
      <h3>why choose us?</h3>
      <p>Sharecar provides convinient and secure travelling means to individuals across the country 
         at affordable and reasoanle prices. We give you the best services help around the clock 
         whenever needed. 
      </p>
      <p>Sharecar is also to a benefit to a driver who through us has a side hustle whenever they
         are taking on a journey and this helps them save on fuel costs. Apart from all this, it is
      to the greater good in reducing the number of vehichles on the road which in turns reduces the 
   emission of pollutants into the atmosphere.</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>affordable price</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 safe </span>
         </div>
      </div>
   </div>

</section>
<!-- about section ends  -->

<!-- home offer section starts  -->
<div class="container"></div>

<section class="home-offer">
   <div class="content">
      <h3>upto 50% off during festive seasons</h3>
      <p>We do offer good rates during festive seasons rush such as Easter and Christmas seasons</p>
      <input type="button" href="rides.php" value="View offers" disabled class="btn">
   </div>
</section>
<div class="container">

</div>
<!-- home offer section ends -->




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









<
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>