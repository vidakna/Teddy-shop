
<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   
   <link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/aboutus.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We began 3 years ago with a passion for creating thoughtful and personalized gifts for our friends. These gifts consisted of a stuffed animal with an outfit or accessory designed to reflect each specific recipient’s personality; no two were ever alike!</p>
         <p>Included with each gift box were a handcrafted card and other goodies. Our gift packages grew in popularity and we began receiving special request with teddy bears being the animal of choice.</p>
       
      </div>

   </div>

</section>



<section class=" producers">

   <h1 class="title">The producers</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/person1.jpg" alt="">
        
         <h3>M.T.V Perera</h3>
         <h2>Main Producer</h2>
      </div>

      <div class="box">
         <img src="images/person2.jpg" alt="">
         
         <h3>I.B.M.T.Maduranga</h3>
         <h2>Distribution Manager</h2>
      </div>

      <div class="box">
         <img src="images/person3.jpg" alt="">
        
         <h3>W.R.J.T De Silva</h3>
         <h2>Technical Officer</h2>
      </div>

     

</section>







<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>