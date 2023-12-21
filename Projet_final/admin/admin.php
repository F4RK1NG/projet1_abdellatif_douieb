<?php
session_start();
include_once 'config/db.php';

if (!isset($_SESSION['id']) || ($_SESSION['role'] !== 'administrateur' && $_SESSION['role'] !== 'super-administrateur')) {
    header("Location: connexion.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_produit = $_POST['nom_produit'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO Produits (nom_produit, description, prix, stock) VALUES ('$nom_produit', '$description', '$prix', '$stock')";

    if (mysqli_query($conn, $sql)) {
        echo "Produit ajouté avec succès !";
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }
}
?>

<form method="POST" action="">
    <input type="text" name="nom_produit" placeholder="Nom du Produit" required><br>
    <textarea name="description" placeholder="Description" required></textarea><br>
    <input type="number" name="prix" placeholder="Prix" required><br>
    <input type="number" name="stock" placeholder="Stock" required><br>
    <input type="submit" value="Ajouter Produit">
</form>
