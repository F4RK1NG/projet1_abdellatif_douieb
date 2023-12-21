<?php
session_start();
include_once 'includes/config.php';

if (!isset($_SESSION['id'])) {
    header("Location: connexion.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save_addresses'])) {
    $billing_address = mysqli_real_escape_string($conn, $_POST['billing_address']);
    $shipping_address = mysqli_real_escape_string($conn, $_POST['shipping_address']);

    $user_id = $_SESSION['id'];
    $sql = "UPDATE utilisateurs SET adresse_facturation = '$billing_address', adresse_livraison = '$shipping_address' WHERE id_utilisateur = '$user_id'";
    if (mysqli_query($conn, $sql)) {
        $message = "Adresses mises à jour avec succès!";
    } else {
        $error_message = "Erreur lors de la mise à jour des adresses: " . mysqli_error($conn);
    }
}

$user_id = $_SESSION['id'];
$sql = "SELECT adresse_facturation, adresse_livraison FROM utilisateurs WHERE id_utilisateur = '$user_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$billing_address = $row['adresse_facturation'];
$shipping_address = $row['adresse_livraison'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Adresses de Paiement et de Livraison</title>
</head>
<body>
    <h2>Adresses de Paiement et de Livraison</h2>

    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php elseif (isset($error_message)) : ?>
        <p><?php echo $error_message; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label for="billing_address">Adresse de Facturation:</label><br>
        <textarea name="billing_address" id="billing_address"><?php echo $billing_address; ?></textarea><br>

        <label for="shipping_address">Adresse de Livraison:</label><br>
        <textarea name="shipping_address" id="shipping_address"><?php echo $shipping_address; ?></textarea><br>

        <input type="subm
