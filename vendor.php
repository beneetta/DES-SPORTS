
<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vendor || DES SPORTS</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="vendorhome.php">DES SPORTS</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li  class='active'><a href="vendorhome.php">Home</a></li> 
          <li> <a href="vendorproducts.php">Products</a></li>
          <!-- <li><a href="vendorview.php">View Cart</a></li> -->
          <li><a href="vendorupload.php">Upload products</a></li>
          <!-- <li><a href="vendordelete.php">Contact</a></li> -->
          <?php

          if(isset($_SESSION['username'])){
            // echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
             echo '<li><a href="index.php">xx</a></li>';

            // echo '<li><a href="loginU.php">User Login</a></li>';
            // echo '<li><a href="loginV.php">Vendor Login</a></li>';
            // echo '<li><a href="admin.php">Admin Login</a></li>';            
            // echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>
    
    <img data-interchange="[images/logo.png, (retina)], [images/logo.png, (large)], [images/logo.png, (mobile)], [images/logo.png, (medium)]">
    <noscript><img src="images/logo.png"></noscript>
    
      
  </body>
</html>

