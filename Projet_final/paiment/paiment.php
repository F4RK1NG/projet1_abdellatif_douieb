<?php
session_start();
include_once 'includes/config.php';

if (!isset($_SESSION['id'])) {
    header("Location: connexion.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['payer'])) {
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Paiement avec PayPal</title>
</head>
<body>
    <h2>Paiement avec PayPal</h2>

    <div>
    </div>

    <form method="POST" action="">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="votre_email_paypal">
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="item_name" value="Nom du produit">
        <input type="hidden" name="amount" value="Montant">
        <input type="submit" name="payer" value="Payer avec PayPal">
    </form>
</body>
</html>
