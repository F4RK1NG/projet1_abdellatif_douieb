<?php
session_start();
include_once 'includes/config.php';

if (!isset($_SESSION['id'])) {
    header("Location: connexion.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm_order'])) {

    $user_id = $_SESSION['id'];

    $total_amount = 100;}

    $sql = "INSERT INTO commandes (id_utilisateur, montant_total) VALUES ('$user_id', '$total_amount')";
    if (mysqli_query($conn, $sql)) {
        $message = "Commande confirmée avec succès!";}
