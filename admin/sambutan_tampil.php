
<?php include'header.php';
error_reporting(0); ?>

<head>
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

	<div class="card-body">
		<h3>Sambutan</h3>
                  <div class="table-responsive">

                    <table class="table">


					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Status</th>
						<th colspan="2">Aksi</th>
					</tr>
					<?php
					// Include / load file koneksi.php
					
					// Cek apakah terdapat data page pada URL
					$page = (isset($_GET['page']))? $_GET['page'] : 1;
					
					$limit = 10; // Jumlah data per halamannya
					
					// Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
					$limit_start = ($page - 1) * $limit;
					
					// Buat query untuk menampilkan data siswa sesuai limit yang ditentukan
					$sql = mysqli_query($konek, "SELECT * FROM tbl_sambutan LIMIT ".$limit_start.",".$limit);
					
					$no = $limit_start + 1; // Untuk penomoran tabel
					while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
					?>
						<tr>
							<td> <?php echo $no; ?></td>
							<td> <?php echo $data['nama']; ?></td>
							<td> <?php echo $data['jabatan']; ?></td>
							<td> <?php echo $data['status']; ?></td>
							<td> <a href="sambutan_edit.php?id=<?php echo base64_encode($data['kode']); ?>">Ubah</a></td>
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
			


		<div>
<?php include'footer.php'; ?>