<!DOCTYPE html>
<html>
    <head>
        <title>Signup_page</title>
        <meta name="viewport"  content=" width=device-width, intial-scale=1">
            
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<style>
    .input{
        width:600px;
        border-radius:5px;
        height:40px; 
        border-color:whitesmoke; 
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
<script>
function checkEmail(){
     var email = document.getElementById("e1").value;
     var obj = new XMLHttpRequest();
     obj.open("get","checkEmail.php?txt_user_email="+email,true);
     obj.send();
     obj.onreadystatechange = function()
     {
         if(obj.readyState==4 && obj.status==200)
         {
  document.getElementById("r1").innerHTML =obj.responseText;
         }
     }
}
function validateForm() {
    var name = document.forms["signupForm"]["txt_user_name"].value;
    var email = document.forms["signupForm"]["txt_user_email"].value;
    var password = document.forms["signupForm"]["np"].value;
    var confirmPassword = document.forms["signupForm"]["cp"].value;

    if (name == "") {
        alert("Name must be filled out");
        return false;
    }

    if (email == "") {
        alert("Email must be filled out");
        return false;
    }

    if (password == "" and password.length()>5) {
        alert("Password must be filled out and minimum 5 characters required");
        return false;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match");
        return false;
    }


    return true;
}
</script>




	<?php 
        
  session_start();

        $msg="";
        if(isset($_POST['signup']))
        {
            
            $user_name=$_POST['txt_user_name'];
             $user_email=$_POST['txt_user_email'];
              $user_pwd=$_POST['txt_user_pwd'];
              $user_gender=$_POST['txt_user_gender'];
              $user_mobile=$_POST['txt_user_mobile'];
              $user_dob=$_POST['txt_user_dob'];
              $link= mysqli_connect("localhost","root","","eshopdb");
              $qry="insert into usermaster values(null,'$user_name','$user_email','$user_pwd','$user_gender',$user_mobile,'$user_dob')";
              mysqli_query($link,$qry);
              if(mysqli_affected_rows($link)>0){
             $msg="<font color='green';width:200px>Added success And Enjoy your shopping</font>";
             echo "<script> alert('Account Created'); window.location.href='index.php'</script>";
             
              
              }
              else{
              $msg ="<font color='red'>error...</font>";}
              mysqli_close($link);
            
        }
        ?>

    </head>
    <body style="background-color:#f0f2f5;">
	<div class="container-fluid">
		 <?php include("header.php"); ?>
         
            
            <div class="row">
                <div class="col-sm-12" style=" ">
                   <div class="row">
                <div class="col-sm-12" align="center" >
                    
                           <label><?php echo''.$msg?></label>                        
                    <form method="POST" name="signupForm" onsubmit="return validateForm()" action=""style="background-color:#38b6ff;padding:5px;border-radius: 5px;box-shadow: 5px 5px 6px -7px;width:700px;height:950px;margin-bottom:50px;margin-top:20px ">
                        <label>
                       
                    </label>
                        
                        <h3 float="center" style="font-family:gill, Helvetica, sans-serif ;letter-spacing:1px;word-spacing:1px"><b>Looks like you're new here!!</b></h3>
                        <h4 style="margin-top:10px;font-family:monospace;">Sign Up With Your Number</h4>
                        <table  align="center" style="margin:30px;width:400px;height:800px">
                            <tr><td align="left" style=""><b>Name</b></td></tr>
                            <tr>
                                <td><input type="text" name="txt_user_name" placeholder=" Username" class="input"required></td></tr>
                              <tr><td align="left" style=""><b>Phone</b></td></tr>
                            <tr>
                                <td><input type="text" name="txt_user_mobile" placeholder="Phone number" class="input" required></td></tr>
                            <tr><td align="left"><b>E-mail ID</b></td>
                            </tr>
                            <tr>
                                <td><input id="e1" onchange="checkEmail()" type="email" method="" name="txt_user_email"  placeholder=" User@gmail.com" class="input" required></td>
                                </tr><tr><td><label id="r1">
                                <?phpinclude 'checkEmail.php'?>
                                    </label></td></tr>
                            <tr><td align="left"><b>Password</b></td></tr>
                            <tr>
                                <td><input type="password" name="txt_user_pwd" id="np" placeholder=" User@12345" class="input" required=""></td></tr>
                            <tr><td align="left"><b>Confirm Password</b></td></tr>
                            <tr>
                                <td><input type="password"name="txt_user_pwd" id="cp" placeholder=" User@12345" class="input" required></td></tr>
                            <tr><p id="error"></p></tr>
                            <tr style="margin:5px"><td align="left" style="" required><b>Gender :</b>
                                
		  <label style="margin-left:50px"><input class="btn2" name="txt_user_gender"  type="radio"  value="male" /> Male</label>
               <label style="margin-left:40px"><input type="radio" name="txt_user_gender" value="female" /> Female</label>
		</td></tr>
                            <tr><td align="left"><b>Date of Birth</b></td></tr>
                            <tr>
                               <td><input type="date" name="txt_user_dob"class="input" ></td>
                            </tr>
                             <tr>
                                <td>
                                    <input type="checkbox"  style="margin-top:10px"><b style="width:500px"required> I accept all terms and conditons...</b>
                                </td>
                            </tr>
                            <tr>
                            <td><button type="submit" onsubmit=''class="btn-primary" name="signup" style="width:600px;margin-top:10px;letter-spacing:2px;border-radius:5px;height:50px;border-color:#0074d9;background-color: #0074d9;font-family:sans-serif;font-size:large"><b>Sign Up</b></button></td></tr>
                            <tr>
                               
                                     <td align="center">
                                     <p>Already have an account ? <b><a href="./login_page.php" style="color:green">Login Here</a></b></p>
                                 </td>
                                </td>
                            </tr>
                        </table>
                        
                    </form>
                       
                            
                </div>
        </div>

                    
              </div>
                    
                
            </div>
                            
                                
                          
			
			
      <?php include("footer.php"); ?>
        </div>
       
    </body>
</html>
