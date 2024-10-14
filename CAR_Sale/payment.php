<?php
session_start();

$connection = mysqli_connect("localhost:3307","root","","utilisateurs");

if(isset($_POST['pay'])){
    $firstname = $_POST['First_Name'];
    $lastname = $_POST['Last_Name'];
    $num = $_POST['Num_phone'];
    $cin = $_POST['CIN'];
    $email = $_POST['Email'];
    $adresse = $_POST['Adresse'];
    $cardname = $_POST['Card_Name'];
    $cardnum = $_POST['Card_Num'];
    $state = $_POST['State'];
    $city = $_POST['City'];
    $query = "INSERT INTO client (First_Name, Last_Name, Num_phone, CIN, Email, Adresse, Card_Name, Card_Num, State, City) VALUES ('$firstname','$lastname','$num','$cin','$email','$adresse','$cardname','$cardnum','$state','$city')";
    $query_run = mysqli_query($connection, $query);
    if($query_run){
        $_SESSION['success'] = "Saved";
        header('Location: index.php');
    }
    else{
        $_SESSION['status'] = "The purchase didn't go through !";
        header('Location: paie.php');
    }
}
?>
