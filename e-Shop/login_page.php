<!DOCTYPE html>
<html>
    <head>
        <title>Login Here</title>
        <meta name="viewport"  content=" width=device-width, intial-scale=1">
            
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<style>
    #loading{
            background: #38b6ff url(loading.gif) no-repeat center center;
            background-size:15%;
            height:100vh;
            width: 100%;
            position: fixed;
            z-index:100;
        }
    input{
        text-align:center;
    }
    .error{
        text-align:justify-all;
    }
    footer{
       display:contents;
    }
    body{
            overflow-x:hidden;
        }
  
    
</style>
	<?php
        session_start();
        $msg="";
        if(isset($_POST['submit']))
        {
            $username=$_POST['uname'];
            $password=$_POST['password'];
            $conn=mysqli_connect("localhost","root","","eshopdb");
            $qry="select *from usermaster where user_email='$username' and user_pwd='$password'";
            $result= mysqli_query($conn, $qry);
            if(mysqli_num_rows($result)>0){
                $r = mysqli_fetch_array($result);
                 $_SESSION['user_id']=$r[0];
                header("location:index.php");
              
            }
    else {
     $msg="<font color='red' class='error'><b>Invalid username and password</b></font>";
     mysqli_close($conn);
     }
        }
        ?>

    </head>
    <body style="background-color:#f0f2f5;">
	<div class="container-fluid">
		 <?php include("header.php"); ?>
                   		 
			<div class="row" style="">
                            <div class="" style=" " align="center">
                                <div class="container-fluid">
                
                <div class="col-sm-12" align="center" style="" >
                    <form action="" method="post" style="align-content:center; height:500px;width:800px;margin:30px 20px;background-color:#38b6ff;border-radius:5px; box-shadow:5px 5px 6px -7px;padding:5px;align-content:center;">
                         <h2 align="center" style="margin-top:20px;">Login Here!</h2>
                         <h4>
                                <?php echo ''.$msg
                                 ?>
                         </h4>
                        <table style=" margin-top:20px;padding:5px;height:400px" align="center">
                            <tr><td><input type="text" name="uname" class="input" placeholder=" Email address or phone number" style="  text-align:left;width:500px;height:50px;margin:10px;border-radius:5px;border-color:whitesmoke;"></td></tr
                             <tr><td><input type="password" name="password" class="input" placeholder=" Password"style="  text-align:left;width:500px;height:50px;margin:10px;border-radius:5px;border-color:whitesmoke;"></td></tr>
                             <tr><td><button name="submit" type="submit" style="width:500px;height:60px;margin:10px;border-radius:8px;border-color:#0074d9;background-color:#0074d9;color:white;letter-spacing:1px;font-weight:bolder;font-family:sans-serif;font-size:large"><b>Log In</b></button>
                                 </td></tr>
                             
                             <tr>
                                 <td>
                                     <hr style="background-color:black">
                                 </td>
                             </tr>
                             
                             <tr>
                                 <td align="center">
                                     <p>New to e - SHOP ?<b><a href="./signup_page.php" style="color:green"> Create an account</a></b></p>
                                 </td>
                             </tr>
                             
                        </table>
                         
       
                    </form>
                        
            </div>
            </div>     
   

                            </div>
			
			</div>
                         
     
        </div>
       
          <footer > <?php include("footer.php"); ?></footer>    
       
    </body>
  
</html>