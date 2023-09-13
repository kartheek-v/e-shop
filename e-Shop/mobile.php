<!DOCTYPE html>
<html>
<head>
    <title>Mobile Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    <style>
        input {
            text-align: center;
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
        /* Adjust panel styles */
        .product-panel {
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .product-image {
            border-radius: 20px 20px 0 0;
        }
        .product-details {
            padding: 10px;
        }
        .product-name {
            font-size: 18px;
            font-weight: bold;
        }
        .product-price {
            font-size: 16px;
            color: #007bff;
        }
        footer{
            position: absolute;
        }
    </style>
    	<?php
  session_start();
  if(!isset($_SESSION['user_id'])){
      header("location:login_page.php");
  }
 
?>
   
</head>
<body style="background-color:#f0f2f5">
<div class="container-fluid">
    
    <div class="row">
        <?php include("header.php"); ?>
        <div class="col-sm-12">
            <h1 class="text-center">Mobiles </h1>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "eshopdb");
            $qry = "select *from productmaster where ptype='mobile'";
            $result = mysqli_query($conn, $qry);
            if (mysqli_num_rows($result) > 0) {
                $i = 0;
                while ($r = mysqli_fetch_array($result)) {
                    if ($i % 4 == 0) {
                        echo "<div class='row'>";
                    }
                    echo "<div class='col-sm-3'>";
                    echo "<div class='panel panel-default product-panel'>";
                    echo "<div class='panel-body product-image'>";
                    echo "<img src='$r[4]' class='img-responsive center-block' alt='$r[1]' width='150px' height='100px'>";
                    echo "</div>";
                    echo "<div class='panel-body product-details'>";
                    echo "<h4 class='text-center product-name'>$r[1]</h4>";
                    echo "<p class='text-center product-price'>Price: $r[2]</p>";
                    echo "<p class='text-center'><a href='product_details.php?pid=$r[0]'  class='btn btn-primary'>More Details</a></p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    $i++;
                    if ($i % 4 == 0) {
                        echo "</div>";
                    }
                }
                // Check if the last row is incomplete (not having 4 products)
                if ($i % 4 !== 0) {
                    echo "</div>";
                }
            } else {
                echo "No Products Available";
            }
            mysqli_close($conn);
            ?>
        </div>
    </div>
    <?php include("footer.php"); ?>
</div>
</body>
</html>
