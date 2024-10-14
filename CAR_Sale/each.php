<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Inner Page - FlexStart Bootstrap Template</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    </head>
    <body>
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
                                <li class="dropdown"><a href="Audi.php"><span>Audi</span> <i class="bi bi-chevron-right"></i></a>
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
                </nav>
            </div>
        </header>
        <main id="main">
            <br><br><br><br>
            <section class="inner-page">
                <div class="container">
                    <?php
                    $connection = mysqli_connect("localhost:3307","root","","utilisateurs");
                    if(isset($_POST['go_btn'])){
                        $idv= $_POST['info_car']; 
                        $query = "SELECT * FROM voiture WHERE id_voiture='$idv'";
                        $query_run = mysqli_query($connection, $query);
                        foreach($query_run as $row){
                    ?>
                    <form action="paie.php" method="POST">
                            <input type="hidden" name="info_car" value="<?php echo $row['id_voiture']?>">      
                            <div class = "card-wrapper">
                                <div class = "card">
                                    <div class = "product-imgs">
                                        <div class = "img-display">
                                            <div class = "img-showcase">
                                                <img src = "<?php echo $row["image"]; ?>" alt = "shoe image" class="each">
                                                <img src = "<?php echo $row["image1"]; ?>" alt = "shoe image" class="each"> 
                                                <img src = "<?php echo $row["image2"]; ?>" alt = "shoe image" class="each">
                                                <img src = "<?php echo $row["image3"]; ?>" alt = "shoe image" class="each">
                                            </div>
                                        </div>
                                        <div class = "img-select">
                                            <div class = "img-item">
                                                <a href = "#" data-id = "1">
                                                    <img src = "<?php echo $row["image"]; ?>" alt = "shoe image" class="each">
                                                </a>
                                            </div>
                                            <div class = "img-item">
                                                <a href = "#" data-id = "2">
                                                    <img src = "<?php echo $row["image1"]; ?>" alt = "shoe image" class="each">
                                                </a>
                                            </div>
                                            <div class = "img-item">
                                                <a href = "#" data-id = "3">
                                                    <img src = "<?php echo $row["image2"]; ?>" alt = "shoe image" class="each">
                                                </a>
                                            </div>
                                            <div class = "img-item">
                                                <a href = "#" data-id = "4">
                                                    <img src = "<?php echo $row["image3"]; ?>" alt = "shoe image" class="each">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class = "product-content">
                                        <h2 class = "product-title"><?php echo $row['Modele']; ?></h2>
                                        <a href = "#" class = "product-link"><?php echo $row['Description']; ?></a>
                                        <div class = "product-rating">
                                            <i class = "fas fa-star"></i>
                                            <i class = "fas fa-star"></i>
                                            <i class = "fas fa-star"></i>
                                            <i class = "fas fa-star"></i>
                                            <i class = "fas fa-star-half-alt"></i>
                                            <span>4.7(21)</span>
                                        </div>
                                        <br>
                                        <div class = "product-detail">
                                            <h2><strong>about This Car: </strong></h2>
                                            <ul>
                                                <li>Color: <span><?php echo $row['Modele']; ?>???????????</span></li>
                                                <li>Transmission: <span><?php echo $row['Transmission']; ?></span></li>
                                                <li>Engine: <span><?php echo $row['Carburant']; ?></span></li>
                                                <li>Year: <span><?php echo $row['Annee']; ?></span></li>
                                                <li>Guarantee: <span><?php echo $row['Modele']; ?>?????????????</span></li>
                                            </ul>
                                            <p>The price mentioned is the turnkey price of the vehicle excluding delivery costs. Once your payment has been made, a member of the TOMOBILTI team will contact you within 24 hours at the latest.</p>
                                        </div>
                                        <div class = "purchase-info">
                                            <button type="submit" class = "btn" name="buy_btn"> <?php echo $row['Prix']; ?> DH</button> 
                                        </div>
                                    </div>                               
                                </div>
                            </div>
                    </form>   
                    <?php
                        }
                    }
                    ?> 
                </div>
            </section>
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
                            <li><i class="bi bi-chevron-right"></i> <a href="index.php">Home</a></li>
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
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <script src="assets/js/main.js"></script>
        <script src="script_car.js"></script>
    </body>
</html>