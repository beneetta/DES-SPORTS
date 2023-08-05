<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DES SPORTS</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <!-- <style>
      .searchbar
      /* input[type="text"] { */
        {
        padding: 8px;
        font-size: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 15px;
        position:absolute;
        top:500px;
        left:0px;
        }
    .sub
     {
      /* padding: 8px 20px; */
      font-size: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 25px;
      cursor: pointer;   
      position: absolute;   
    }
    .ts{
      position: relative;
      /* margin-bottom: 100px; */
    }
    </style> -->
  </head>

  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">DES SPORTS</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
       
        
      </ul>
      
      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <!-- <li><a href="about.php">About</a></li> -->
          <div class="ts">
            <form action="" method="post">
                <input type="text" class= "searchbar" name="search_query" placeholder="Enter your search term" style="position:absolute;top:0px;width:250px;margin-left:-500px;border-radius: 10px;">
                <input type="submit" class="sub" name="submit" value="Search" style="position:absolute;margin-left:-230px;border: radius 0.5px;">
            </form> 
          </div>
         
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>          
                
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">User Login</a></li>';
            echo '<li><a href="loginV.php">Vendor Login</a></li>';
            echo '<li><a href="admin.php">Admin Login</a></li>';            
            echo '<li><a href="register.php">Register</a></li>';            
          }
          
          
          ?>
        </ul>
      </section>
    </nav>

    <img data-interchange="[images/logo.png, (retina)], [images/logo.png, (large)], [images/logo.png, (mobile)], [images/logo.png, (medium)]">
    <noscript><img src="images/logo.png"></noscript>



    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy;DES SPORTS shopping store. All Rights Reserved.</p>
        </footer>

      </div>
    </div>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
