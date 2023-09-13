<?php
$email=$_GET['txt_user_email'];
$conn=mysqli_connect("localhost","root","","eshopdb");
$qry="select *from usermaster where user_email='$email'";
$result= mysqli_query($conn, $qry);
if(mysqli_num_rows($result)>0)
    echo "<font color='red'>Already Taken!!!!</font>";

 else 
     echo "<font color='green'>Available!!!!</font>";

mysqli_close($conn);
?>
