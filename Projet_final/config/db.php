<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom1_project";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("La connexion a échoué : " . mysqli_connect_error());
}
?>
