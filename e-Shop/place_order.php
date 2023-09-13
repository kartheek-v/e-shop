<!DOCTYPE html>
<html>
    <head>
        <title>Place Order</title>
        <meta name="viewport"  content=" width=device-width, intial-scale=1">
            
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<style>
    .hai{
        width:500px;
        border-radius:5px;
        height:35px; 
        border-color:whitesmoke;
        font-family:sans-serif;
    }
    textarea{
        height:150px;
        width: 500px;
         border-radius:5px;
         border-color:whitesmoke;     
    }
  
    .image{
        width:50px;
        height:50px
    }
    .order{
        
        width: 600px;
        height:100px;
        margin-bottom:10px;
        
    }
    #loading{
            background: #38b6ff url(loading.gif) no-repeat center center;
            background-size:15%;
            height:100vh;
            width: 100%;
            position: fixed;
            z-index:100;
        }
    .order,th{
        border:1px solid black;
        text-align: center;
    }
    body{
            overflow-x:hidden;
        }
    
</style>
<script>
 function validateform(){
     var mobile=document.forms['orderform']['mobile'].value;
     var address=document.forms['orderform']['address'].value;
     if(mobile == ""){
         alert("Mobile number is requires");
         return false;
     }
     else if(address=="" && length(address)>0){
         alert("Address is required");
         return false;
     }
     return true;
 }
</script>	

    </head>
    <?php
  session_start();
  if(!isset($_SESSION['user_id'])){
      header("location:login_page.php");
  }
?>
    <body style="background-color:#f0f2f5;">
	<div class="container-fluid">
		 <?php include("header.php"); ?>
            
            <div class="row" style="">
                <div class="col-sm-12" align="center" >
                    <?php if(isset($_GET['pid'])){
                $pid=$_GET['pid'];
                $conn= mysqli_connect('localhost','root','','eshopdb');
                $qry="SELECT *FROM productmaster WHERE pid='$pid'";
                $result= mysqli_query($conn, $qry);
                   if(mysqli_num_rows($result)>0){
                echo"<table class='order'>";
                echo"<tr>";
                    echo"<th>Product</th>";
                    echo"<th>Product Name</th>";
                    echo"<th>Product Price</th>";
                    
                echo"</tr>"; 
                while($order_info= mysqli_fetch_array($result)){ //Display product details
                echo"<tr>";
                    echo"<td style='border:1px solid'><img src='" . $order_info[4] . "' class='img-responsive image center-block' alt='" . $order_info[4] . "' ></td>";
                    echo"<td style='border:1px solid;text-align:center'>".$order_info[1]."</td>";
                    echo"<td style='text-align:center'>".$order_info[2]."</td>";
                    
                echo"</tr>";
                }
                echo"</table>";
            
        } 
       
        $pname=$_GET['pname'];
        $pprice=$_GET['pprice'];
        $pimage=$_GET['pimage'];
        $user_id=$_SESSION['user_id'];
        if(isset($_POST['place_order'])){
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];
        $conn= mysqli_connect('localhost','root','','eshopdb');
        $qry="INSERT INTO orders VALUES(null,'$user_id','$pid','$mobile','$address','$pname','$pprice','$pimage')";
        
        $result= mysqli_query($conn,$qry);
        $order_qry="SELECT *FROM orders where user_id='$user_id'";
        $order_res= mysqli_query($conn, $order_qry);
        
        if(mysqli_num_rows($order_res)>0){
            echo'<h1>Your order Is Confirmed</h1>';
            echo "<script> window.alert('Order Confirmed'); window.location.href='order.php'</script>";
                }
              }
                        
       }
            ?>
                    <!-- for enter order details -->
                       
                    <form method="post" onsubmit="return validateform()" name="orderform" class="kar" style=" background-color:#38b6ff;padding:5px;border-radius: 5px; box-shadow: 5px 5px 6px -7px;width:600px;height:500px;row-gap:3%;margin-bottom: 20px">
                        
                        <h3 float="center" style="font-family:'New Century Schoolbook',serif;letter-spacing:2px"><b>Shipping Page !</b></h3></legend>
                    
                                <table  align="center" style=" margin:30px;width:400px;height:400px;">
                                    <tr>
                        
                            <tr>
                                <td align="left">
                                    <b>Phone Number</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" placeholder="phone number" class="hai" name="mobile" required="enter mobile number">
                                </td>
                            </tr>
                            <tr style="margin-top:30px">
                                <td align="left" style="margin-top:">
                                    <b>Address</b>
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    <textarea type="text" name="address" placeholder="Enter your Address" ></textarea>

                                </td>
                            </tr>
                             
                           
                            <td><button type="submit" name="place_order" style="background-color:#0074d9; border-radius:5px;height:50px;border-color:#0074d9;width:500px;margin-top:10px;letter-spacing:1px; "><b>Submit</b></button></td></tr>
                        </table>
                        
                    </form>
                       
                </div>        
                </div>
        </div>

                </div>
                    
                
            </div>
                            
                                
                          
			
			
      
        </div>
       
    </body>
    <footer><?php include("footer.php"); ?></footer>
</html>