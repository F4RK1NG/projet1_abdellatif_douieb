<?php
include_once('./config/db.php');

$message = ''; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nom = $_POST['nom'];
    $prenoms = $_POST['prenoms'];
    $adresse = $_POST['adresse'];

    $check_query = "SELECT * FROM User WHERE user_name = '$username'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        $message = "Ce nom d'utilisateur est déjà utilisé.";
    } else {
        $password_hash = password_hash($password, PASSWORD_DEFAULT); 

        $insert_query = "INSERT INTO User (user_name, pwd, lname, fname, shipping_address_id) VALUES ('$username', '$password_hash', '$nom', '$prenoms', '$adresse')";

        if (mysqli_query($conn, $insert_query)) {
            $message = "Inscription réussie !";
        } else {
            $message = "Erreur lors de l'inscription : " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Inscription</h2>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Nom d'utilisateur" required><br>
        <input type="password" name="password" placeholder="Mot de passe" required><br>
        <input type="text" name="nom" placeholder="Nom" required><br>
