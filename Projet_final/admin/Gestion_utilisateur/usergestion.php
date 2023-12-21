<?php
session_start();
include_once '../config/db.php';

if (!isset($_SESSION['id']) || ($_SESSION['role'] !== 'administrateur' && $_SESSION['role'] !== 'super-administrateur')) {
    header("Location: ../connexion.php");
    exit();
}

$sql = "SELECT * FROM Utilisateurs";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestion des Utilisateurs</title>
</head>
<body>
    <h2>Gestion des Utilisateurs</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Rôle</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['role']; ?></td>
                <td>
                    <?php if ($_SESSION['role'] === 'super-administrateur' || ($row['role'] !== 'super-administrateur' && $row['role'] !== 'administrateur')) : ?>
                        <a href="upgrade_role.php?id=<?php echo $row['id']; ?>">Mettre à niveau</a> |
                        <a href="suppression_utilisateur.php?id=<?php echo $row['id']; ?>">Supprimer</a>
                    <?php endif; ?>
         
