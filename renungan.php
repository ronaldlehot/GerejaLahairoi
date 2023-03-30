
<?php include'header.php';?>
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
  <link href="assets/css/news.css" rel="stylesheet">
  <link href="assets/css/news_responsive.css" rel="stylesheet">
  

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
          <h2>Renungan</h2>
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li>Renungan</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

   
         <!-- News -->


	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Posts -->
				<div class="col-lg-8">
					<div class="news_posts">
						
						<!-- News Post -->


						  <?php
              include 'koneksi.php';
            $qry = mysqli_query($konek,"SELECT * FROM tbl_blog ");
            while ($data=mysqli_fetch_assoc($qry)) {
          ?>

						<div class="news_post">
							<div class="news_image">
								<img src="assets/img/blog/<?php echo $data['gambar']; ?>" alt="">
								<div class="news_date d-flex flex-column align-items-center justify-content-center">
										<div class="news_day">News</div>
										<div class="news_month"><?php echo $data['tgl_posting']; ?></div>
								</div>
							</div>
							<div class="news_body">
								<div class="news_title"><a href="renungandetail.php?id=<?php echo base64_encode($data['kode']); ?>"><?php echo $data['judul']; ?></a></div>
								<div class="news_info">
									<ul>
										<li class="news_author"><span>Post</span><a href="#"> <?php echo $data['user']; ?></a></li>
									</ul>
								</div>
								<div class="button about_button">
							<a href="renungandetail.php?id=<?php echo base64_encode($data['kode']); ?>">SELENGKAPNYA</a>
						</div>
							</div>
						</div>

						<?php } ?>

					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Search -->
						<div class="sidebar_search">
							<form action="#" id="sidebar_search_form" class="sidebar_search_form">
								<input type="text" class="search_input" placeholder="Search" required="required">
								<button class="search_button"><img src="images/search.png" alt=""></button>
							</form>
						</div>

						<!-- Categories -->
						<div class="sidebar_categories sidebar_section">
							<div class="sidebar_section_title">
								<div class="sidebar_title">LIST</div>
							</div>
							<ul>
								<?php
						           $qry = mysqli_query($konek,"SELECT * FROM tbl_blog where kode order by tgl_posting desc limit 100");
						           while ($data=mysqli_fetch_assoc($qry)) {
						          ?>
								<li><a href="renungan.php?id=<?php echo base64_encode($data['kode']); ?>"><?php echo $data['judul']; ?></a></li>
								<?php } ?>
							</ul>
						</div>
						<!-- Archives -->
					</div>
				</div>
			</div>
		</div>
	</div>


              


       
    </section><!-- End Blog Section -->

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