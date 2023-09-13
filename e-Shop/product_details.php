<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        
/* Customize styling as needed */
        body {
            background-color: #f0f2f5;
             /* Adjust this value to make space for the sticky header */
        }
        body{
            overflow-x:hidden;
        }
        #loading{
            background: #38b6ff url(loading.gif) no-repeat center center;
            background-size:15%;
            height:100vh;
            width: 100%;
            position: fixed;
            z-index:100;
        }
        
        .product-image {
            text-align: left;
            margin-bottom: 20px;
        }
        .product-name {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }
        .product-price {
            font-size: 20px;
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }
        .product-description {
            font-size: 16px;
            text-align: justify;
            margin-bottom: 20px;
        }
        .back-button {
            text-align: center;
            margin-top: 20px;
        }
        .left{
            text-align:left;
        }
    
        /* Additional styling */
        .product-specs {
            font-size: 19px;
            text-align: left;
            font-family: Red/Black, sans-serif;
        }
        .btn{
            margin-top:20px;
            margin-bottom:20px;
        }
        .specs{
              font-size: 24px;
            font-weight: bold;
            margin-bottom: 40px;
        }
        .cart{
            background-color:#990099;
            color:white;
            margin-left:10px;
        }
    </style>
   <?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header("location:login_page.php");
    }
    ?>
