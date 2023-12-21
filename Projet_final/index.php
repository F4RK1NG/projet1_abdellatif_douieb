<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dopamine.</title>
    <style>
header {
    background-color: #000;
    padding: 20px 0;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    color: #fff; /* Couleur du texte en blanc */
}

header h1 {
    margin: 0;
    font-size: 2em;
}

/* Style pour la barre de recherche */
.search-bar {
    margin: 20px 0;
}

.search-bar input[type="text"] {
    padding: 10px;
    width: 300px;
    border-radius: 25px;
    border: 1px solid #ccc;
}

.search-bar button {
    padding: 10px 20px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.search-bar button:hover {
    background-color: #2980b9;
}
.btn {
    display: inline-block;
    padding: 10px 20px;
    text-decoration: none;
    background-color: #3498db;
    color: #fff;
    border-radius: 25px;
    margin-right: 10px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #2980b9;
}

    </style>
</head>
<body>
    <header>
        <h1>Dopamine</h1>
        <div class="search-bar">
            <a href="./produits/recherche_produit.php" class="btn">Rechercher</a>
            <input type="text" placeholder="Rechercher des produits...">
        </div>
        <div>
            <a href="./pages/authentification/inscription.php" class="btn">S'Inscrire</a>
            <a href="./pages/authentification/connexion.php" class="btn">Se Connecter</a>
            <a href="./pages/panier/panier.php" class="btn">Votre panier</a>

        </div>
    </header>

    <main>
    <!DOCTYPE html>
<html>
<head>
    <title>Liste des Produits</title>
    <style>
        h2 {
            text-align: center;
            font-size: 24px;
            color: #333;
        }

        .products-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .product {
            width: 250px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
            background-color: #f9f9f9;
        }

        .product img {
            width: 200px;
            height: 150px;
            margin-bottom: 10px;
        }

        .product h3 {
            font-size: 18px;
            color: #333;
            margin-bottom: 5px;
        }

        .product p {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }
        .add-to-cart-btn {
             padding: 10px 20px;
             font-size: 16px;
             background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.add-to-cart-btn:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <h2>Nouveaux Produits</h2>
    <div class="products-container">
        <div class="product">
            <img src="./images/30joint.png" alt="30 pre-rolled">
            <h3>30 pre-rolled</h3>
            <p>Si tu finis les 30 la dopamine se montrera presente </p>
            <p>Prix : 99.99€</p>
            <button class="add-to-cart-btn">Ajouter au Panier</button>
        </div>
        <div class="product">
            <img src="./images/hash.png" alt="HASH">
            <h3>Hash</h3>
            <p>Bon hash </p>
            <p>Prix : 99.99€</p>
            <button class="add-to-cart-btn">Ajouter au Panier</button>
        </div>
        <div class="product">
            <img src="./images/lemon.png" alt="Dried cannabis LEMON">
            <h3>45 g de LEMON</h3>
            <p>Si tu finis les 30 la dopamine se montrera presente </p>
            <p>Prix : 99.99€</p>
            <button class="add-to-cart-btn">Ajouter au Panier</button>
        </div>
    </div>
</body>
</html>

    </main>
    <footer>
        <a href="./admin/index.php" class="btn">Interface d'admins</a>
        <p>&copy; 2023 Mon Site E-commerce</p>
    </footer>
</body>
</html>
