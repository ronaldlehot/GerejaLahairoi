<?php 

include'../koneksi.php';
$visimi = mysqli_real_escape_string($konek, isset($_POST['isi_visi_misi']) ? $_POST['isi_visi_misi'] : '');
$query = mysqli_query($konek, "UPDATE tbl_visi_misi SET isi_visi_misi = '$visimi' WHERE id = 2");

if($query){
	$_SESSION['sukses'] = 'Visi Misi Berhasil Diubah!';
	header('Location: isi_visi_misi.php');
} else {
	$_SESSION['gagal'] = 'Visi Misi Gagal Diubah!';
	header('Location: isi_visi_misi.php');
}