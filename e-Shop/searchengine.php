<!DOCTYPE html>
<html>
<head>
    <title>search Engine</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
       <?php
  session_start();
  if(!isset($_SESSION['user_id'])){
      header("location:login_page.php");
  }
?>

    <style>
        body{
            overflow-x:hidden;
        }
      
    </style>
    
</head>
<body>
    <?php
 include './header.php';
 ?>
    <?php
if(isset($_POST['btnsearch'])) {
    $pname = $_POST['txt_search'];
    $conn = mysqli_connect("localhost", "root", "", "eshopdb");
    $qry = "SELECT * FROM productmaster WHERE pname LIKE '%$pname%'";
    $result = mysqli_query($conn, $qry);

    if (mysqli_num_rows($result) > 0) {
        echo "<div class='row'>"; // Start a new row
        while ($r = mysqli_fetch_array($result)) {
            echo "<div class='col-sm-3'>";
            echo "<div class='panel panel-default product-panel'>";
            echo "<div class='panel-body product-image'>";
            echo "<img src='$r[4]' class='img-responsive center-block' alt='$r[1]' width='150px' height='100px'>";
            echo "</div>";
            echo "<div class='panel-body product-details'>";
            echo "<h4 class='text-center product-name'>$r[1]</h4>";
            echo "<p class='text-center product-price'>Price: $r[2]</p>";
            echo "<p class='text-center'><a href='product_details.php?pid=$r[0]' class='btn btn-primary'>More Details</a></p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>"; // End the row
    } else {
        echo "No products found.";
    }
}
?>
<footer><?php include './footer.php';?></footer>
</body>
</html>
