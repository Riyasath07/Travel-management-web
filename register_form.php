<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }

};

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>register form</title>



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

<div class="backgroundimg">
    <img src="images/footer-bg.jpg" height="700" alt="background">
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
                        <header><h2>register now</h2></header>

                   <?php
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<span class="error-msg">'.$error.'</span>';
                         };
                     };
                    ?>

                   <div class="input-field">
                   <input type="text" class="input" name="name" required placeholder="enter your name">
                    </div> 
                   <div class="input-field">
                        <input type="email" class="input" name="email" required placeholder="enter your email">
                    </div> 

                   <div class="input-field">
                        <input type="password" class="input" name="password" required placeholder="enter your password">
                    </div> 

                   <div class="input-field">
                   <input type="password" class="input" name="cpassword" required placeholder="confirm your password">
                    </div> 

                    <div class="input-field">
                    <select name="user_type" class="input">
                        <option value="user">select type of user</option>
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
                    </div> 
                    

                   <div class="input-field">
                        <input type="submit" class="submit" name="submit" value="Register" class="form-btn">
                   </div>
                   <div class="signin">
                    <span>already have an account?<a href="login.php">login now</a></span>
                   </div>

                   </form>

                </div>  
            </div>
        </div>
    </div>
</div>
</body>
</html>