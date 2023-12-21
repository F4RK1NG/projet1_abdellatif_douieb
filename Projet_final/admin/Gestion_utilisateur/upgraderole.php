<?php
session_start();
include_once '../config/db.php';

if (!isset($_SESSION['id']) || $_SESSION['role'] !== 'super-administrateur') {
    header("Location: ../connexion.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "UPDATE Utilisateurs SET role = 'administrateur' WHERE id = $user_id";

    if (mysqli_query($conn, $sql)) {
        echo "Rôle mis à niveau avec succès !";
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }
}
?>
