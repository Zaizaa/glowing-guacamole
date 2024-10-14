<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom css file link  -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  
</head>

<body>
        <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>TOMOBILTI</span>
      </a>
    </div>
  </header><!-- End Header -->

  

<div class="pai">

    <form action="payment.php" method="POST"  style="margin-top: 130px;">

        <div class="row">

            <div class="col">
                <h3 class="ment"><strong>Billing Address</strong></h3>
                <div class="inputBox">
                    <span>First Name :</span>
                    <input type="text" required name="First_Name" placeholder="Enter your full name" >
                </div>
                <div class="inputBox">
                    <span>Last Name :</span>
                    <input type="text" required name="Last_Name" placeholder="Casablanca">
                </div>
                <div class="inputBox">
                    <span>Number Phone :</span>
                    <input type="number" required name="'Num_phone" placeholder="0634567435">
                </div>
                <div class="inputBox">
                    <span>CIN :</span>
                    <input type="text" required name="CIN" placeholder="Enter your National Carte Number">
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" required name="Email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" required name="Adresse" placeholder="street,locality">
                </div>
            </div>

            <div class="col" style="margin-top: 105px;">
                <div class="inputBox">
                    <span>Cards Accepted :</span>
                    <img src="image.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Card Name :</span>
                    <input type="text" required name="Card_Name" placeholder="mr./miss * ">
                </div>
                <div class="inputBox">
                    <span>Credit Card Number :</span>
                    <input type="number" required name="Card_Num" placeholder="1111 2222 3333 4444">
                </div>
                <div class="inputBox">
                    <span>State :</span>
                    <input type="text" required name="State" placeholder="MOROCCO">
                </div>

                <div class="inputBox">
                    <span>City :</span>
                    <input type="text" required name="City" placeholder="Casablanca">
                </div>

            </div>
    
        </div>
        
        <input type="submit" value="proceed to checkout" class="submit-btn" name="pay">

    </form>
</div>    

<!-- ======= Footer ======= -->
<footer id="footer" class="footer"  >

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