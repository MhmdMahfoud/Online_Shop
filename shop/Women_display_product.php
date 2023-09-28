<!DOCTYPE html>
<html>
<head>
    <title>Online Shopping</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="new_style.css">
</head>
<body>
    <h1>Products</h1>
    <div class="product-container">
        <?php
        include('conn.php');
        // $db = new mysqli("localhost", "root", "", "shopping_db;");

        // if ($db->connect_error) {
        //     die("Connection failed: " . $db->connect_error);
        // }

        $sql = "SELECT * FROM products";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
        
            
            while ($row = $result->fetch_assoc()) {
                if ($row["catagories"] == "women") {
                echo "<div class='product-card'>";
                echo "<img src='uploads/{$row["photo"]}' alt='{$row["name"]}'>";
                echo "<h2>{$row["name"]}</h2>";
                if($row["old_price" ] >0){
                
                    echo "<s><span style='color: red;'> $" . number_format($row["old_price"], 2) . "</span></s>";
                }
                    echo "<p> $" . number_format($row["price"], 2) . "</p>";
                // echo "<h2>{$row["catagories"]}</h2>";
              

                echo "</div>";
            }
        }
               
            }
         else {
            echo "No products available.";
        }

        $db->close();
        ?>
    </div>
 
</body>
</html>
