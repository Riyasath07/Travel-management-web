
<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
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
<style>
   body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    width: 800px;
    margin: 50px auto;
    padding: 30px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

h1 {
    text-align: center;
}

h2 {
    margin-top: 30px;
    margin-bottom: 15px;
}

.payment-methods {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.payment-method {
    width: 30%;
    text-align: center;
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.payment-method img {
    width: 50px;
    margin-bottom: 10px;
}

form {
    margin-top: 30px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    border: 1px
}





body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    width: 800px;
    margin: 50px auto;
    padding: 30px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

h1 {
    text-align: center;
}

h2 {
    margin-top: 30px;
    margin-bottom: 15px;
}

.payment-methods {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.payment-method {
    width: 30%;
    text-align: center;
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.payment-method img {
    width: 50px;
    margin-bottom: 10px;
}

form {
    margin-top: 30px;
}

label {
    display: block;
    margin-bottom: 5px;
}

/* Added styles for form fields */
input[type="text"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc; /* Light gray border color */
    border-radius: 3px; /* Add a slight roundness to corners */
}

/* Style the checkbox for consistency */
input[type="checkbox"] {
    margin-right: 5px;
}
</style>

<script>

  function showBookingConfirmation() {
  alert("Your package has been booked!");
}

</script>

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

<h3><a href="home.php" class="logo">Safarnama.</a></h3>

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
<h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h5 class="heading-title">Choose Payment Method</h5>



   <div class="container">
        <h1>Safarnama accepts different payment methods for this booking</h1><br><br>
        <h3>Select payment method </h3><br>
        <div class="payment-methods">
            <div class="payment-method">
                <h3>CREDIT/DEBIT CARD</h3>
                <img src="images/visa.png" alt="Visa logo">
                <img src="images/rupay.png" alt="Rupay logo">
                <p>Visa/Mastercard/Amex / JCB</p>
            </div>
            <div class="payment-method">
                <h3>DIGITAL PAYMENT</h3>
                <img src="images/paypal.png" alt="PayPal logo">
            </div>
            <div class="payment-method">
                <h3>ONLINE BANKING</h3>
                <img src="images/online.png" alt="PayPal logo">
                <p>**List of available banks**</p>
            </div>
        </div>
        <form action="#">
            <h3><label for="card-holder-name">Card holder name</label></h3>
            <input type="text" id="card-holder-name" name="card_holder_name" value="Enter your name"><br><br><br>

            <h3><label for="card-number">Credit/debit card number</label></h3>
            <input type="text" id="card-number" name="card_number"><br><br><br>

            <h3><label for="expiry-date">Expiry date</label><h3>
            <input type="text" id="expiry-date" name="expiry_date" placeholder="MM/YY"><br><br><br>

            <h3><label for="cvv">CVV</label></h3>
            <input type="text" id="cvv" name="cvv"><br><br><br>

            <b><label for="agree-promotions"><br><br>
                <input type="checkbox" id="agree-promotions" name="agree_promotions">
                I agree to receive updates and promotions about safarnama and its affiliates or business partners via various channels, including WhatsApp. Opt out anytime. Read more in the Privacy Policy.
            </label></b>

            <button onclick="showBookingConfirmation()" class="btn" type="submit">BOOK NOW!</button>
            <!-- <button onclick="showBookingConfirmation()">Book Now</button> -->
        </form>

        <br><br><center><p>We'll send confirmation of your booking to Your email </p></center>
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