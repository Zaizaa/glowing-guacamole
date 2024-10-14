<!DOCTYPE html>
<html lam="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title> Accusoft admin</title>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="assets/css/styleA.css">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2><span class="las la-accusoft"></span><span>Menu</span></h2>
            </div>
            <div class="sidebar-menu">
            <ul>
            <li>
                <a href="admin_order.php"><span class="las la-users"></span><span>Customers</span></a>
            </li>
            <li>
                <a href="admin_controle.php" class="active"><span class="las la-clipboard-list"></span><span>Modifying cars</span></a>
            </li>   
            </ul>
            </div>
        </div>
        <div class="main-content">
            <header>
              <h2>  
                  <label for="nav-toggle">
                       <span class="las la-bars"></span>
                  </label>
                  TOMOBILTI
              </h2>
               <div class="user-wrapper">
                <nav id="navbar" class="navbar">
                    <ul> 
                      <li><a class="getstarted scrollto" href="login.php">Login <i class="bi bi-person"></i></a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                  </nav>
               </div>
            </header>
        </div>
       <main>
        <div class="recent-grid" style="margin: 60px; margin-right: 30%;">
            <div class="projects">
                <div class="card">
                    <div class="card-header">
                        <h2>&nbsp;&nbsp;Edit Car Information</h2>
                    </div>
                    <div class="card-body card-header"> <!--card-body-->                      
<?php
 $connection = mysqli_connect("localhost:3307","root","","utilisateurs");
 if(isset($_POST['edit_btn'])){
    $idv= $_POST['edit_id']; 
    $query = "SELECT * FROM voiture WHERE id_voiture='$idv'";
    $query_run = mysqli_query($connection, $query);
  foreach($query_run as $row){
?>
        <form action="admincode.php" method="POST">
            <input type="hidden" name="edit_id" value="<?php echo $row['id_voiture']?>">
                       <div style="display: block; margin-bottom: 10px;" class="form-row"> <!--class="form-group"-->
                          <label><strong>Model :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
                          <input type="text" name="edit_modele" value="<?php echo $row['nom_modele']; ?>" placeholder="Enter model name"> <!--class="form-control"-->
                       </div>  
                       <div style="display: block; margin-bottom: 10px;" class="form-row"> <!--class="form-group"-->
                          <label><strong>Marque :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
                          <input type="text" name="edit_marque" value="<?php echo $row['marque']; ?>" placeholder="Enter marque name"> <!--class="form-control"-->
                       </div>     
                       <div style="display: block; margin-bottom: 10px;" class="form-row"> <!--class="form-group"-->
                          <label><strong>transmission :</strong></label>
                          <input type="text" name="edit_transmission" value="<?php echo $row['transmission']; ?>" placeholder="Enter transmission"> <!--class="form-control"-->
                       </div>        
                       <div style="display: block; margin-bottom: 10px;" class="form-row"> <!--class="form-group"-->
                          <label><strong>Carburant :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
                          <input type="text" name="edit_carburant" value="<?php echo $row['carburant']; ?>" placeholder="Enter engine"> <!--class="form-control"-->
                       </div> 
                       <div style="display: block; margin-bottom: 10px;" class="form-row"> <!--class="form-group"-->
                          <label><strong>Annee :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
                          <input type="text" name="edit_annee" value="<?php echo $row['annee']; ?>" placeholder="Enter l'annee"> <!--class="form-control"-->
                       </div>
                       <div style="display: block; margin-bottom: 10px;" class="form-row"> <!--class="form-group"-->
                          <label><strong>URL image :&nbsp;&nbsp;&nbsp;</strong></label>
                          <input type="text" name="edit_image" value="<?php echo $row['IMAGE']; ?>" placeholder="Enter l'image"> <!--class="form-control"-->
                       </div>
                       <div style="display: block; margin-bottom: 10px;" class="form-row"> <!--class="form-group"-->
                          <label><strong>Quantite :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
                          <input type="text" name="edit_quantite" value="<?php echo $row['quantite']; ?>" placeholder="Enter la quantite"> <!--class="form-control"-->
                       </div>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" name="updatebtn">Update</button>
                        <a href="admin.php" class="btn btn-danger">Cancel</a>    
          </form>               
<?php
    }
}
?>                               
                    </div>
                </div>
            </div>             
        </div>
       </main>

  <footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>TOMOBILTI</span>
            </a>
            <p>Our company is dedicated to offering a carefully curated selection of new vehicles.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#values">Brands</a></li>
            </ul>
          </div>
            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
              <h4>Contact Us</h4>
              <p>
                N 218 Salam Street <br>
                Safi 
                MOROCCO <br><br>
                <strong>Phone:</strong> +212 683829256<br>
                <strong>Email:</strong> first.last@gmail.com<br>
              </p>
            </div>
          </div>
      </div>
    </div>
  </footer>
</html>    