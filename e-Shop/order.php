<!DOCTYPE html>
<html>
<head>
    <title>Order</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script><!-- comment -->
    <style>
        table{
            width:100%;
            border:black;
  
        }
        body{
            overflow-x:hidden;
        }
        table,th,tr{
            text-align: center;
            align-content: center;
        }
        .image{
            width:50px;
            height:50px;
            align:center;
        }
        .btn{
            margin-left: 5px;
        }
        #loading{
            background: #38b6ff url(loading.gif) no-repeat center center;
            background-size:15%;
            height:100vh;
            width: 100%;
            position: fixed;
            z-index:100;
        }
        </style>
</head>
<?php
  session_start();
  if(!isset($_SESSION['user_id'])){
      header("location:login_page.php");
  }
?>


<body>
    <div class="container-fluid">
        <div class="row">
            <?php include 'header.php';
?>
            <div class="col-sm-12">
    <?php
    

    if(isset($_SESSION['user_id'])){
            $user_id=$_SESSION['user_id'];
            $conn= mysqli_connect('localhost','root','','eshopdb');
            $qry="SELECT *FROM orders WHERE user_id='$user_id' ORDER BY order_id DESC";
            $result=mysqli_query($conn, $qry);
        if(mysqli_num_rows($result)>0){
                echo"<table>";
                echo"<tr>";
                echo"<th>Order id</th>";
                    echo"<th>Product</th>";
                    echo"<th>Product Name</th>";
                    echo"<th>Product Price</th>";
                    echo"<th>Mobile Number</th>";
                    echo"<th>Address</th>";
                    
                echo"</tr>";
                while($order_info= mysqli_fetch_array($result)){
                echo"<tr>";
                echo"<td>".$order_info[0]."</td>";
                    echo"<td><img src='" . $order_info[7] . "' class='img-responsive image center-block' alt='" . $order_info[7] . "' ></td>";
                    echo"<td>".$order_info[5]."</td>";
                    echo"<td>".$order_info[6]."</td>";
                    echo"<td>".$order_info[3]."</td>";
                    echo"<td>".$order_info[4]."</td>";
                echo"</tr>";
                }
                echo"</table>";
            
        }else{
            echo"<h2 align='center'>Zero Orders</h2>";
        }
        }
        ?>
        </div>
           <div>
    <footer>
        <?php include './footer.php';?>
    </footer>  
        </div>
</body>
        </html>