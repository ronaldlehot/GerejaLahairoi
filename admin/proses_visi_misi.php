<?php 

include'../koneksi.php';
$visi_misi = mysqli_real_escape_string($konek, isset($_POST['isi_warta']) ? $_POST['isi_warta'] : '');
$query = mysqli_query($konek, "UPDATE tbl_warta_jemaat SET isi_warta = '$visi_misi' WHERE id = 2");

if($query){
	$_SESSION['sukses'] = 'Visi Misi Berhasil Diubah!';
	header('Location: isi_warta.php');
} else {
	$_SESSION['gagal'] = 'Visi Misi Gagal Diubah!';
	header('Location: isi_warta.php');
}