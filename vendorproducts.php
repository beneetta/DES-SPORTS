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
                <li class='active'> <a href="vendorproducts.php">Products</a></li>
                <li><a href="vendorupload.php">Upload products</a></li>
                <?php

                if (isset($_SESSION['username'])) {
                    echo '<li><a href="logout.php">Log Out</a></li>';
                } else {
                    echo '<li><a href="loginV.php">Vendor login</a></li>';
                }
                ?>
            </ul>
        </section>
    </nav>


    <div class="row" style="margin-top:10px;">
        <div class="small-12">
            <?php

            $conn = new mysqli("localhost", "root", "", "bolt");
            $result = mysqli_query($conn, "select * from products");
            while ($row = mysqli_fetch_assoc($result)) 
            {
                $pid = $row['id'];
                $product_name = $row['product_name'];
                $product_code = $row['product_code'];
                $product_desc = $row['product_desc'];
                $product_img_name = $row['product_img_name'];
                $qty = $row['qty'];
                $price = $row['price'];



                echo '<div class="large-4 columns">';
                echo '<p><h3>' . $product_name . '</h3></p>';
                echo '<img src="images/products/' . $product_img_name . '"/>';
                echo '<p><strong>Product Code</strong>: ' . $product_code . '</p>';
                echo '<p><strong>Description</strong>: ' . $product_desc . '</p>';
                echo '<p><strong>Units Available</strong>: ' . $qty . '</p>';
                echo '<p><strong>Price (Per Unit)</strong>: ' . $price . '</p>';
                echo '<button><a href="vendordelete.php?id=$pid" class="btn btn-danger" style="color:white;font-size: 1em; padding: 10px" role="button">Delete</a></button>';
                echo '</div>';
            }

            ?>

            <div class="row" style="margin-top:10px;">
                <div class="small-12">
                    <footer style="margin-top:10px;">
                        <p style="text-align:center; font-size:0.8em;clear:both;">&copy; DES SPORTS Shopping store. All Rights Reserved.</p>
                    </footer>
                </div>
            </div>
            <script src="js/vendor/jquery.js"></script>
            <script src="js/foundation.min.js"></script>
            <script>
                $(document).foundation();
            </script>
        </div>
    </div>
</body>

</html>