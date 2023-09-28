<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include('conn.php'); 

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    if (isset($_GET['confirm']) && $_GET['confirm'] === 'true') {
        mysqli_query($db, "DELETE FROM products WHERE id='$id'");
        header('Location: display_products.php');
        exit();
    } else {
        // Display a confirmation alert to ask the user
        echo '<script>
            var confirmed = confirm("Are you sure you want to delete this item?");
            if (confirmed) {
                window.location.href = "dele.php?id=' . $id . '&confirm=true";
            } else {
                window.location.href = "display_products.php";
            }
        </script>';
    }
} else {
    echo "Invalid request.";
}
?>
