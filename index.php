<?php include'header.php';?>

<head>
  
<!-- <link href="assets/css/news.css" rel="stylesheet">
  <link href="assets/css/news_responsive.css" rel="stylesheet"> -->
</head>

<body>



  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/Lahairoi1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang di Website Resmi GMIT Lahairoi Tuak Sabu </span></h2>
              <p class="animate__animated animate__fadeInUp">"Yesus Kristus Adalah Tuhan"</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/Lahairoi2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Motto Gereja</h2>
              <p class="animate__animated animate__fadeInUp">"Roh Kudus memperbaharui segenap ciptaan"</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/Lahairoi3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Motto Gereja</h2>
              <p class="animate__animated animate__fadeInUp">"Tegarkanlah selalu hatimu, hai orang-orang yang menaruh seluruh harapan kepada Tuhan"</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Sambutan Ketua Majelis Jemaat ======= -->
    <section id="Sambutan" class="Sambutan">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Beranda</h2>
          <p>Sambutan Ketua Majelis Jemaat</p>
        </div>
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/kmj.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>"Selamat memasuki minggu-minggu sengsara. Kiranya Tuhan Yesus Memberkati kita semua."</h3>
            <p class="fst-italic">
              Pdt. Yorita P. A Kim - Tlonaen, S.Th
            <p>
            <p class="fst-italic">
              Ketua Majelis Jemaat Lahairoi Tuak Sabu Lasiana
            <p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <section id="contact" class="wow fadeInUp">
	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title"><h2>BERITA</h2></div>
				</div>
			</div>
			<div class="row services_row">

				<!-- Service -->
				 <?php
            $qry = mysqli_query($konek,"SELECT * FROM tbl_file ");
            while ($data=mysqli_fetch_assoc($qry)) {
          ?>

				<div class="col-lg-4 col-md-6 service_col">
					
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/alarm-clock.svg" alt=""></div>
							<div class="service_title trans_200"><?php echo $data['kategori']; ?></div>
							<div class="service_text">
								<div class="service_title trans_200"><?php echo $data['judul']; ?></div>

							</div>
							<div class="button dept_button"><a href="kegiatan_detail.php?id=<?php echo base64_encode($data['kategori']); ?>">READ MORE</a></div>
						</div>

					
				</div>
			<?php } ?>

			</div>
		</div>
	</div>
</section>

    <!-- ======= Pelayanan Section ======= -->
    <section id="pelayanan" class="pelayanan">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Beranda</h2>
          <p>Pelayanan Gereja </p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="fa-solid fa-children"></i></div>
              <h4><a href="">Ibadah PAR</a></h4>
              <p>Ibadah yang dikhususkan untuk usia anak-anak dan remaja. Dilaksanakan setiap hari minggu pukul 8 pagi.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class='bx bxs-building-house' ></i></i></div>
              <h4><a href="">Ibadah Rumah Tangga</a></h4>
              <p>Ibadah yang dilaksanakan pada setiap rumah tangga dari masing-masing rayon. Dilaksanakan setiap hari Rabu pukul 5 sore.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="fa-sharp fa-solid fa-person-dress"></i></div>
              <h4><a href="">Ibadah Perempuan GMIT</a></h4>
              <p>Ibadah yang dikhususkan untuk perempuan. Dilakasanakan setiap hari selasa pukul 5 sore.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="fa-sharp fa-solid fa-person"></i></div>
              <h4><a href="">Ibadah Kaum Bapak</a></h4>
              <p>Ibadah yang dikhususkan untuk bapak-bapak. Dilaksanakan setiap hari jumat pukul 5 sore.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class='bx bxs-group'></i></div>
              <h4><a href="">Ibadah Pemuda</a></h4>
              <p>Ibadah yang dikhususkan bagi para pemuda dan pemudi Gereja. Dilaksanakan setia hari kamis pukul 5 sore.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="fa-sharp fa-solid fa-person-cane"></i></div>
              <h4><a href="">Ibadah Lansia</a></h4>
              <p>Ibadah yang dikhususkan untuk para lansia. Dilaksanakan setiap hari senin pukul 5 sore.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pelayanan Section -->



    <!-- ======= Statistik Section ======= -->
    <section id="Statistik" class="Statistik">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Beranda</h2>
          <p>Statistik Gereja</p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class='bx bxs-home' ></i>
              <h4>485</h4>
              <p>Jumlah KK</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="fa-sharp fa-solid fa-venus-mars"></i>
              <h4>2045</h4>
              <p>Anggota Jemaat</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="fa-solid fa-hands-praying"></i></i>
              <h4>1984</h4>
              <p>Anggota Baptisan</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="fa-solid fa-handshake-angle"></i>
              <h4>1333</h4>
              <p>Anggota Sidi</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="fa-sharp fa-solid fa-ring"></i>
              <h4>1982</h4>
              <p>Pasangan Menikah</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="fa-solid fa-location-dot"></i>
              <h4>33</h4>
              <p>Jumlah Rayon</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    

    

  </main><!-- End #main -->


  

  <!-- ======= Footer ======= -->
    <?php include 'footer.php';
    ?>

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