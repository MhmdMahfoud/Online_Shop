<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $old_price = $_POST["old_price"];
    // $sizes = $_POST["sizes"]; // This will be an array of sizes
    $catagories = $_POST["catagories"];

    $uploadDir = "uploads/";
    $photoName = $_FILES["photo"]["name"];
    $targetFile = $uploadDir . $photoName;

    move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile);

    include('conn.php');
    

    // Convert the sizes array to a comma-separated string
   

    $sql = "INSERT INTO products (name, price, old_price,  photo, catagories) VALUES (?, ?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("sddss", $name, $price, $old_price,  $photoName, $catagories);

    if ($stmt->execute()) {
        header('location: display_products.php'); // Assuming your display page is named "display_products.php"
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $db->close();
}
?>
