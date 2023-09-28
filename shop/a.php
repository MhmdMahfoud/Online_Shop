<!DOCTYPE html>
<html>
<head>
    <title>Online Shopping</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
            /* body {
  background-image: "C:\wamp64\www\shop\backg\y.jpg";
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    } */
        </style>
</head>
<body>
    <h1>Add a Product</h1>
    <form action="add_product.php" method="post" enctype="multipart/form-data">
        <label for="name">Product Name:</label>
        <input type="text" name="name" required><br>

        <label for="old_price">Old Price:</label>
        <input type="number" name="old_price" step="0.01"><br>

        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" required><br>

        <label for="sizes">Available Sizes:</label>
<!-- <div id="sizes-container">
    <input type="text" name="sizes[]" placeholder="Size 1">
</div>
<button type="button" id="add-size">Add Size</button>
 -->


        <label for="catagories">Categories:</label>
        <select name="catagories" style="width: 100%;">
            <option value="men">Men</option>
            <option value="women">Women</option>
            <option value="kids">Kids</option>
        </select><br>

        <label for="photo">Product Photo:</label>
        <input type="file" name="photo" accept="image/*" required><br>

        <input type="submit" value="Add Product">
    </form>
</body>
</html>
