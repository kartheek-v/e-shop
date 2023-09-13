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
            
        }
        p{
            font-size:20px;
            font-family:Helvetica, Verdana, sans-serif;
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
        <h2>1. What payment methods do you accept?</h2>
        <p>We accept various payment methods including credit/debit cards, PayPal, and other secure online payment options.</p>
        <div class="faq">
        <h2>2.How can I contact your customer support?</h2>
        <p>You can reach our customer support team through tkarthik@gmail.com,9381878073, or by using the contact form on our website. We're here to assist you with any inquiries.</p>
    </div>
        <div class="faq">
        <h2>3.Do you have a loyalty program?</h2>
        <p>Yes, we have a loyalty program that rewards our repeat customers with exclusive benefits and discounts.</p>
    </div>
        <div class="faq">
        <h2>4.Can I change my shipping address after placing an order?</h2>
        <p>Please contact our customer support immediately if you need to change your shipping address after placing an order. We'll do our best to assist you.</p>
    </div>
        
        
    </div>
        
    </div>
    </div>
<footer><?php include("footer.php"); ?></footer>
</div>
  
</body>

</html>

