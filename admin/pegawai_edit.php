<?php 
include'header.php'; 
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_pegawai WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
?>
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              <form method="POST" enctype="multipart/form-data">
        </div>
      </section>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="master.php">Home</a></li>
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Ubah Profil Pegawai</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtnama" value="<?php echo $data['nama'] ?>" class="form-control is-valid" placeholder="Nama pegawai">
                      </div>
                </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Jabatan</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtjabatan" value="<?php echo $data['jabatan'] ?>" class="form-control is-valid" placeholder="jabatan">
                      </div>
                </div>
      
                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Foto Pegawai</label>
                      <div class="col-sm-10">
                        <input type="file" name="txtgambar" class="form-control is-valid" value="<?php echo $data['gambar'] ?>" placeholder="Foto pegawai">
                      </div>
                  </div>

                <input type="submit" name="btnedit" class="btn btn-primary" value="Update Profil pegawai">
                </div>
              </div>
          </div>
      </section> 
      </form>
            <?php
            
                 if (isset($_POST["btnedit"])){
                                  $txtnama =$_POST['txtnama'];
                                  $txtjabatan=$_POST['txtjabatan'];

                                  $nama_file   = $_FILES['txtgambar']['name'];
                                  $lokasi_file = $_FILES['txtgambar']['tmp_name'];
                  $edit = mysqli_query($konek,"UPDATE  tbl_pegawai SET nama='$txtnama',jabatan='$txtjabatan',gambar='$nama_file' WHERE kode='$id'");
                  if ($edit){
                    if(!empty($lokasi_file)){
                    move_uploaded_file($lokasi_file, "../img/team/$nama_file");

                    ?>

                    <script type="text/javascript">
                      document.location.href="pegawai_tampil.php";
                    </script>
                    <?php
                  }
                  else{
                    echo "Terjadi kesalahan";
                  }
                }
              }
              ?>

    <?php include'footer.php'; ?>