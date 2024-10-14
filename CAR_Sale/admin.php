<?php
session_start();
//header('Location: admin.php');

?>

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
            <div class="sidebar-brand container-fluid container-xl d-flex align-items-center justify-content-between ">
                <img src="assets/img/logo.png" alt="" width="30%">
                <h2 style="margin-right: 55px">TOMOBILTI</h2>
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
               <div class="user-wrapper">

                <nav id="navbar" class="navbar">
                    <ul>
                      
                      <li><a class="getstarted scrollto" href="index.php" style="margin-left:700px ; margin-top : 13px">Logout <i class="bi bi-person"></i></a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                  </nav>
               </div>
               <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            </header>

            <main>
                <div class="cards">
                    <div class="card-single">
                        <div>
                            <?php
                              $connection = mysqli_connect("localhost:3307","root","","utilisateurs");
                              $query = "SELECT id_voiture FROM voiture ORDER BY id_voiture";
                              $query_run = mysqli_query($connection, $query);
                              $row = mysqli_num_rows($query_run);
                              echo '<h1> '.$row.' </h1>';
                            ?>
                            
                            <span>Cars</span>
                        </div>
                        <div>
                        <img src="assets/img/logo.png" alt="" style="width: 130px; height: auto; margin-top: -20px;"> 
                        </div>
                    </div>

                    <div class="card-single">
                        <div style="margin-top: 20px;">
                            <h2>ADD CAR</h2>
                        </div>
                        <div>
                          <form action="add.php" method="post">
                            <button type="submit" class="btn btn-primary" style="background-color: #012970; border: 2px solid #012970; margin-top: 20px;"> Add </button>
                          </form>
                        </div>
                    </div>
                    
                </div>

                <div style= " margin-top : 30px">
                   
                    <div class="card">
                        <div class="card-header">
                          
                            <h2>Cars</h2>
                        </div>
                        <?php
                              if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
                                echo "<script>
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Success!',
                                            text: '".$_SESSION['success']."',
                                            showConfirmButton: false,
                                            timer: 1500
                                        });
                                      </script>"; 
                                unset($_SESSION['success']);}
                              if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
                                echo "<script>
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error!',
                                    text: '".$_SESSION['status']."',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                              </script>"; 
                                  unset($_SESSION['status']);
                              }

                              ?>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                           <div class="card-body card-header">
                             <?php
                              $connection = mysqli_connect("localhost:3307","root","","utilisateurs");
                               $query = "SELECT voiture.*, marque.Nom_Marque FROM voiture, marque WHERE voiture.id_marque = marque.id_marque;";
                               $query_run = mysqli_query($connection, $query);
                             ?>
                            <table width="auto" >
                                <thead>
                                    <tr> 
                                        <th>&nbsp;&nbsp;Model</th>
                                        <th>&nbsp;&nbsp;Marque</th>
                                        <th>Type</th>
                                        <th>Engine</th>
                                        <th>quantity</th>
                                        <th>&nbsp;&nbsp;&nbsp; Edit</th>
                                        <th>&nbsp;&nbsp;&nbsp; Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                   if(mysqli_num_rows($query_run) > 0){
                                     while($row = mysqli_fetch_assoc($query_run)){
                                      ?>
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id_voiture'];?>">  
                                    <tr>
                                      <td><?php echo $row["Modele"]; ?></td>
                                      <td><?php echo $row["Nom_Marque"]; ?></td>
                                      <td><?php echo $row["Transmission"]; ?></td>
                                      <td><?php echo $row["Carburant"]; ?></td>
                                      <td><?php echo $row["Quantite"]; ?></td>

                                      <td>
                                       <form action="edit.php" method="post">
                                          <input type="hidden" name="edit_id" value="<?php echo $row['id_voiture'];?>">
                                          <button type="submit" name="edit_btn">edit</button>
                                        </form>
                                      </td>
                                      <td>
                                        <br><br><br>
                                        <form action="admincode.php" method="post">
                                          <input type="hidden" name="delete_id" value="<?php echo $row['id_voiture'];?>">
                                          <button type="submit" name="delete_btn">delete</button>
                                        </form>
                                      </td>
                                    </tr>
                                    <?php
                                     }
                                     
                                   }
                                   else{
                                      echo "No Record Found!";
                                   }
                                  ?> 
                                </tbody>
                                </table>
                            
                        </div>
                      </div>
                   
                    
                </div>


            </main>

        </div>


    </body>

    
</html>