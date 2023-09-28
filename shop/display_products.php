<!DOCTYPE html>
<html>
<head>
    <title>Online Shopping</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Products</h1>
    <div class="product-container">
   
        <?php
      
        include('conn.php');
    
        $sql = "SELECT * FROM products";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product-card'>";
                echo "<img src='uploads/{$row["photo"]}' alt='{$row["name"]}'>";
                echo "<h2>{$row["name"]}</h2>";
              
                if($row["old_price" ] >0){
                    echo "<s><span style='color: red;'>Price: $" . number_format($row["old_price"], 2) . "</span></s>";


                }
                echo "<p>Price: $" . number_format($row["price"], 2) . "</p>";

           
                echo "<h2>{$row["catagories"]}</h2>";
                echo "<a href='dele.php?id={$row["id"]}' class='b'>Delete</a>";
                echo "<a href='edit.php?id={$row["id"]}' class='b'>Update</a>";
          
                echo "</div>";
               
               
            }
        } else {
            echo "No products available.";
        }

        $db->close();
        ?>
    </div>
 
</body>
</html>
