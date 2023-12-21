<?php
session_start();
include_once 'includes/config.php';

if (!isset($_SESSION['id'])) {
    header("Location: connexion.php");
    exit();
}

if ($_SESSION['role'] === 'administrateur') {
    $sql = "SELECT * FROM commandes ORDER BY date_commande DESC";
} else {
    $user_id = $_SESSION['id'];
    $sql = "SELECT * FROM commandes WHERE id_utilisateur = $user_id ORDER BY date_commande DESC";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Consultation des Commandes</title>
</head>
<body>
    <h2>Consultation des Commandes</h2>

    <?php if (mysqli_num_rows($result) > 0) : ?>
        <table>
            <tr>
                <th>Référence Commande</th>
                <th>Date Commande</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?php echo $row['reference_commande']; ?></td>
                    <td><?php echo $row['date_commande']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else : ?>
        <p>Aucune commande trouvée.</p>
    <?php endif; ?>

    <?php if ($_SESSION['role'] === 'administrateur') : ?>
        <form method="GET" action="">
            <input type="text" name="ref_commande" placeholder="Référence Commande">
            <input type="submit" value="Rechercher">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['ref_commande'])) {
            $ref_commande = $_GET['ref_commande'];
            $sql = "SELECT * FROM commandes WHERE reference_commande LIKE '%$ref_commande%' ORDER BY date_commande DESC";
            $result = mysqli_query($conn, $sql);
        }
        ?>
    <?php endif; ?>
</body>
</html>
