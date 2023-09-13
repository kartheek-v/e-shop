<!DOCTYPE html>
<html>
<head>
    <title>index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        input {
            text-align: center;
        }
        body{
            overflow-x:hidden;
        }
        .container-fluid{
            max-width:100%;
        }

        .product-card {
            border: 1px solid #ccc;
            padding: 20px; /* Increased padding */
            /* Increased margin */
            width: calc(50% - 40px); /* Adjusted width to fit two cards side by side */
            display: inline-block;
            vertical-align: top;
            text-align: center;
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card img {
            max-width: 100%;
            height: auto;
        }

        .product-card h3 {
            margin-top: 10px;
        }

        .btn-view-more {
            display: block;
            margin-top: 10px;
        }
       
    </style>
    
   

</head>
<body style="background-color:#f0f2f5;">
    
<div class="container-fluid">
    <?php include("header.php"); ?>

    <div class="row col-sm-12">
        <div class="col-sm-6">
            <div class="product-card" style="margin-left:400px;margin-bottom:20px">
                <img src="tvadd.jpg" alt="TV Product" >
                <h3>TV Products</h3>
                <a href="./tv.php" class="btn btn-primary btn-view-more">View More TVs</a>
            </div>
        </div>
        
        <div class="col-sm-6">
            <div class="product-card" style="margin-left:20px;margin-top:10px">
                <img src="phonead.jpg" alt="Mobile Product">
                <h3>Mobile Products</h3>
                <a href="./mobile.php" class="btn btn-primary btn-view-more" style='margin-top:20px'>View More Mobiles</a>
            </div>
        </div>
    </div>

</div>
  
</body>
<footer><?php include("footer.php"); ?></footer>
</html>
