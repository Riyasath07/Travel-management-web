<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Safarnama.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="logout.php" class="logout-button" >logout</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
<h1>Hello <span><?php echo $_SESSION['admin_name'] ?></span></h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <!-- <h1 class="heading-title">Admin Page!</h1> -->
   <div style="width: 1828px; height: 932px; position: relative">
  <div style="width: 1828px; height: 932px; left: 0px; top: 0px; position: absolute; background: #E6E9EF"></div>
  <div style="width: 1271px; height: 609px; left: 488px; top: 77px; position: absolute">
    <div style="width: 1271px; height: 504px; left: 0px; top: 105px; position: absolute; background: white; box-shadow: 4px 4px 4px; border: 3px black solid; filter: blur(4px)"></div>
    <div style="width: 1271px; height: 72.92px; left: 0px; top: 102px; position: absolute; background: #596171"></div>
    <div style="width: 1193px; height: 30.30px; left: 31px; top: 220.37px; position: absolute">
      <div style="width: 53px; height: 24.62px; left: 0px; top: 5.68px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">BK-1</div>
      <div style="width: 57px; height: 24.62px; left: 167px; top: 4.73px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Riyaz</div>
      <div style="width: 115px; height: 24.62px; left: 326px; top: 3.79px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">8899665544</div>
      <div style="width: 173px; height: 24.62px; left: 486px; top: 2.84px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">riyaz@gmail.com</div>
      <div style="width: 71px; height: 24.62px; left: 677px; top: 1.89px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Manali</div>
      <div style="width: 105px; height: 24.62px; left: 833px; top: 0.95px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">22/03/2023</div>
      <div style="width: 12px; height: 24.62px; left: 1008px; top: 0px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">4</div>
      <div style="width: 75px; height: 24.62px; left: 1118px; top: 0px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Booked</div>
    </div>
    <div style="width: 1193px; height: 30.30px; left: 31px; top: 275.30px; position: absolute">
      <div style="width: 53px; height: 24.62px; left: 0px; top: 5.68px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">BK-2</div>
      <div style="width: 77px; height: 24.62px; left: 167px; top: 4.74px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Saawan</div>
      <div style="width: 115px; height: 24.62px; left: 326px; top: 3.79px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">8882233355</div>
      <div style="width: 172px; height: 24.62px; left: 486px; top: 2.84px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">saaw@gmail.com</div>
      <div style="width: 77px; height: 24.62px; left: 677px; top: 1.89px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Ladakh</div>
      <div style="width: 105px; height: 24.62px; left: 833px; top: 0.95px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">02/04/2023</div>
      <div style="width: 12px; height: 24.62px; left: 1008px; top: 0px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">8</div>
      <div style="width: 75px; height: 24.62px; left: 1118px; top: 0px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Booked</div>
    </div>
    <div style="width: 1193px; height: 30.30px; left: 31px; top: 330.22px; position: absolute">
      <div style="width: 53px; height: 24.62px; left: 0px; top: 5.68px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">BK-3</div>
      <div style="width: 49px; height: 24.62px; left: 167px; top: 4.74px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Sona</div>
      <div style="width: 112px; height: 24.62px; left: 326px; top: 3.79px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">1111444455</div>
      <div style="width: 168px; height: 24.62px; left: 486px; top: 2.84px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">sona@gmail.com</div>
      <div style="width: 57px; height: 24.62px; left: 677px; top: 1.89px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Kerla</div>
      <div style="width: 105px; height: 24.62px; left: 833px; top: 0.95px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">18/03/2023</div>
      <div style="width: 12px; height: 24.62px; left: 1008px; top: 0px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">6</div>
      <div style="width: 75px; height: 24.62px; left: 1118px; top: 0px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Booked</div>
    </div>
    <div style="width: 1193px; height: 30.30px; left: 31px; top: 385.15px; position: absolute">
      <div style="width: 53px; height: 24.62px; left: 0px; top: 5.68px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">BK-4</div>
      <div style="width: 68px; height: 24.62px; left: 167px; top: 4.74px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">sudeep</div>
      <div style="width: 115px; height: 24.62px; left: 326px; top: 3.79px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">6656599884</div>
      <div style="width: 179px; height: 24.62px; left: 486px; top: 2.84px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">sudee@gmail.com</div>
      <div style="width: 52px; height: 24.62px; left: 677px; top: 1.89px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Paris</div>
      <div style="width: 105px; height: 24.62px; left: 833px; top: 0.95px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">29/06/2023</div>
      <div style="width: 12px; height: 24.62px; left: 1008px; top: 0px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">8</div>
      <div style="width: 75px; height: 24.62px; left: 1118px; top: 0px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Booked</div>
    </div>
    <div style="width: 1193px; height: 30.30px; left: 31px; top: 440.07px; position: absolute">
      <div style="width: 53px; height: 24.62px; left: 0px; top: 5.68px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">BK-5</div>
      <div style="width: 36px; height: 24.62px; left: 167px; top: 4.74px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Adi</div>
      <div style="width: 115px; height: 24.62px; left: 326px; top: 3.79px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">8899665544</div>
      <div style="width: 159px; height: 24.62px; left: 486px; top: 2.84px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Adi@gmail.com</div>
      <div style="width: 40px; height: 24.62px; left: 677px; top: 1.89px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Bali</div>
      <div style="width: 105px; height: 24.62px; left: 833px; top: 0.95px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">15/05/2023</div>
      <div style="width: 12px; height: 24.62px; left: 1008px; top: 0px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">2</div>
      <div style="width: 75px; height: 24.62px; left: 1118px; top: 0px; position: absolute; color: #1E1E1E; font-size: 23px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Booked</div>
    </div>
    <div style="width: 1204px; height: 37.88px; left: 31px; top: 119.05px; position: absolute">
      <div style="width: 102px; height: 32.20px; left: 0px; top: 5.68px; position: absolute; color: white; font-size: 30px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Book-id</div>
      <div style="width: 75px; height: 32.20px; left: 167px; top: 4.74px; position: absolute; color: white; font-size: 30px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Name</div>
      <div style="width: 81px; height: 32.20px; left: 326px; top: 3.79px; position: absolute; color: white; font-size: 30px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Phone</div>
      <div style="width: 77px; height: 32.20px; left: 486px; top: 2.84px; position: absolute; color: white; font-size: 30px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Email</div>
      <div style="width: 107px; height: 32.20px; left: 668px; top: 1.89px; position: absolute; color: white; font-size: 30px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Package</div>
      <div style="width: 96px; height: 32.20px; left: 835px; top: 0.95px; position: absolute; color: white; font-size: 30px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Arrival</div>
      <div style="width: 87px; height: 32.20px; left: 998px; top: 0px; position: absolute; color: white; font-size: 30px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Guests</div>
      <div style="width: 86px; height: 32.20px; left: 1118px; top: 0px; position: absolute; color: white; font-size: 30px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Action</div>
    </div>
    <div style="width: 472px; height: 80px; left: 0px; top: 0px; position: absolute; color: #343A48; font-size: 60px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Manage Bookings</div>
  </div>
  <div style="width: 379px; height: 932px; left: 0px; top: 0px; position: absolute">
    <div style="width: 379px; height: 932px; left: 0px; top: 0px; position: absolute; background: #596171"></div>
    <div style="width: 379px; height: 90px; left: 0px; top: 0px; position: absolute; background: rgba(44.25, 50.18, 62.04, 0.50)"></div>
    <div style="left: 25px; top: 160px; position: absolute; color: white; font-size: 35px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Dashboard</div>
    <div style="left: 25px; top: 246px; position: absolute; color: white; font-size: 35px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Manage users</div>
    <div style="left: 25px; top: 334px; position: absolute; color: white; font-size: 35px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Manage bookings</div>
    <div style="left: 25px; top: 426px; position: absolute; color: white; font-size: 35px; font-family: Times New Roman; font-weight: 700; word-wrap: break-word">Manage Packages</div>
    <img style="width: 50px; height: 50px; left: 25px; top: 20px; position: absolute" src="https://via.placeholder.com/50x50" />
  </div>
</div>

</section>


<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +91 9008329831 </a>
         <a href="#"> <i class="fas fa-envelope"></i> riyazrinnu@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Hospete,Karnataka </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>Riyaz shaik</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>