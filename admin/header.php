<?php include'../koneksi.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Panel Administrator Lahairoi Tuak Sabu </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"> -->
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/icon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/admin.png" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Admin</h2><span>Lahairoi Tuak Sabu</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="master.php" class="brand-small text-center"> <strong>JLOT</strong><strong class="text-primary"></strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Panel</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="master.php"> <i class="icon-home"></i>HOME</a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Master</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="blog_add.php">Tambah Renungan </a></li>
                <li><a href="blog_tampil.php">Daftar Renungan</a></li>
                
                <li><a href="ibadahpemuda_add.php">Tambah Ibadah Pemuda</a></li>
                <li><a href="ibadahpemuda_tampil.php">Daftar Ibadah Pemuda</a></li>
                
                <li><a href="kaumbapa_add.php">Tambah Ibadah Kaum Bapak</a></li>
                <li><a href="kaumbapa_tampil.php">Daftar Ibadah Kaum Bapak</a></li>
                
                <li><a href="kaumwanita_add.php">Tambah Ibadah Perempuan GMIT</a></li>
                <li><a href="kaumwanita_tampil.php">Daftar Ibadah Perempuan GMIT</a></li>

                <li><a href="ibadahrt_add.php">Tambah Ibadah Rumah Tangga</a></li>
                <li><a href="ibadahrt_tampil.php">Daftar Ibadah Rumah Tangga</a></li>

                <li><a href="pendeta_add.php">Tambah Pendeta</a></li>
                <li><a href="pendeta_tampil.php">Daftar Pendeta</a></li>

                <li><a href="pegawai_add.php">Tambah Pegawai</a></li>
                <li><a href="pegawai_tampil.php">Daftar Pegawai</a></li>

                <li><a href="folio_add.php">Tambah Galeri</a></li>
                <li><a href="folio_tampil.php">Daftar Galeri</a></li>

                <li><a href="project_add.php">Tambah Berita</a></li>
                <li><a href="project_tampil.php">Daftar Berita</a></li>

                <!-- <li><a href="sambutan_add.php">Tambah sambutan</a></li> -->
                <li><a href="sambutan_tampil.php">Isi Sambutan</a></li>

                
                <li><a  href="isi_warta.php">Isi Warta</a></li>
                <li><a  href="isi_sejarah.php">Isi Sejarah</a></li>
                <li><a  href="isi_visi_misi.php">Isi Visi Misi</a></li>

                

                <!-- <li><a href="video_add.php">Input Video</a></li>
                <li><a href="video_tampil.php">Daftar Video</a></li> -->    
              </ul>
            </li>
            
        </div>
        <div class="admin-menu">
          <h5 class="sidenav-heading">Pesan</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="tampil_pesan.php"> <i class="icon-screen"> </i>Pesan Masuk</a></li>
            <li> <a href="tampil_pesan_read.php"> <i class="icon-screen"> </i>Pesan Telah Dibaca</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="master.php" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span></span><strong class="text-primary">Lahairoi Tuak Sabu</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->

              
                <!-- Log out-->
                <li class="nav-item"><a href="keluar.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Keluar</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>




