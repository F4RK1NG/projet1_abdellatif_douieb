<?php
session_start();
include_once './config/db.php'; 

$message = ''; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, mot_de_passe FROM Utilisateurs WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row && password_verify($password, $row['mot_de_passe'])) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $message = "Connexion réussie !";
        header("Location: profil.php");
        exit();
    } else {
        $message = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <style>
        /* Styles pour la page de connexion */
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
    <h2>Connexion</h2>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Nom d'utilisateur" required><br>
        <input type="password" name="password" placeholder="Mot de passe" required><br>
        <input type="submit" value="Se connecter">
    </form>
    <p><?php echo $message; ?></p>
</body>
</html>

