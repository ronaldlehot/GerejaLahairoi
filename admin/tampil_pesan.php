<?php include'header.php';
error_reporting(0); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
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
    background-color: #d9232d;
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
    border: 2px solid #ddd;
}

pagination li.active {
    background-color: #4CAF50;
    color: white;
    border: 0px solid #4CAF50;
}

.pagination li:hover:not(.active) {background-color: #ddd;}


</style>
</head>
	<div class="card-body">
			<h3> Pesan Masuk </h3>
                  <div class="table-responsive">
                    <table class="table">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>No Handphone</th>
						<th>Email</th>
						<th>Pesan</th>
						<th>Tanggal</th>
						<th>Aksi</th>
					</tr>
					<?php
					// Include / load file koneksi.php
					// Include / load file koneksi.php
					include "../koneksi.php";
					
					// Cek apakah terdapat data page pada URL
					$page = (isset($_GET['page']))? $_GET['page'] : 1;
					$limit = 20; // Jumlah data per halamannya
					$limit_start = ($page - 1) * $limit;
					$sql = mysqli_query($konek, "SELECT * FROM tbl_pesan where keterangan ='0' LIMIT ".$limit_start.",".$limit);
					$no = $limit_start + 1;
					while($data = mysqli_fetch_array($sql)){
					?>
						<tr>
							<td> <?php echo $no; ?></td>
							<td> <?php echo $data['nama']; ?></td>
							<td> <?php echo $data['hp']; ?></td>
							<td> <?php echo $data['email']; ?></td>
							<td> <?php echo $data['pesan']; ?></td>
							<td> <?php echo $data['tanggal']; ?> </td>
						<td> <a href="edit_pesan.php?id=<?php echo base64_encode($data['kode']); ?>">Baca</a></td>
						</tr>
					<?php
						$no++; // Tambah 1 setiap kali looping
					}
					?>
				</table>
			</div>
			</div>
			<!--
			-- Buat Paginationnya
			-- Dengan bootstrap, kita jadi dimudahkan untuk membuat tombol-tombol pagination dengan design yang bagus tentunya
			-->
			


			<ul class="pagination">
				<!-- LINK FIRST AND PREV -->
				<?php
				if($page == 1){ // Jika page adalah page ke 1, maka disable link PREV
				?>
					<li class="disabled"><a href="#">Halaman Pertama</a></li>
					<li class="disabled"><a href="#">&laquo;</a></li>
				<?php
				}else{ // Jika page bukan page ke 1
					$link_prev = ($page > 1)? $page - 1 : 1;
				?>
					<li><a href="tampil_pesan.php?page=1">Halaman Pertama</a></li>
					<li><a href="tampil_pesan.php?page=<?php echo $link_prev; ?>">&laquo;</a></li>
				<?php
				}
				?>
				
				<!-- LINK NUMBER -->
				




				<?php
				// Buat query untuk menghitung semua jumlah data
				$sql2 = mysqli_query($konek, "SELECT COUNT(*) AS jumlah FROM tbl_pesan");
				$get_jumlah = mysqli_fetch_array($sql2);
				
				$jumlah_page = ceil($get_jumlah['jumlah'] / $limit); // Hitung jumlah halamannya
				$jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
				$start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
				$end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number
				
				for($i = $start_number; $i <= $end_number; $i++){
					$link_active = ($page == $i)? ' class="active"' : '';
				?>
					<li<?php echo $link_active; ?>><a href="tampil_pesan.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php
				}
				?>
				
				<!-- LINK NEXT AND LAST -->
				<?php
				// Jika page sama dengan jumlah page, maka disable link NEXT nya
				// Artinya page tersebut adalah page terakhir 
				if($page == $jumlah_page){ // Jika page terakhir
				?>
					<li class="disabled"><a href="#">&raquo;</a></li>
					<li class="disabled"><a href="#">Halaman Terakhir</a></li>
				<?php
				}else{ // Jika Bukan page terakhir
					$link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
				?>
					<li><a href="tampil_pesan.php?page=<?php echo $link_next; ?>">&raquo;</a></li>
					<li><a href="tampil_pesan.php?page=<?php echo $jumlah_page; ?>">Halaman Terakhir</a></li>
				<?php
				}
				?>
			</ul>
		<div>
	</div>

	<?php include'footer.php'; ?>