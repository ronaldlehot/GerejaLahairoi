<?php 

include'../koneksi.php';
$sejarah_gereja = mysqli_real_escape_string($konek, isset($_POST['isi_sejarah']) ? $_POST['isi_sejarah'] : '');
$query = mysqli_query($konek, "UPDATE tbl_sejarah SET isi_sejarah= '$sejarah_gereja' WHERE id = 1");

if($query){
	$_SESSION['Sukses'] = 'Sejarah Gereja Berhasil Diubah!';
	header('Location: isi_sejarah.php');
} else {
	$_SESSION['Gagal'] = 'Sejarah Gereja Diubah!';
	header('Location: isi_sejarah.php');
}