</head>
<body>
<div class="container-fluid">
    <?php include("header.php"); ?>
   
    <div class="row col-sm-12">
        <div class="">
            <?php
            if (isset($_GET['pid'])) {
                $product_id = $_GET['pid'];
                $mb_type='mobile';
                $tv_type='tv';
                $conn = mysqli_connect("localhost", "root", "", "eshopdb");
                $qry = "SELECT * FROM productmaster LEFT JOIN mobilespecification ON productmaster.pid = mobilespecification.pid WHERE productmaster.pid='$product_id' AND ptype='$mb_type'";
                   $qry2="SELECT *FROM productmaster LEFT JOIN tv_specification ON productmaster.pid = tv_specification.pid WHERE productmaster.pid='$product_id' AND ptype='$tv_type'";
                $result_mb = mysqli_query($conn, $qry);
                $result_tv=mysqli_query($conn,$qry2);
                  
                if (mysqli_num_rows($result_mb) > 0) {
                    $product_info= mysqli_fetch_assoc($result_mb);
                    
                    echo "<div class='product-card'>";
                    echo"<div class='col-sm-4'>";
                    echo "<h1 class='product-name'>" . $product_info['pname'] . "</h1>";
                    echo "<p class='product-price'>Price: " . $product_info['pprice'] . "</p>";
                    echo "<div class='product-image col'>";
                    echo "<img src='" . $product_info['pimage'] . "' class='img-responsive center-block' alt='" . $product_info['pname'] . "' width='200px'>";
                    echo "</div>";
                    echo"</div>";
                    echo "<div class='product-specs col-sm-4'>";
                    echo"<h1 class='specs'> Specifications</h1>";
                    echo "<p><strong>Operating System: </strong> " . $product_info['os'] . "</p>";
                    echo "<p><strong>Processor: </strong> " . $product_info['processor'] . "</p>";
                    // ... Display other specifications here ...
                    
                    echo "<p class='left'><strong>Color: </strong>" .$product_info['color']."</p>";
                    echo "<p class='left'><strong>Display Size: </strong>" .$product_info['display_size']."</p>";
                    echo "<p class='left'><strong>Internal Storage: </strong>" .$product_info['internal_storage']."</p>";
                    echo "<p class='left'><strong>Ram: </strong>" .$product_info['ram']."</p>";
                    echo "<p class='left'><strong>Primary camera: </strong>" .$product_info['primary_camera']."</p>";
                    echo "<p class='left'><strong>Seconadry Camera: </strong>" .$product_info['secondary_camera']."</p>";
                    echo "<p class='left'><strong>Network Type: </strong>" .$product_info['network_type']."</p>";
                    echo "<p class='left'><strong>Battery Capacity: </strong>" .$product_info['battery_capacity']."</p>";
                    echo "<p class='left'><strong>Warrenty Summary: </strong>" .$product_info['warrenty_summary']."</p>";             
                    echo "<a href='place_order.php?pid=" . $product_info['pid'] . "&pname=" . urlencode($product_info['pname']) . "&pprice=" . $product_info['pprice'] ."&user_id=".$_SESSION['user_id']."&pimage=".$product_info['pimage']."' class='btn btn-primary'>Buy product</a>";
                    echo "<a href='mycart.php?pid=" . $product_info['pid'] . "&pname=" . urlencode($product_info['pname']) . "&pprice=" . $product_info['pprice'] ."&user_id=".$_SESSION['user_id']."&pimage=".$product_info['pimage']."' class='btn cart'>Add to Cart</a>";


                    echo"</div>";
                    
                } else if(mysqli_num_rows($result_tv)>0){
                    $product_spec= mysqli_fetch_assoc($result_tv);
                    echo "<div class='product-card'>";
                    echo"<div class='col-sm-4'>";
                    echo "<h1 class='product-name'>" . $product_spec['pname'] . "</h1>";
                    echo "<p class='product-price'>Price: " . $product_spec['pprice'] . "</p>";
                    echo "<div class='product-image col'>";
                    echo "<img src='" . $product_spec['pimage'] . "' class='img-responsive center-block' alt='" . $product_spec['pname'] . "' width='200px'>";
                    echo "</div>";
                    echo"</div>";
                    echo "<div class='product-specs col-sm-4'>";
                    echo"<h1 class='specs'> Specifications</h1>";
                    echo "<p><strong>In The Box: </strong> " . $product_spec['In_The_Box'] . "</p>";
                    echo "<p><strong>Color: </strong> " . $product_spec['color'] . "</p>";
                    // ... Display other specifications here ...
                    
                    echo "<p class='left'><strong>Display Size: </strong>" .$product_spec['display_size']."</p>";
                    echo "<p class='left'><strong>Screen Type: </strong>" .$product_spec['screen_type']."</p>";
                    echo "<p class='left'><strong>HD Technology and Resolution: </strong>" .$product_spec['hd_tech_res']."</p>";
                    echo "<p class='left'><strong>Smart Tv: </strong>" .$product_spec['smart_tv']."</p>";
                    echo "<p class='left'><strong>Motion Sensor: </strong>" .$product_spec['motion_sensor']."</p>";
                    echo "<p class='left'><strong>HDMI: </strong>" .$product_spec['hdmi']."</p>";
                    echo "<p class='left'><strong>Bulit In Wifi: </strong>" .$product_spec['bulit_in_wifi']."</p>";
                    echo "<p class='left'><strong>Lunch year: </strong>" .$product_spec['lunch_year']."</p>";
                    echo "<p class='left'><strong>Wall Mount: </strong>" .$product_spec['wall_mount']."</p>";             
                    
                    echo "<a href='place_order.php?pid=" . $product_spec['pid'] . "&pname=" . urlencode($product_spec['pname']) . "&pprice=" . $product_spec['pprice'] ."&user_id=".$_SESSION['user_id']."&pimage=".$product_spec['pimage']."' class='btn btn-primary'>Buy Product</a>";
          
                    echo "<a href='mycart.php?pid=" . $product_spec['pid'] . "&pname=" . urlencode($product_spec['pname']) . "&pprice=" . $product_spec['pprice'] ."&user_id=".$_SESSION['user_id']."&pimage=".$product_spec['pimage']."' class='btn cart'>Add to Cart</a>";
                    
                   
                    echo"</div>";
                }
                
                
                
                
                
                else {
                    echo "Product Details Not Found.";
                }

                mysqli_close($conn);
            } else {
                echo "Product ID not provided.";
            }
            ?>
            
        </div>
    </div>
</div>
<footer><?php include("footer.php"); ?></footer>
</body>

</html>
