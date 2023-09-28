
<?php
$db = new mysqli("localhost", "root", "", "shopping_db;");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>