<!DOCTYPE html>
<html>
<head>
    <title>TV Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        
        body {
            background-color: #f0f2f5;
        }
        body{
            overflow-x:hidden;
        }
        
        .product-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px 0;
            height: 350px;
        }
        .product-image {
            text-align: center;
            margin-bottom: 20px;
        }
        .product-name {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }
        .product-price {
            font-size: 16px;
            color: #007bff;
            text-align: center;
            margin-bottom: 10px;
        }
       
        .product-details {
            font-size: 14px;
            text-align: justify;
            margin-bottom: 10px;
        }
        .more-details-link {
            text-align: center;
        }
    </style>
    <?php
  session_start();
  if(!isset($_SESSION['user_id'])){
      header("location:login_page.php");
  }
 
?>
   
</head>
<body>
<div class="container-fluid">
    
    <div class="row">
        <?php include("header.php"); ?>
        <div class="col-sm-12">
            <h1 class="text-center">TV Products</h1>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "eshopdb");
            $qry = "select * from productmaster where ptype='tv'";
            $result = mysqli_query($conn, $qry);
            
            if (mysqli_num_rows($result) > 0) {
                $i = 0;
                echo "<div class='row'>";
                while ($r = mysqli_fetch_array($result)) {
                    echo "<div class='col-sm-3'>";
                    echo "<div class='product-card'>";
                    echo "<div class='product-image' style='margin-top:30px'>";
                    echo "<img src='$r[4]' style='border-radius:20px margin-top:20px' width='150px' height='200px' class='img-responsive center-block'>";
                    echo "</div>";
                    echo "<h3 class='product-name'>$r[1]</h3>";
                    echo "<p class='product-price'>Price: $r[2]</p>";
               
                    echo "<div class='more-details-link'>";
                    echo "<a href='product_details.php?pid=$r[0]' class='btn btn-primary'>More Details</a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";

                    $i++;
                    if ($i % 4 == 0) {
                        echo "</div><div class='row'>";
                    }
                }
                echo "</div>";
            } else {
                echo "<p class='text-center'>No TV Products Available</p>";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
    <?php include("footer.php"); ?>
</div>
</body>
</html>
