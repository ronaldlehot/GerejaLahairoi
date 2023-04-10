
<?php include 'header.php'; ?>
<html lang="en">
<?php 

include 'koneksi.php';
$query = mysqli_query($konek, "SELECT * FROM tbl_sejarah WHERE id = 1");
$sejarah_gereja = mysqli_fetch_assoc($query);

$query = mysqli_query($konek, "SELECT * FROM tbl_visi_misi WHERE id = 2");
$visimi = mysqli_fetch_assoc($query);




?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Bagian Link Tab -->
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
          <h2>Profil Gereja</h2>
          <ol>
            <li><a href="tentang.php">Tentang</a></li>
            <li>Profil Gereja</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h2>Tentang</h2>
          <p>Sejarah Gereja</p>
        </div>

        <div class="row content">
          <div>
            <p>
            <?= $sejarah_gereja['isi_sejarah'] ?>
            </p>
          </div>
        </div>
      </div>
    </section> 

    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h2>Tentang</h2>
          <p>Visi Misi Gereja</p>
        </div>

        <div class="row content">
          <div>
            <p>
            <?= $visimi['isi_visi_misi'] ?>
            </p>
        </div>
      </div>
    </section> 

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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>