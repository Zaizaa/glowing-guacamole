<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mercedes-Benz Class C</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>TOMOBILTI</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
          <li class="dropdown"><a href="#"><span>Buy now</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li class="dropdown"><a href="Mercedes.php"><span>Mercedes-Benz</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                        <li><a href="mer_CLA.php">CLA</a></li>
                        <li><a href="mer_classA.php">Class A</a></li>
                        <li><a href="mer_classC.php">Class C</a></li>
                        <li><a href="mer_EQS.php">EQS</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="Ford.php"><span>Audi</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="Audi_Q5.php">Q5</a></li>
                  <li><a href="Audi_A3.php">A3</a></li>
                  <li><a href="Audi_Q3.php">Q3</a></li>
                  <li><a href="Audi_Q8.php">Q8</a></li>
                </ul>
              </li>
                <li class="dropdown"><a href="BMW.php"><span>BMW</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="BMW1.php">Serie 1</a></li>
                    <li><a href="BMW2.php">Serie 2</a></li>
                    <li><a href="BMW3.php">Serie 3</a></li>
                    <li><a href="BMW4.php">Serie 4</a></li>
                    
                  </ul>
                </li>
                
             
               
  
              </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="login.php">Login <i class="bi bi-person"></i></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

<main id="main">

  <section class="breadcrumbs">
  <div class="container">  
          <img src="assets/img/Mercedes-Benz-logo.png" alt="" width="100">
          <div style="display: inline-block; vertical-align: middle;">
              <h1 style="display: inline;">Mercedes-Benz</h1>
          </div>
      </div>
  </section><!-- End Breadcrumbs -->
  

  </br></br></br></br>
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

        </br></br></br>
        <div class="row">
          <!-- Colonne de gauche réservée pour la barre latérale -->
          <div class="col-lg-3">
              <div class="sidebar">
                  <h1 class="sidebar-title">Categories</h1> </br>
                  <div class="sidebar-item categories">
                      <ul class="hanaa">
                      <li><a href="Mercedes.php"><i class="bi bi-chevron-right"></i>Tout <span>(25)</span></a></li>
                          <li><a href="mer_CLA.php"><i class="bi bi-chevron-right"></i>CLA <span>(5)</span></a></li>
                          <li><a href="mer_classA.php"><i class="bi bi-chevron-right"></i>Class A <span>(12)</span></a></li>
                          <li><a href="mer_classC.php"><i class="bi bi-chevron-right"></i>Class C <span>(5)</span></a></li>
                          <li><a href="mer_EQS.php"><i class="bi bi-chevron-right"></i>EQS <span>(8)</span></a></li>
                          
                      </ul>
                  </div><!-- End sidebar categories-->
              </div><!-- End sidebar -->
          </div>
<!--les 3 premiers blocs-->
          <!-- Entrées de blog dans les colonnes restantes -->
          <?php
                              $connection = mysqli_connect("localhost:3307","root","","utilisateurs");
                               $query = "SELECT * FROM voiture WHERE id_marque = 1 AND Quantite >0 AND Modele='Class C'";
                               $query_run = mysqli_query($connection, $query);
                             ?>         
            <!-- Première entrée de blog -->
                                  <?php
                                   if(mysqli_num_rows($query_run) > 0){
                                     while($row = mysqli_fetch_assoc($query_run)){
                                      ?>
                                                    <div class="col-lg-3">
                                                    <article class="entry">
                                                    <div class="entry-img">
                                                    <img src="<?php echo $row["image"]; ?>" alt="" class="img-fluid">
                                                    </div>
                                                    <h2 class="entry-title"><a href="blog-single.html"><?php echo $row["Modele"]; ?></a></h2>
                                                    <h6><?php echo $row["Description"]; ?></h6>
                                                    <div class="entry-meta">
                                                    <ul>
                                                    <li class="d-flex align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["Annee"]; ?>|<?php echo $row["Transmission"]; ?>|<?php echo $row["Carburant"]; ?></li>
                                                    </ul>
                                                    </div>
                                                    <form action="each.php" method="post">
                                                    <div class="purchase-info">
                                                        <input type="hidden" name="info_car" value="<?php echo $row['id_voiture'];?>">
                                                        <button type="submit" name="go_btn" class = "btn" style='margin-left : 40px'><?php echo $row["Prix"]; ?> DH</button>
                                                    </div>
                                                    </form>
                                                    </article>
                                                    </div>
                                    <?php
                                     }
                                     
                                   }
                                   else{
                                      echo "No Record Found!";
                                   }
                                  ?> 
           
            <!-- End blog entry -->
        <!-- End blog entries list -->
       
         
<!--fin de les 3 1eme blocs-->

<!--fin de les 3 2eme blocs-->

        
      </div><!-- Fin de la ligne de grille Bootstrap -->
      </div>
      </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.php" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>TOMOBILTI</span>
            </a>
            <p>Our company is dedicated to offering a carefully curated selection of new vehicles. </p>
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
              <li><i class="bi bi-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="index.php#about">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="index.php#values">Brands</a></li>
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
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>