<?php include'../koneksi.php';
if (isset($_GET[id])){
	$qry=mysqli_query($konek,"delete from tbl_pendeta where kode='".$_GET["id"]."'");
	$data  = mysqli_fetch_array($qry);

	$lokasi=$data['gambar'];
    $hapus_gambar="../img/team/$lokasi";
    unlink($hapus_gambar);
		header('location: pendeta_tampil.php');

}

?>