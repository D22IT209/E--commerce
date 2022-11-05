<header class="header">

   <div class="flex">
      <img src="logo.png" width="90" height="90">
      <a href="" class="logo">Digital Marketing</a>

      <nav class="navbar">

         <a href="loginadmin.php">add products</a>
         <a href="products.php">view products</a>
         <a href="logout.php">logout</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>
      

      <a href="cart.php" class="cart">cart <span><?php echo $row_count ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>


   </div>

</header>