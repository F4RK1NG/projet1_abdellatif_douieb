<?php
include_once 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_produit'])) {
    $product_id = mysqli_real_escape_string($conn, $_GET['id_produit']);
    $sql = "SELECT * FROM produits WHERE id_produit = $product_id";
} else {
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Détails du Produit</title>
</head>
<body>
</body>
</html>
