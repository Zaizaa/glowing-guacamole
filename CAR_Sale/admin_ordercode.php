<?php
// Connexion à la base de données (à adapter selon votre configuration)
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "utilisateurs";

// Création de la connexion
try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit();
}

// Requête SQL pour récupérer les données
$query = "SELECT * FROM client"; // Remplacez "votre_table" par le nom de votre table
$result = $bdd->query($query);

if ($result->rowCount() > 0) {
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["First_Name"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td> <button type='submit' name='btn_edit'>send</button> </td>";
        
    }
} else {
    // Aucun enregistrement trouvé
    echo "<tr><td colspan='6'>No Record found !</td></tr>";
}
?>
