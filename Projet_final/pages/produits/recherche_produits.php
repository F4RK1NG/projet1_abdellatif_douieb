<?php
session_start();
include_once 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
    $search_term = mysqli_real_escape_string($conn, $_GET['search']);
    $sql = "SELECT * FROM produits WHERE nom_produit LIKE '%$search_term%'";
} else {
    $sql = "SELECT * FROM produits";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Recherche de Produits</title>
</head>
<body>
    <h2>Recherche de Produits</h2>
    <form method="GET" action="">
        <input type="text" name="search" placeholder="Rechercher...">
        <input type="submit" value="Rechercher">
    </form>
</body>
</html>
