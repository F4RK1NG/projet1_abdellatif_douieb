<?php
session_start();
include_once 'config/db.php';

if (!isset($_SESSION['id'])) {
    header("Location: connexion.php");
    exit();
}

$user_id = $_SESSION['id'];

$sql = "SELECT * FROM Utilisateurs WHERE id = '$user_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_nom = $_POST['new_nom'];
    $new_prenoms = $_POST['new_prenoms'];
    $new_adresse = $_POST['new_adresse'];

    $update_query = "UPDATE Utilisateurs SET nom = '$new_nom', prenoms = '$new_prenoms', adresse = '$new_adresse' WHERE id = '$user_id'";

    if (mysqli_query($conn, $update_query)) {
        $message = "Informations mises à jour !";
    } else {
        $message = "Erreur lors de la mise à jour : " . mysqli_error($conn);
    }
}
?>

<form method="POST" action="">
    <input type="text" name="new_nom" value="<?php echo $row['nom']; ?>" required><br>
    <input type="text" name="new_prenoms" value="<?php echo $row['prenoms']; ?>" required><br>
    <input type="text" name="new_adresse" value="<?php echo $row['adresse']; ?>" required><br>
    <input type="submit" value="Mettre à jour">
</form>
