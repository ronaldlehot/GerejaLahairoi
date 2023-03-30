<?php include 'header.php'; ?>

<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

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
  <!-- <link href="assets/css/style.css" rel="stylesheet"> -->

  <!-- =======================================================
  * Template Name: Sailor - v4.10.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
      background-color: #4CAF50;
      color: white;
    }

    .pagination {
      display: inline-block;
    }

    .pagination li {
      color: black;
      float: left;
      padding: 8px 16px;
      text-decoration: none;
      transition: background-color .3s;
      border: 1px solid #ddd;
    }

    pagination li.active {
      background-color: #4CAF50;
      color: white;
      border: 0px solid #4CAF50;
    }

    .pagination li:hover:not(.active) {background-color: #ddd;}
  </style>
</head>

<body>

   
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Jadwal Pelayanan Ibadah</h2>
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li>Jadwal Pelayanan</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
  <!-- ======= Ibadah Kebaktian Hari Minggu ======= -->
  <table>
  <h3>Ibadah Kebaktian Hari Minggu</h3>
    <thead>
      <tr>
        <th>No</th>
        <th>Kebaktian</th>
        <th>Jam</th>
        <th>Pemimpin</th>
        <th>Pembacaan Firman Tuhan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Kebaktian I</td>
        <td>06.00 WITA</td>
        <td>Pdt. Yorita P. A Kim - Tlonaen</td>
        <td>Yesaya 52:13-15, 53:1-12</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Kebaktian II</td>
        <td>08.00 WITA</td>
        <td>Pdt. Yorita P. A Kim - Tlonaen</td>
        <td>Yesaya 52:13-15, 53:1-12</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Kebaktian III</td>
        <td>17.00 WITA</td>
        <td>Pdt. Yorita P. A Kim - Tlonaen</td>
        <td>Yesaya 52:13-15, 53:1-12</td>
      </tr>
    </tbody>
  </table>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
  
<!-- ======= Ibadah Pemuda ======= -->

  <table>
    
  <?php
					// Include / load file koneksi.php
					
					// Cek apakah terdapat data page pada URL
					$page = (isset($_GET['page']))? $_GET['page'] : 1;
					
					$limit = 50; // Jumlah data per halamannya
					
					// Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
					$limit_start = ($page - 1) * $limit;
					
					// Buat query untuk menampilkan data siswa sesuai limit yang ditentukan
					$sql = mysqli_query($konek, "SELECT * FROM tbl_pemuda LIMIT ".$limit_start.",".$limit);
					
					$no = $limit_start + 1; // Untuk penomoran tabel
					while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
					?>
  <h3>Ibadah Pemuda</h3>
    <thead>
      <tr>
        <th>No</th>
        <th>Lingkungan</th>
        <th>Tempat</th>
        <th>Pemimpin</th>
        <th>tanggal</th>
        <th>Pembacaan Firman Tuhan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data['lingkungan']; ?></td>
        <td><?php echo $data['tempat']; ?></td>
        <td><?php echo $data['pemimpin']; ?></td>
        <td><?php echo $data['tanggal']; ?></td>
        <td><?php echo $data['keterangan']; ?></td>
      </tr>
      <?php
						$no++; // Tambah 1 setiap kali looping
					}
					?>
				
    </tbody>
   
  </table>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <!-- ======= Ibadah Kaum Bapak ======= -->

<table>

  <h3>Ibadah Kaum Bapak</h3>
    <thead>
      <tr>
        <th>No</th>
        <th>Lingkungan</th>
        <th>Tanggal</th>
        <th>Tempat</th>
        <th>Pemimpin</th>
        <th>Asal Lingkungan</th>
       
      </tr>
    </thead>
    <tbody>
    <?php
					// Include / load file koneksi.php
					
					// Cek apakah terdapat data page pada URL
					$page = (isset($_GET['page']))? $_GET['page'] : 1;
					
					$limit = 50; // Jumlah data per halamannya
					
					// Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
					$limit_start = ($page - 1) * $limit;
					
					// Buat query untuk menampilkan data siswa sesuai limit yang ditentukan
					$sql = mysqli_query($konek, "SELECT * FROM tbl_kaum_bapa LIMIT ".$limit_start.",".$limit);
					
					$no = $limit_start + 1; // Untuk penomoran tabel
					while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
					?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data['lingkungan']; ?></td>
        <td><?php echo $data['tanggal']; ?></td>
        <td><?php echo $data['tempat']; ?></td>
        <td><?php echo $data['pemimpin']; ?></td>
        <td><?php echo $data['asal_lingkungan']; ?></td>

       
      </tr>
      <?php
						$no++; // Tambah 1 setiap kali looping
					}
					?>
				
	

    </tbody>
   
  </table>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
<!-- ======= Ibadah Perempuan GMIT ======= -->
  <table>
  <h3>Ibadah Perempuan GMIT</h3>
    <thead>
      <tr>
        <th>No</th>
        <th>Wilayah</th>
        <th>Tempat</th>
        <th>Pemimpin</th>
        <th>Pembacaan Firman Tuhan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Kapernaum</td>
        <td>Rumah Archangela Z. Hardin</td>
        <td>Fadli Djati</td>
        <td>Yesaya 52:13-15, 53:1-12</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Kapernaum</td>
        <td>Rumah Archangela Z. Hardin</td>
        <td>Fadli Djati</td>
        <td>Yesaya 52:13-15, 53:1-12</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Kapernaum</td>
        <td>Rumah Archangela Z. Hardin</td>
        <td>Fadli Djati</td>
        <td>Yesaya 52:13-15, 53:1-12</td>
      </tr>
        <td>4</td>
        <td>Kapernaum</td>
        <td>Rumah Archangela Z. Hardin</td>
        <td>Fadli Djati</td>
        <td>Yesaya 52:13-15, 53:1-12</td>
    </tbody>
  </table>


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