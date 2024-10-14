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
  <script src="https://smtpjs.com/v3/smtp.js"></script>
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
                <a href="admin_order.php" class="active"><span class="las la-users"></span><span>Customers</span></a>
            </li>
            <li>
                <a href="admin.php"><span class="las la-clipboard-list"></span><span>Modifying cars</span></a>
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
            </header>

            <main>
                <div class="cards">
                    <div class="card-single">
                        <div>
                            <h1>???????</h1>
                            <span>Messages</span>
                        </div>
                        <div>
                            <span class="las la-users"></span>
                        </div>
                    </div>

                    <div class="card-single">
                        <div>
                            <?php
                              $connection = mysqli_connect("localhost:3307","root","","utilisateurs");
                              $query = "SELECT id_client FROM client ORDER BY id_client";
                              $query_run = mysqli_query($connection, $query);
                              $row = mysqli_num_rows($query_run);
                              echo '<h1> '.$row.' </h1>';
                            ?>
                            <span>Orders</span>
                        </div>
                        <div>
                            <span class="las la-shopping-bag"></span>
                        </div>
                    </div>
                </div>

                <div style= " margin-top : 30px">
                    <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h2>&nbsp;&nbsp;Order</h2>
                        </div>
                        <div class="card-body card-header">
                            <table width="auto">
                                 <thead>
                                    <tr>
                                        <td>Customer name</td> 
                                        <td>The desired car</td>
                                        <td>Confirmation</td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    
                                    <?php include "admin_ordercode.php"; ?> 

                                    
                                 </tbody>
                            </table>
                        </div>
                    </div>
                   </div> 
                    
                </div>

            </main>

        </div>
        <script>
document.addEventListener("DOMContentLoaded", function() {
    const sendButtons = document.querySelectorAll(".send-btn");

    sendButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            const email = this.getAttribute("data-email");
            const bodyMessage = `Dear ${email},\n\nYour message here.`;
            //const bodyMessage = `Full Name: ${name.value}<br>Email: ${email.value}<br>Subject: ${subject.value}<br>Message: ${message.value}`;

            Email.send({
                Host : "smtp.elasticemail.com",
                Username : "hadadiasalma11@gmail.com",
                Password : "E5B875B00DE8D2A715B66B4E564328AAF51F",
                To : email, // Utilisez l'adresse e-mail de l'utilisateur comme destinataire
                From : "hadadiasalma11@gmail.com",
                Subject : "Your Subject",
                Body : bodyMessage
            }).then(
              message => {
                Swal.fire({
                    icon: 'success',
                    title: 'Email sent successfully!',
                    text: "Email sent successfully to " + email,
                    showConfirmButton: false,
                    timer: 1500
                });}
            ).catch(
              error => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Failed to send email: ' + error.message
                });}
            );
        });
    });
});
</script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>