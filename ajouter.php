<?php
//fonction pour la connexion au serveur et la base
function connexion(){
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=monoshop;charset=utf8', 'root', '');
        return $bdd; // Return the database connection
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bdd = connexion(); // Establish the database connection

    // Prepare an INSERT statement
    $stmt = $bdd->prepare("INSERT INTO produit (name, price) VALUES (:name, :price)");
    
    // Bind parameters to the prepared statement
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':price', $_POST['price'], PDO::PARAM_INT);

     // Execute the statement and check for errors
     if ($stmt->execute()) {
        echo "Produit ajouté avec succès";
    } else {
        echo "Erreur lors de l'ajout du produit";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ajouter.css">
</head>
<body>
    
<form method="POST" action="ajouter.php">
    <input type="text" name="name" placeholder="Product Name" required>
    <input type="number" name="price" placeholder="Price" required>
    <!-- Add other product fields here -->
    <button type="submit" >Ajouter Produit</button>
    
</form>
</body>
</html>