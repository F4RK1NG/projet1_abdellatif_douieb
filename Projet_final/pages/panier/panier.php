<?php
session_start();
include_once 'config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Panier</title>
    <style>
        /* Ajoutez votre CSS ici */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        main {
            padding: 20px;
        }

        .cart-items {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px 0;
            background-color: #fff;
        }

        .item {
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
            display: flex;
            align-items: center;
        }

        .item img {
            width: 100px;
            height: 100px;
            margin-right: 20px;
        }

        .total {
            text-align: right;
            margin-top: 20px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Votre Panier</h1>
    </header>

    <main>
        <section class="cart-items">
            <h2>Contenu de votre panier :</h2>
            <div class="item">
                <img src="./images/hash.png" alt="Article 1">
                <h3>HASH</h3>
                <p>HASH</p>
                <p>Prix : $99.99</p>
            </div>

            <div class="total">
                <h3>Total : $99.99</h3>
            </div>

            <button>Valider la commande</button>
        </section>
    </main>

    <footer>
        <p>Votre contenu de pied de page ici.</p>
    </footer>
</body>
</html>
