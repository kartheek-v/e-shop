<!DOCTYPE html>
<html>
    <head>
        <title>Addnewproduct</title>
        <meta name="viewport"  content=" width=device-width, intial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php
       //connect to db
$conn = mysqli_connect('localhost','root','','eshopdb');
//check connection
if(!$conn){
    echo 'connection success'. mysqli_connect_error();
       }
       if(isset($_POST['submit']))
       {
           $pid=$_POST['txt_pid'];
            $pname=$_POST['txt_pname'];
             $pprice=$_POST['txt_pprice'];
              $ptype=$_POST['txt_ptype'];
             $path="";
             $from=$_FILES['pimage']['tmp_name'];
             
             $to=$_SERVER['DOCUMENT_ROOT']."/e-shop/pimages/".$_FILES['pimage']['name'];
             move_uploaded_file($from, $to);
             $path="pimages/".$_FILES['pimage']['name'];
           $qry="insert into productmaster values('$pid','$pname','$pprice','$ptype','$path')";
           mysqli_query($conn, $qry);
       }
       
 
        ?>

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
                   
                         <h3 float="center"><b>Add New Product</b></h3>
                <form  method="POST" enctype="multipart/form-data">
                       
                        <table  align="center" style="margin:30px;width:400px;height:600px;" class="">
                           <tr><td align="left"><b>Product id</b></td></tr>
                            <tr>
                                <td><input type="text"class="input"  placeholder="MI123" name="txt_pid" "></td></tr>
                            
                            <tr><td align="left"><b>Name</b></td></tr>
                            <tr>
                                <td><input type="text"class="input"  placeholder="Redmi k20pro"name="txt_pname" "></td></tr>
                            
                            <tr><td align="left"><b>Price</b></td></tr>
                            <tr>
                                <td><input type="text"class="input " placeholder="25000"name="txt_pprice" ></td></tr>
                            <tr><td align="left"><b>Type</b></td></tr>
                            <tr>
                                <td><input type="text" class="input"placeholder="mobile" name="txt_ptype"\></td>
                                 <tr><td align="left"><b>Image</b></td></tr>
                                 <tr>
                                     <td>
                                         <input type="file" placeholder="" name="pimage"style="float:right;background-color:white;border-color:whitesmoke "class="input">
                                     </td>
                                 </tr>
                            <tr>
                            <td><button type="submit" class="btn-primary" name="submit" style="width:400px;margin-top:10px;letter-spacing:1px "><b>Submit</b></button></td></tr>
                        </table>
                        
                    </form>
                       
                            
                </div>
        </div>


