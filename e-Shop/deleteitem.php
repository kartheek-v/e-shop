<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: login_page.php");
    exit();
}

if(isset($_GET['id'])){
    $user_id=$_SESSION['user_id'];
    $id = $_GET['id'];
    $conn = mysqli_connect('localhost', 'root', '', 'eshopdb');
    $delete_query = "DELETE FROM cart WHERE id = '$id' AND user_id='$user_id'";
    mysqli_query($conn, $delete_query);
   
    header("location: mycart.php");
    exit();
} else {
    echo "Invalid request.";
}
?>
