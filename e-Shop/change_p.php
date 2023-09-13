<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("location: login_page.php");
    exit;
}
?>
<?php
    $host="localhost";
    $username="root";
    $password="";
    $db="eshopdb";
     $conn = new mysqli($host,$username,$password,$db);
     if($conn -> connect_error){
         die("Connection failed:".$conn->connect_error);
     }
     
     $oldp=$_POST['current_password'];
     $newp=$_POST['new_password'];
     $id=$_SESSION['user_id'];
     if(empty($oldp)){
         header("Location:change_password.php?error=Current password is required");
         exit();
     }else if(empty($newp)){
         header("Location:change_password.php?error=New password is required ");
         exit();
     }else if($oldp == $newp){
         header("Location:change_password.php?error= Try new Password it is same as Old 😫");
     }else{
         $sql="SELECT user_pwd FROM usermaster WHERE user_id='$id' AND user_pwd='$oldp'";
         $result= mysqli_query($conn, $sql);
         if(mysqli_num_rows($result)===1){
             $sql_2="UPDATE usermaster SET user_pwd ='$newp' WHERE user_id='$id'";
             mysqli_query($conn, $sql_2);
            header("Location:change_password.php?success= Your password is Changed 🔐");
         exit(); 
         }else{
             header("Location:change_password.php?error= Incorrect Current password 😫");
         exit();
         }
               
     }