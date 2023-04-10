<?php include'header.php';?>

<style>
  .features_item_image{
    margin-bottom: 15px;
  }
  </style>

<head>
  

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Galeri </h2>
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li>Galeri</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

</br>
</br>
    <div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="features_container d-flex flex-row flex-wrap align-items-start justify-content-between">
						
											 <?php
                       include 'koneksi.php';
				            $qry = mysqli_query($konek,"SELECT * FROM tbl_folio");

                    //buat perulangan untuk menampilkan gambar dari database
                    while($data = mysqli_fetch_array($qry)){
                      //tampilkan gambar
                      echo "<div class='features_item'>
                      <div class='features_item_content'>
                        <div class='features_item_image'><img style='width: 300px; height: 300px; margin: 10 10 10 10;' src='assets/img/portfolio/".$data['gambar']."' alt='' ></div>
                      
                          
                      </div>
                    </div>";


                    }

                    ?>


					</div>
				</div>
			</div>
		</div>		
	</div>

  </main><!-- End #main -->

</br>
</br>

  <!-- ======= Footer ======= -->
  <?php include'footer.php';?>

 
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