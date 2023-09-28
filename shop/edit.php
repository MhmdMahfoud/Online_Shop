<?php
include('conn.php');
$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = '$id'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Mangment</title>
    

</head>

<body>
    <h2 >Edit</h2>
    <form method="POST" action="update.php?id=<?php echo $id; ?>">
    <div class="s">
        <label>name:</label><br><input type="text" value="<?php echo $row['name']; ?>" name="name"><br>
        <label>old_PRICE   </label><br><input type="number" value="<?php echo $row['old_price']; ?>" name="old_price"><br>
        <label>price</label><br><input type="number" value="<?php echo $row['price']; ?>" name="price"><br>
        <label>catagories</label><br><input type="text" value="<?php echo $row['catagories']; ?>" name="catagories"><br>
       
        <input type="submit" name="submit"><br>
    </div>
    
    </form>
</body>

</html>