
<?php
include('conn.php');
$id = $_GET['id'];

$name = $_POST['name'];
$old_price = $_POST['old_price'];
$price = $_POST['price'];
$catagories = $_POST['catagories'];


mysqli_query($db, "update `products` set name='$name', old_price='$old_price',price='$price',catagories='$catagories' where id='$id'");

// header('location:primary.php');
?>