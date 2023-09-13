<!DOCTYPE html>
<html>
    <head>
        <title>TV Specification Page</title>
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
       height:1050px; 
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
        height:1000px;
        
    }
</style>
<?php

 $conn=mysqli_connect('localhost','root','','eshopdb');
 if(isset($conn)){
     echo 'Connection success'. mysqli_connect_error();
 }else{
     echo'Connection Failed'. mysqli_connect_errno();
 }
 if(isset($_POST['upload'])){
 $pid=$_POST['pid'];
 $In_The_Box=$_POST['inbox'];
 $color=$_POST['color'];
 $display_size=$_POST['Displaysize'];
 $screen_type=$_POST['sctype'];
 $hd_tech_res=$_POST['hdtech'];
 $smart_tv=$_POST['smtv'];
 $motion_sensor=$_POST['mtsc'];
 $hdmi=$_POST['hdmi'];
 $usb=$_POST['usb'];
 $built_in_wifi=$_POST['btwifi'];
 $lunch_year=$_POST['lunchyear'];
 $wall_mount=$_POST['wall'];
 $qry="INSERT INTO tv_specification VALUES('$pid','$In_The_Box','$color','$display_size','$screen_type','$hd_tech_res','$smart_tv','$motion_sensor','$hdmi','$usb','$built_in_wifi','$lunch_year','$wall_mount')";
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
                   
                    <h3 float="center"><b>TV Specification!</b></h3>
                    <form method="post" action="">
                       
                        <table  align="center" style="">
                           
                             
                             <tr><td><b>IN The Box</b>
                                <textarea type="text" placeholder="" name="inbox" style="height:100px;width:400px "></textarea></td>
                            </tr>
                            <tr><td align="left"><b>Product Id</b></td></tr>
                            <tr>
                                <td><input type="text" name="pid" placeholder="PM18000" class="input"></td></tr>
                            <tr><td align="left"><b>Color</b></td></tr>
                            <tr>
                                <td><input type="text" name="color" placeholder="color" class="input"></td></tr>
                            <tr><td align="left"><b>Display Size</b></td></tr>
                            <tr>
                                <td><input type="text" name="Displaysize" placeholder="15-Inch" class="input"></td></tr>
                            <tr><td align="left"><b>Screen Type</b></td></tr>
                            <tr>
                                <td><input type="text" name="sctype" placeholder="Screen Type" class="input"></td></tr>
                            <tr><td align="left"><b>HD Technology & Resolution</b></td></tr>
                            <tr>
                                <td><input type="text" name="hdtech" placeholder="Screen Type" class="input"></td></tr>
                            <tr style="margin:5px"><td align="left" style=""><b>Smart TV :</b>
                                
		  <label style="margin-left:90px"><input class="btn2" type="radio" name="smtv" value="yes" /> Yes</label>
               <label style="margin-left:40px"><input type="radio" name="smtv" value="no"/> No</label>
		</td></tr>
                          <tr style="margin:5px"><td align="left" style=""><b>Motion Sensor:</b>
                                
		  <label style="margin-left:54px"><input class="btn2" type="radio" name="mtsc" value="Yes" /> Yes</label>
               <label style="margin-left:40px"><input type="radio" name="mtsc" value="Yes"/> No</label>
		</td></tr>
                         <tr><td align="left"><b>HDMI</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="HDMI" name="hdmi" class="input"></td></tr>
                            <tr><td align="left"><b>USB</b></td></tr>
                            <tr>
                                <td><input type="text" placeholder="8.0" name="usb" class="input"></td></tr> 
                             <tr style="margin:5px"><td align="left"  style=""><b>Bulit In Wifi :</b>
                                
		  <label style="margin-left:90px"><input class="btn2" type="radio" name="btwifi" value="Yes" /> Yes</label>
               <label style="margin-left:40px"><input type="radio" name="btwifi" value="No"/> No</label>
		</td></tr>
                             <tr>
                                 <td align="left"><b>Lunch Year</b>   
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     <input type="date" name="lunchyear" class="input">
                                 </td>
                             </tr>
                              <tr style="margin:5px"><td align="left" style=""><b>Wall mount included:</b>
                                
		  <label style="margin-left:90px"><input class="btn2" type="radio" name="wall" value="Yes" /> Yes</label>
               <label style="margin-left:40px"><input type="radio" name="wall" value="No"/> No</label>
		</td></tr>
                             <tr>
                            <td><button type="submit" class="btn-primary" name="upload" style=" "><b>Submit</b></button></td></tr>
                        </table>
                        
                    </form>
                       
                            
                </div>
        </div>


