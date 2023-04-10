<?php include'../koneksi.php';
if (isset($_GET[id])){
	$qry=mysqli_query($konek,"delete from tbl_ibadah_rt where kode='".$_GET["id"]."'");
	$data  = mysqli_fetch_array($qry);


		header('location: ibadahrt_tampil.php');

}

?>