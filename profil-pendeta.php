<?php include 'header.php'; ?>
<?php 

include 'koneksi.php';



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Bgaian Link Tab -->
  <title>GMIT | Lahairoi Tuak Sabu Lasiana</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons Untuk Icon Pada Link Tab -->
  <link href="assets/img/gmit.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://kit.fontawesome.com/37093c578d.css" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v4.10.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Profil Pendeta</h2>
          <ol>
            <li><a href="index.php">Tentang</a></li>
            <li>Profil Pendeta</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->


    <section id="team" class="team ">
   
   <div class="container">

     <div class="row">
     <?php
                    $qry = mysqli_query($konek,"SELECT * FROM tbl_pendeta ");
                    while ($data=mysqli_fetch_assoc($qry)) {
                   ?>
       <div class="col-lg-6">
         <div class="member d-flex align-items-start">
           <div class="pic"><img  src="assets/img/team/<?php echo $data['gambar']; ?>"  class="img-fluid" alt=""></div>
           <div class="member-info">
             <h4><?php echo $data['nama']; ?></h4>
             <p>Periode :</p>
             <span><?php echo $data['periode']; ?></span>
           </div>
         </div>
       </div>

       <?php } ?>
     </div>

   </div>
  
 </section><!-- End Team Section -->

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <?php include 'footer.php'; ?>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://kit.fontawesome.com/37093c578d.js" crossorigin="anonymous"></script>
 
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>