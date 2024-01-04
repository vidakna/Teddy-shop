<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shop</title>
   

   

   <link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>
   
<?php include 'components/user_header.php'; ?>



<div class="heading">
   <h3>our shop</h3>
   <p> <a href="home.php">home</a> / shop </p>
</div>


<section class="products">

   <h1 class="heading-main">latest products</h1>

   <!-- <div class="swiper products-slider"> -->

   <div class="box-container">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` "); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="box">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <!-- <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button> -->
      <!-- <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a> -->
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="price"><span>Rs.</span><?= $fetch_product['price']; ?><span>/-</span></div>
      <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      <div class="flex">
       
        
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   <!-- </div>
   <div class="load-more" style="margin-top: 2rem; text-align:center ;width: 200px; ">
      <a href="shop.php" class="option-btn">load more</a>
   </div> -->


   <!-- <div class="swiper-pagination"></div> -->

   <!-- </div> -->

</section>






<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>