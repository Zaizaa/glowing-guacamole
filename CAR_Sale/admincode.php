<?php
session_start();
$connection = mysqli_connect("localhost:3307","root","","utilisateurs");

if(isset($_POST['savebtn'])){
    $modele= $_POST['add_modele'];
    $marque= $_POST['add_marque'];
    $carburant= $_POST['add_carburant'];
    $transmission= $_POST['add_transmission'];
    $annee= $_POST['add_annee'];
    $image= $_POST['add_image'];
    $quantite= $_POST['add_quantite'];
    $query = "INSERT INTO voiture (nom_modele, marque, carburant, transmission, annee, IMAGE, quantite) VALUES ('$modele','$marque','$carburant','$transmission','$annee','$image','$quantite')";
    $query_run = mysqli_query($connection, $query);
    if($query_run){
        $_SESSION['success'] = "Saved";
        header('Location: admin.php');
    }
    else{
        $_SESSION['status'] = "Not Saved";
        //header('Location: admin.php');
    }


}

if(isset($_POST['edit_btn'])){
    $idv = $_POST['edit_id'];
    echo $idv;
    $query = "SELECT * FROM voiture WHERE id_voiture='$idv'";
    $query_run = mysqli_query($connection, $query);

}

if(isset($_POST['go_btn'])){
    $idv = $_POST['info_car'];
    echo $idv;
    $query = "SELECT * FROM voiture WHERE id_voiture='$idv'";
    $query_run = mysqli_query($connection, $query);

}

if(isset($_POST['updatebtn'])){
    $idv = $_POST['edit_id'];
    $model = $_POST['edit_modele'];
    $marque = $_POST['edit_marque'];
    $transmission = $_POST['edit_transmission'];
    $carburant = $_POST['edit_carburant'];
    $query = "UPDATE voiture SET nom_modele='$model', marque='$marque', transmission='$transmission', carburant='$carburant' WHERE id_voiture='$idv'";
    $query_run = mysqli_query($connection, $query);
    if($query_run){
        $_SESSION['success'] = "Your Data is Updated";
        header('Location: admin.php');
    }
    else{
        $_SESSION['status'] = "Your Data is Not Updated";
        //header('Location: admin.php');
    }
}

if(isset($_POST['delete_btn'])){
    $idD = $_POST['delete_id'];
    $query = "DELETE FROM voiture WHERE id_voiture='$idD' ";
    $query_run = mysqli_query($connection, $query);
   if($query_run){
      $_SESSION['success'] = "Your Data is DELETED";
      header('Location: admin.php');
   }
   else{
      $_SESSION['status'] = "Your Data is NOT DELETED";
      //header('Location: admin.php');
   }
}

?>








