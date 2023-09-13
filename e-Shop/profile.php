<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <meta name="viewport"  content=" width=device-width, intial-scale=1">
            
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<style>
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
    .table{
        align-items: center;
        border-radius:4px;
        display: table;
        border:5px;
        background-color:#33ccff;
        width:400px;
        height:400px;
    }
    .profile{
        align-items:center;
        display: flex;
        justify-content: center;
        display: grid;
    place-items: center;
    font-family:Red/Black, sans-serif;
    
        
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
            if(isset($_SESSION['user_id'])){
     $user_id=$_SESSION['user_id'];
     $conn= mysqli_connect('localhost','root','','eshopdb');
     $qry="SELECT *FROM usermaster where user_id='$user_id'";
     $result=mysqli_query($conn, $qry);
     if(mysqli_num_rows($result)===1){
         $profile= mysqli_fetch_assoc($result);
         echo"<div class=' profile' align='center'>";
         echo"<h1> Profile</h1>";
         echo"<table class='table'>";
         echo"<tr><td><h3> Personal Details</h3></td></tr>";
         echo"<tr><td><strong> Name: ".$profile['user_name']."</strong></td></tr>";
         echo"<tr><td><strong> Date of Birth: ".$profile['user_dob']."</strong></td></tr>";
         echo"<tr><td><strong>Gender : ".$profile['user_gender']."</strong></td></tr>";
         echo"<tr><td><h3> Contact Details</h3></td></tr>";
         echo"<tr><td><strong> Email: ".$profile['user_email']."</strong></td></tr>";
         echo"<tr><td><strong> Phone Number: ".$profile['user_mobile']."</strong></td></tr>";
         
     
         echo"</table>";
         
         echo"</div>";
     }
            }
         ?>
    </body>
    <footer><?php include("footer.php"); ?></footer>
