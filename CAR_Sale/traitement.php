<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "utilisateurs";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Login'])) {
        $Username = $_POST['First_Name'];
        $Password = $_POST['Password'];
        
        // Vérification si l'utilisateur est admin
        if ($Username == "admin" && $Password == "admin") {
            header("Location: admin_order.php");
            exit();
        }

        $query = "SELECT * FROM client WHERE First_Name = :First_Name AND Password = :Password";

        $stmt = $bdd->prepare($query);
        $stmt->bindParam(':First_Name', $Username);
        $stmt->bindParam(':Password', $Password);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            header("Location: index.php");
            exit();
        } else {
            echo "Identifiant ou mot de passe incorrect.";
        }
    } elseif (isset($_POST['Sign'])) {
        $Username = $_POST['First_Name'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];

        $check_query = "SELECT * FROM client WHERE First_Name = :First_Name OR Email = :Email";
        $check_stmt = $bdd->prepare($check_query);
        $check_stmt->bindParam(':First_Name', $Username);
        $check_stmt->bindParam(':Email', $Email);
        $check_stmt->execute();
        $existing_user = $check_stmt->fetch(PDO::FETCH_ASSOC);

        if ($existing_user) {
            echo "Cet utilisateur existe déjà avec cet identifiant ou cet e-mail!";
        } else {
            $query = "INSERT INTO client (First_Name, Email, Password) VALUES (:First_Name, :Email,:Password)";
            $stmt = $bdd->prepare($query);
            $stmt->execute(array(':First_Name' => $Username, ':Email' => $Email, ':Password' => $Password));
            header("Location: login.php");
            exit();
        }
    }
}
?>
