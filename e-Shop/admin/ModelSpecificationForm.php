<!DOCTYPE html>
<html>
    <head>
        <title>Model Specification Page</title>
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
        width:700px;
        height:1750px; 
        margin-bottom:50px; 
    }
    button{
        border-radius:5px;
        height:50px;
        width:500px;
        border-color:blue;
        margin-top:10px;
        letter-spacing:1px;
    }
    .input{
        width:500px;
        border-radius:5px;
        height:35px; 
        border-color:whitesmoke; 
    }
    table{
        margin-top:5px; 
        width:500px;
        height:1700px;
        
    }
</style>
<?php
 $conn=mysqli_connect('localhost','root','','eshopdb');
 
 ?>
		
    </head>
    <body style="background-color:#f0f2f5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" align="center" >
                   
                         <h3 float="center"><b>Model Specification Form</b></h3></legend>
                    <form method="POST" action="mobilespec.php" >
                       
                        <table  align="center">
                            <tr><td align="left"><b>Product Id</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="Pro6794" class="input" name="pid" required></td></tr>
                            <tr><td align="left"><b>Operating System</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="Android" class="input" name="os" required></td></tr>
                            <tr><td align="left"><b>Processor Type</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="dual Core" class="input" name="processor" required></td></tr>
                            <tr><td align="left"><b>Color</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="Red" class="input" name="color" required></td>
                                 <tr><td align="left"><b>SIM Type</b></td></tr>
                                 <tr>
                                     <td>
                                         <input type="text" placeholder="GSM" class="input" name="sim_type" required>
                                     </td>
                                 </tr>
                                   <tr><td align="left"><b>Display Size</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="15 Inch" class="input" name="display_size" required></td></tr>
                            
                                 <tr><td align="left"><b>Internal Storage</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="32GB" class="input" name="internal_storage" required></td></tr>
                             <tr><td align="left"><b>Ram</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="4GB" class="input" name="ram" required></td></tr>
                             <tr><td align="left"><b>Primary camera</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="13MP"  name="primary_camera" class="input" required></td>
                            </tr>
                              <tr><td align="left"><b>Secondary camera</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="18MP" name="secondary_camera" class="input"required></td>
                            </tr>
                              <tr><td align="left"><b>Network Type</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="Network Type" name="network_type" class="input"required></td>
                            </tr>
                              <tr><td align="left"><b>Battary Capacity</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="6000mh" name=" battery_capacity" class="input" required></td>
                            </tr>
                              
                            
                              
                      
                              <tr><td align="left"><b>Warranty Summary</b></td></tr>
                            <tr>
                                <td><textarea type="text" placeholder="" name="warrenty_summary" class="input" style="height:100px"required></textarea></td>
                            </tr>
                            <tr>
                            <td><button type="submit" class="btn-primary" ><b>Submit</b></button></td></tr>
                        </table>
                        
                    </form>
                       
                            
                </div>
        </div>




