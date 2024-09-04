<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:book.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>



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

<h3><a href="home.php" class="logo">Safarnama.</a></h3>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="login.php">login</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<div class="background-img">
    <img src="images/login-bg.jpg" alt="background">
</div>


<!-- header section endss  -->


  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                       
                <!-------------      image     ------------->
                
                <img class="icon" src="images/icon-1.png" alt="">
                <div class="text">
                    <p>"We wander for distraction, but we travel for fulfilment!." <i> -Hilaire Belloc</i></p>
                </div>
                
            </div>
            <div class="col-md-6 right">
                
                <div class="input-box">
                   <form action="" method="post">

                   <header><h2>login now</h2></header>

                   <?php
                    if(isset($error)){
                        foreach($error as $error){
                         echo '<span class="error-msg">'.$error.'</span>';
                        };
                    };
                    ?>

                   <div class="input-field">
                        <!-- <input type="text" class="input" id="email" required="" autocomplete="off"> -->
                        <input type="email" class="input" name="email" required placeholder="enter your email">
                        <!-- <label for="email">Email</label>  -->
                    </div> 
                   <div class="input-field">
                        <!-- <input type="password" class="input" id="pass" required=""> -->
                        <input type="password" class="input" name="password" required placeholder="enter your password">
                        <!-- <label for="pass">Password</label> -->
                    </div> 


                   <div class="input-field">
                        <!-- <input type="submit" class="submit" value="Sign Up"> -->
                        <input type="submit" class="submit" name="submit" value="login now" class="form-btn">
                   </div> 
                   <div class="signin">
                    <span>don't have an account?<a href="register_form.php">register now</a></span>
                   </div>


                   </form>

                </div>  
            </div>
        </div>
    </div>
</div>
</body>
</html>