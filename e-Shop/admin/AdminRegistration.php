<!DOCTYPE html>
<html>
    <head>
        <title>Admin Registration</title>
        <meta name="viewport"  content=" width=device-width, intial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    form{
        background-color:#38b6ff;
        padding:5px;
        border-radius: 5px;
        box-shadow: 5px 5px 6px -7px;
        width:600px;
       
        margin-bottom:50px; 
    }
    button{
        border-radius:5px;
        height:50px;
        width:500px;
        border-color:blue;
    }
    .input{
        width:400px;
        border-radius:5px;
        height:35px; 
        border-color:whitesmoke; 
    }
</style>
		
    </head>
    <body style="background-color:#f0f2f5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" align="center" >
                   
                         <h3 float="center"><b>Welcome to Admin Registration Page !</b></h3></legend>
                    <form action="">
                       
                        <table  align="center" style="margin:30px;width:400px;height:650px"><tr><td align="left" style=""><b>Name</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder=" Username" class="input"></td></tr>
                            <tr><td align="left"><b>E-mail ID</b></td></tr>
                            <tr>
                                <td><input type="email" placeholder=" User@gmail.com" class="input"></td></tr>
                            <tr><td align="left"><b>Password</b></td></tr>
                            <tr>
                                <td><input type="password" placeholder=" User@12345" class="input"></td></tr>
                            <tr><td align="left"><b>Confirm Password</b></td></tr>
                            <tr>
                                <td><input type="password" placeholder=" User@12345" class="input"></td></tr>
                            <tr style="margin:5px"><td align="left" style=""><b>Gender :</b>
                                
		  <label style="margin-left:50px"><input class="btn2" type="radio" name="gender" value="male" /> Male</label>
               <label style="margin-left:40px"><input type="radio" name="gender" value="female"> Female</label>
		</td></tr>
                            <tr><td align="left"><b>Date of Birth</b></td></tr>
                            <tr>
                                <td><input type="date" class="input"palceholder="dd-mm-yyyy" style="width:400px;margin-top:1px"></td></tr>
                             <tr><td align="left"><b>Role</b></td></tr>
                             <tr><td>
                                <select name = "text" class="input">
                        
                         <option value = "User" selected="">User</option>
                        <option value = "Admin" selected="">Admin</option>
                        <option value = "Role" selected=""> Select Role</option>
                      
                        
                                </select></td>
         
                             </tr>
                             <tr>
                                <td>
                                    <input type="checkbox" value="confirm" name="confrim" style="margin-top:10px"><b> I accept all terms and conditons...</b>
                                </td>
                            </tr>
                             
                           
                            <td><button type="submit" class="btn-primary" style="width:400px;margin-top:10px;letter-spacing:1px "><b>Submit</b></button></td></tr>
                        </table>
                        
                    </form>
                       
                            
                </div>
        </div>

