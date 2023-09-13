<!DOCTYPE html>
<html>
    <head>
        <title>Change_password</title>
        <meta name="viewport"  content=" width=device-width, intial-scale=1">
            
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<style>
  
    input{
        text-align:center;
    }
    table{
        font-family:Red/Black, sans-serif;
    }
    body{
            overflow-x:hidden;
        }
    
</style>
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("location: login_page.php");
    exit;
}

?>
		

    </head>
    <body style="background-color:#f0f2f5;">
	<div class="container-fluid">
		 <?php include("header.php"); ?>
           
    <div class="row">
    
                <div class="col-sm-12" align="center" style="height:600px" >
                            
                        
                    
                
                    <form  method="POST" action="change_p.php" style="align-content:center; height:500px;width:800px;margin-bottom:20px ;margin-top:30px;background-color:#38b6ff;border-radius:5px; box-shadow:5px 5px 6px -7px;padding:5px;align-content:center;">
                         <h2 align="center" style="margin-top:20px;">Change Password !</h2>
                        
                        <table style=" margin-top:30px;padding:5px;height:300px;;font-size:large" align="center">
                            <tr style="align:center">
                                  <?php if (isset($_GET['error'])) { ?>
                            <p class="error" style="color:#cc0000;font-weight:bold;font-family:serif;font-size:20px"> <?php  echo $_GET['error']; ?></p>
                                <?php } ?><!-- error for display -->
                                <?php if (isset($_GET['success'])) { ?>
                                <p class="error" style="color:#990099;font-weight:bold;font-family:serif;font-size:20px"> <?php  echo $_GET['success']; ?></p>
                                <?php } ?><!-- error for display -->
                            </tr>
                                    <tr><td>
                                Current Password
                                </td></tr>    
                            
                                    <tr><td><input type="password" class="input" name="current_password" placeholder="Current Password" style="text-align:left;width:500px;height:50px;margin:1px;border-radius:5px;border-color:whitesmoke;"></td></tr>
                                    <tr>
                                        <td>
                                            New Password
                                        </td>
                                    </tr>
                             <tr><td><input type="password" class="input" name="new_password"placeholder="New Password"style="  text-align:left;width:500px;height:50px;margin:1px;border-radius:5px;border-color:whitesmoke;"></td></tr>
                             <tr><td style="align:center"><button type="submit" style="width:500px;height:60px;margin:10px;margin-left:5px;border-radius:8px;border-color:#0074d9;background-color:#0074d9;color:white;letter-spacing:1px;font-weight:bolder;font-family:sans-serif;font-size:large"><b>Submit</b></button>
                                 </td></tr>
                            
                        </table><!-- comment -->
                    </form>                             
    </div><!-- comment -->
    <div>
        
    </div>
                </div>
            </div>
             
               	
            	
     
            </div>
      
    </body>
    <<footer><?php include("footer.php"); ?></footer>
</html>

