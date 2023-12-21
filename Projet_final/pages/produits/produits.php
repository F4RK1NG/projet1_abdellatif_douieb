<?php
include_once 'config/db.php';

$sql = "SELECT * FROM Produits";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des Produits</title>
</head>
<body>
    <h2>Liste des Produits</h2>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <h3><?php echo $row['nom']; ?></h3>
        <p>Description: <?php echo $row['description']; ?></p>
        <p>Prix: <?php echo $row['prix']; ?></p>
        <p>Stock: <?php echo $row['stock']; ?></p>
        <hr>
    <?php endwhile; ?>
</body>
</html>

