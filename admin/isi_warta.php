<?php 

include '../koneksi.php';
$query = mysqli_query($konek, "SELECT * FROM tbl_warta_jemaat WHERE id = 2");
$visi_misi = mysqli_fetch_assoc($query);




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	
</head>
<body>

<?php include'header.php'; ?>

<ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="master.php">Home</a></li>
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Ubah Warta Jemaat</li> </li>
</ul>

	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							<div class="float-left">
								Warta Jemaat
							</div>
							
						</div>
					</div>
					<div class="card-body">
						<?php if(isset($_SESSION['sukses'])) : ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Berhasil!</strong> <?= $_SESSION['sukses'] ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php unset($_SESSION['sukses']) ?>
						<?php elseif(isset($_SESSION['gagal'])) : ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>Gagal!</strong> <?= $_SESSION['gagal'] ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php unset($_SESSION['gagal']) ?>
						<?php endif; ?>
						<form method="POST" action="proses_visi_misi.php">
							<div class="form-group">
								<textarea name="isi_warta" id="ckeditor" class="ckeditor form-control" style="height: 300px;"><?= $visi_misi['isi_warta'] ?></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" onclick="return confirm('Apakah anda yakin ?')" name="ubah">Ubah</button>
								<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ?')">Batal</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    <script src="../resources/js/jquery.js"></script>
	<script src="../resources/js/bootstrap.min.js"></script>
	<script src="../resources/ckeditor/ckeditor.js"></script>
	<?php include'footer.php'; ?>
</body>
</html>