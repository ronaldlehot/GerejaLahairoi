<?php include'header.php'; 

error_reporting(0);
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_file WHERE kategori='$id'");
$data  = mysqli_fetch_array($sqlku);

?>
<head>
	<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Berita Terbaru</h2>
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li>Berita Terbaru</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs -->
<title>Gereja Lahairoi Tuak Sabu  <?php echo $data['judul']; ?></title>
<link href="assets/css/news.css" rel="stylesheet">
<link href="assets/css/news_responsive.css" rel="stylesheet">
</head>
<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="assets/img/slide/Lahairoi1.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<h3> Hari : <?php echo $data['kategori']; ?>  Tanggal : <?php echo $data['tgl_posting']; ?></h3>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- News -->


	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Posts -->
				<div class="col-lg-8">
					<div class="news_posts">
						<!-- News Post -->
						<div class="news_post">
							<div class="news_image">
								<p>Tanggal Posting : <?php echo $data['tgl_posting']; ?> Post : <?php echo $data['user']; ?></p>
							
							</div>
							<p> <?php echo $data['konten']; ?></p>
						</div>
					</div>
				</div>
				<!-- Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Search -->
						<div class="sidebar_search">
							<form action="#" id="sidebar_search_form" class="sidebar_search_form">
								<input type="text" class="search_input" placeholder="Search" required="required">
								<button class="search_button"><img src="images/search.png" alt=""></button>
							</form>
						</div>

						<!-- Categories -->
						<div class="sidebar_categories sidebar_section">
							<div class="sidebar_section_title">
								<div class="sidebar_title">Berita</div>
							</div>
							<ul>
								<?php
						           $qry = mysqli_query($konek,"SELECT * FROM tbl_file ");
						           while ($data=mysqli_fetch_assoc($qry)) {
						          ?>

								<li><a href="kegiatan_detail.php?id=<?php echo base64_encode($data['judul']); ?>">#. <?php echo $data['judul']; ?></a></li>
								<?php } ?>
							</ul>
						</div>
						<!-- Archives -->
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include'footer.php'; ?>