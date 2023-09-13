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

        h2{
            text-align: center;
            
        }
        p{
            font-size:20px;
            font-family:Helvetica, Verdana, sans-serif;
            text-align:center;
        }
        footer{
            margin-top: 600px;
        }
        
    </style>
    <?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header("location:login_page.php");
    }
    ?>
   

</head>
<body style="background-color:#f0f2f5;">
    
<div class="container-fluid">
    <?php include("header.php"); ?>

    <div class="row col-sm-12">
        <div class="faq">
        <h2>1.Contact details</h2>
        <p>phone Number: eshop Mobile Number</p>
        <p>Email: eshop@gmail.com.</p>
    
        
        
    </div>
        
    </div>
    </div>

</div>
  <footer><?php include("footer.php"); ?></footer>
</body>

</html>

