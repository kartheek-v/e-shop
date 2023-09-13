<!DOCTYPE html>
<html>
    <head>
        <title>user</title>
        <meta name="viewport"  content=" width=device-width, intial-scale=1">
            
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<style>
    input{
        text-align:center;
    }
    body{
            overflow-x:hidden;
        }
  
    
</style>
	<?php
  session_start();
  if(!isset($_SESSION['user_id'])){
      header("location:login_page.php");
  }
 
?>	

    </head>
    <body style="background-color:#f0f2f5">
	<div class="container-fluid">
		 <?php include("header.php"); ?>
                   		
          
			<div class="row">
                            <div class="col-sm-12" style="height:700px">
                                <h1 align="center">No Fashion Products Here</h1>
                            </div>
			
			</div>
      
        </div>
       
    </body>
    <footer><?php include("footer.php"); ?></footer>
</html>