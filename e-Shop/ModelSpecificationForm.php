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
 if(isset($conn)){
     echo 'Connection success'. mysqli_connect_error();
 }else{
     echo'Connection Failed'. mysqli_connect_errno();
 }
 if(isset($_POST['submit'])){
 $pid=$_POST['pid'];
 $os=$_POST['os'];
 $processor=$_POST['processor'];
 $color=$_POST['color'];
 $display_size=$_POST['display_size'];
 $internal_storage=$_POST['internal_storage'];
 $ram=$_POST['ram'];
 $primary_camera=$_POST['primary_camera'];
 $secondary_camera=$_POST['secondary_camera'];
 $network_type=$_POST['network_type'];
 $battery_capacity=$_POST['battery_capacity'];
 $warrenty_summary=$_POST['warrenty_summary'];
 $qry="INSERT INTO mobilespecification values('$pid','$os','$processor','$color','$display_size','$internal_storage','$ram','$primary_camera','$secondary_camera','$network_type','$battery_capacity','$warrenty_summary')";
 mysqli_query($conn, $qry);
 echo 'successfully Inserted';
 } else {
     echo 'Unsuccessfull';
 }
 
 ?>
		
    </head>
    <body style="background-color:#f0f2f5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" align="center" >
                   
                         <h3 float="center"><b>Model Specification Form</b></h3></legend>
                    <form method="POST"  >
                       
                        <table  align="center">
                            <tr><td align="left"><b>Product Id</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="Pro6794" class="input" name="pid"></td></tr>
                            <tr><td align="left"><b>Operating System</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="Android" class="input" name="os"></td></tr>
                            <tr><td align="left"><b>Processor Type</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="dual Core" class="input" name="processor"></td></tr>
                            <tr><td align="left"><b>Color</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="Red" class="input" name="color"></td>
                            </tr>
                                
                                   <tr><td align="left"><b>Display Size</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="15 Inch" class="input" name="display_size"></td></tr>
                            
                                 <tr><td align="left"><b>Internal Storage</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="32GB" class="input" name="internal_storage"></td></tr>
                             <tr><td align="left"><b>Ram</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="4GB" class="input" name="ram"></td></tr>
                             <tr><td align="left"><b>Primary camera</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="13MP"  name="primary_camera" class="input"></td>
                            </tr>
                              <tr><td align="left"><b>Secondary camera</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="18MP" name="secondary_camera" class="input"></td>
                            </tr>
                              <tr><td align="left"><b>Network Type</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="Network Type" name="network_type" class="input"></td>
                            </tr>
                              <tr><td align="left"><b>Battary Capacity</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="6000mh" name="battery_capacity" class="input"></td>
                            </tr>       
                              <tr><td align="left"><b>Warranty Summary</b></td></tr>
                            <tr>
                                <td><textarea type="text" placeholder="" name="warrenty_summary" class="input" style="height:100px"></textarea></td>
                            </tr>
                            <tr>
                                <td><button type="submit" name="submit" class="btn-primary" ><b>Submit</b></button></td></tr>
                        </table>
                        
                    </form>
                       
                            
                </div>
        </div>




