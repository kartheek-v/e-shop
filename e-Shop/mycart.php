
<!DOCTYPE html>
<html>
<head>
    <title>My Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        
     
        table{
            width:100%;
            border:black;
  
        }
        table,tr,th,td{
            text-align:center;
            align-content: center;
            border:1px solid black;
        }
        th{
            border:1px solid black;
        }
        tr{
            border:1px solid black;
        }
        #loading{
            background: #38b6ff url(loading.gif) no-repeat center center;
            background-size:15%;
            height:100vh;
            width: 100%;
            position: fixed;
            z-index:100;
        }
        .image{
            width:70px;
            height:75px;
            border-radius:4px;
        }
        body{
            overflow-x:hidden;
        }
        .btn{
            margin-left: 5px;
        }
    </style>
    <?php
  session_start();
  if(!isset($_SESSION['user_id'])){
      header("location:login_page.php");
  }
?>
</head>
<body style="background-color:#f0f2f5;">
<div class="container-fluid">
    <?php include("header.php"); ?>
    <?php
     
     
        if(isset($_GET['pid'])){
            $product_id=$_GET['pid'];
            $pname=$_GET['pname'];
            $pprice=$_GET['pprice'];
            $pimage=$_GET['pimage'];
            $user_id=$_GET['user_id'];
            $conn= mysqli_connect('localhost','root','','eshopdb');
            $qry="INSERT INTO cart VALUES(null,'$user_id','$product_id','$pname','$pprice','$pimage')"; 
            $res2=mysqli_query($conn, $qry);
            
           }
          
        if(isset($_SESSION['user_id'])){
            $user_id=$_SESSION['user_id'];
            $conn= mysqli_connect('localhost','root','','eshopdb');
            $qry="SELECT *FROM cart WHERE user_id='$user_id' ORDER BY id DESC";
            $result=mysqli_query($conn, $qry);
        if(mysqli_num_rows($result)>0){
                echo"<table>";
                echo"<tr>";
                    echo"<th>Product</th>";
                    echo"<th>Product Name</th>";
                    echo"<th>Product Price</th>";
                    echo"<th>Action</th>";
                echo"</tr>";
                while($cart_info= mysqli_fetch_array($result)){
                echo"<tr>";
                    echo"<td><img src='" . $cart_info[5] . "' class='img-responsive image center-block' alt='" . $cart_info[5] . "' ></td>";
                    echo"<td>".$cart_info[3]."</td>";
                    echo"<td>".$cart_info[4]."</td>";
                    echo"<td><a href='deleteitem.php?id=".$cart_info[0]."' class='btn btn-danger'>Delete</a>"
                            . "<a href='place_order.php?pid=".$cart_info[2]."&pname=" . urlencode($cart_info[3]) . "&pprice=" . $cart_info[4] ."&user_id=".$_SESSION['user_id']."&pimage=".$cart_info[5]."' class='btn btn-primary'>Buy product</a></td>";
                    
                echo"</tr>";
                }
                echo"</table>";
            
        }else{
            echo"<h2 align='center'> No Products are Availble in Cart</h2>";
        }
        }
    ?><!-- comment -->
    

</div>
</body>
<footer><?php include("footer.php"); ?></footer>
</html>
