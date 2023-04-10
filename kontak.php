<?php include'header.php';?>


<head>
  

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Kontak</h2>
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li>Kontak</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.509237529933!2d123.66450500490805!3d-10.1391972860167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c5683a85194dde3%3A0x18c68d4ee251253f!2sGMIT%20Jemaat%20Lahairoi%20Tuaksabu%20Lasiana%20Barat!5e0!3m2!1sid!2sid!4v1676634432945!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Lasiana, Kec. Kelapa Lima, Kota Kupang, Nusa Tenggara Timur</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>lahairoituaksabu@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 813 382 001 75</p>
              </div>

            </div>

          </div>

         			<!-- Contact Form -->
				<div class="col-lg-6 form_col">
					  <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="form">
          <div id="sendmessage">KONSULTASI / PESAN</div>
          <div id="errormessage"></div>
              <form method="POST" action="">
    

            <div class="form-row">
              <div class="form-group col-md-14">
                <input type="text" name="txtnama" class="form-control" id="name" placeholder="Nama Lengkap" data-rule="minlen:4" required oninvalid="this.setCustomValidity('Nama Lengkap Masih Kosong')" oninput="setCustomValidity('')"> </input>
                <!-- <div class="validation"></div> -->
              </div>
              <div class="form-group col-md-14">
                <input type="email" class="form-control" name="txtemail" id="email" placeholder="Email" data-rule="email" required oninvalid="this.setCustomValidity('Email Masih Kosong')" oninput="setCustomValidity('')"> </input>
                <!-- <div class="validation"></div> -->
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="txthandphone" id="subject" placeholder="No HP" required oninvalid="this.setCustomValidity('No HP Masih Kosong')" oninput="setCustomValidity('')"> </input>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="txtpesan" rows="5" data-rule="required" data-msg="Pesan Tidak Boleh Kosong" placeholder="Pesan"></textarea>
              <!-- <div class="validation"></div> -->
            </div>
            
         <input type="submit" name="btnsimpan" class="btn btn-danger" value="Kirim Pesan">
          </form>
          <?php
          include "koneksi.php";
          if (isset($_POST["btnsimpan"])){

            
            $txtnama=$_POST['txtnama'];
            $txtemail =$_POST['txtemail'];
            $txthandphone = $_POST['txthandphone'];
            $txtpesan =$_POST['txtpesan'];
            $tglreg = date("Y-m-d H:i:s");
            $simpan1 = mysqli_query($konek,"INSERT INTO tbl_pesan (nama,hp,email,pesan,tanggal) VALUES ('$txtnama','$txthandphone','$txtemail','$txtpesan','$tglreg')");
            if ($simpan1){
              ?>
              <script type="text/javascript">
                alert('Terimakasih Pesan Anda Berhasil di Kirim, Kami Akan Segera Membalas Lewat Email dan HandPhone');
                document.location.href="kontak.php";
              </script>
              <?php
            }else{
              echo "Gagal Untuk Menyimpan";
            }
          }
        ?>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <?php include "footer.php"; ?>
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