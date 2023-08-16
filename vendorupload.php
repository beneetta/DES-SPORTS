<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {
    session_start();
}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products || DES SPORTS</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
</head>

<body>

    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="vendor.php">DES SPORTS</a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>

        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <li><a href="vendorhome.php">Home</a></li>
                <li> <a href="vendorproducts.php">Products</a></li>
                <li class='active'><a href="vendorupload.php">Upload products</a></li>
                <?php

                if (isset($_SESSION['username'])) {
                    echo '<li><a href="logout.php">Log Out</a></li>';
                } else {
                    echo '<li><a href="logout.php">Log Out</a></li>';
                }
                ?>
            </ul>
        </section>
    </nav>
    <form action="vendoruploaded.php" enctype="multipart/form-data" method="post" style="margin-top:30px;">
        <div class="row">
            <div class="small-8">

                <div class="row">
                    <div class="small-4 columns">
                        <label for="right-label" class="right inline">Product Name</label>
                    </div>
                    <div class="small-8 columns">
                        <input type="text" placeholder="Product Name" name="product_name">
                    </div>
                </div>

                <div class="row">
                    <div class="small-4 columns">
                        <label for="right-label" class="right inline">Product Price</label>
                    </div>
                    <div class="small-8 columns">
                        <input type="number" id="right-label" placeholder="Product Price" name="price">
                    </div>
                </div>

                <div class="row">
                    <div class="small-4 columns">
                        <label for="right-label" class="right inline">Product Code</label>
                    </div>
                    <div class="small-8 columns">
                        <input type="text" id="right-label" placeholder="Product code" name="product_code">
                    </div>
                </div>

                <div class="row">
                    <div class="small-4 columns">
                        <label for="right-label" class="right inline">Description</label>
                    </div>
                    <div class="small-8 columns">
                        <input type="text" id="right-label" placeholder="enter details" name="product_desc">
                    </div>
                </div>
                <div class="row">
                    <div class="small-4 columns">
                        <label for="right-label" class="right inline">Product image</label>
                    </div>
                    <div class="small-8 columns">
                        <input type="file" id="right-label" accept="" name="pro_img">
                    </div>
                </div>
                <div class="row">
                    <div class="small-4 columns"></div>
                    <div class="small-8 columns">
                        <a href="vendoruploaded.php" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">Upload</a>
                    </div>
                </div>
            </div>
        </div>
    </form>


</body>

</html>