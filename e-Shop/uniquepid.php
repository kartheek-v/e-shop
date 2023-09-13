<?php
$pid=$_GET['txt_pid'];
$conn=mysqli_connect("localhost","root","","eshopdb");
$qry="SELECT *FROM productmaster WHERE pid='$pid'";
$result= mysqli_query($conn, $qry);
if(mysqli_num_rows($result)>0)
    echo "<font color='red'>Try Unique product Id 😫</font>";

 else 
     echo "<font color='green'>Available 😀</font>";

mysqli_close($conn);
?>
