<!DOCTYPE html>
<html lam="en">
  <head>
      <meta charset="UTF-8">
      <title> Add Car</title>
      <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
      <link rel="stylesheet" href="assets/css/styleA.css">
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
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
              <h2>  <label for="nav-toggle"><span class="las la-bars"></span></label> TOMOBILTI </h2>
              <div class="user-wrapper">
                <nav id="navbar" class="navbar">
                  <ul><li><a class="getstarted scrollto" href="login.php">Login <i class="bi bi-person"></i></a></li></ul>
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
                    <h2>&nbsp;&nbsp;Add Car</h2>
                </div>
                <div class="card-body card-header"> <!--card-body-->
                                      
                  <form action="admincode.php" method="POST">
        
                    <div style="display: block; margin-bottom: 10px;" class="form-row"> <!--class="form-group"-->
                      <label><strong> modele name : </strong></label>
                      <input type="text" name="add_modele" placeholder="Enter the modele name">
                    </div>  
                    <div style="display: block; margin-bottom: 10px;" class="form-row"> <!--class="form-group"-->
                      <label><strong>Marque :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
                      <input type="text" name="add_marque" placeholder="Enter marque name"> <!--class="form-control"-->
                    </div>     
                    <div style="display: block; margin-bottom: 10px;" class="form-row"> <!--class="form-group"-->
                      <label><strong>transmission :</strong></label>
                      <input type="text" name="add_transmission"  placeholder="Enter transmission"> <!--class="form-control"-->
                    </div>        
                    <div style="display: block; margin-bottom: 10px;" class="form-row"> <!--class="form-group"-->
                      <label><strong>Carburant :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
                      <input type="text" name="add_carburant" placeholder="Enter engine"> <!--class="form-control"-->
                    </div> 
                    <div style="display: block; margin-bottom: 10px;" class="form-row"> <!--class="form-group"-->
                      <label><strong>Annee :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
                      <input type="text" name="add_annee" placeholder="Enter l'annee"> <!--class="form-control"-->
                    </div>
                    <div style="display: block; margin-bottom: 10px;" class="form-row"> <!--class="form-group"-->
                      <label><strong>URL image :&nbsp;&nbsp;&nbsp;</strong></label>
                      <input type="text" name="add_image" placeholder="Enter l'image"> <!--class="form-control"-->
                    </div>
                    <div style="display: block; margin-bottom: 10px;" class="form-row"> <!--class="form-group"-->
                      <label><strong>Quantite :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
                      <input type="text" name="add_quantite" placeholder="Enter la quantite"> <!--class="form-control"-->
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" name="savebtn">save</button>
                    <a href="admin.php" class="btn btn-danger">Close</a>    
                  </form>                                           
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
              <a href="index.php" class="logo d-flex align-items-center">
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
    </footer>
  </body>  
</html>    