<?php 
include'header.php'; 
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_sambutan WHERE kode='$id'");
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
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Edit Sambutan</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtnama" value="<?php echo $data['nama'] ?>" class="form-control is-valid" placeholder="Nama">
                      </div>
                </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Jabatan</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtjabatan" value="<?php echo $data['jabatan'] ?>" class="form-control is-valid" placeholder="Jabatan">
                      </div>
                </div>
                  <div class="form-group row has-success">
                    <label class="col-sm-2 form-control-label">Isi Renungan</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" id="alamat" placeholder="Konten" name="txtkonten" required><?php echo $data['konten'];?></textarea>
                      </div>
                  </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Status</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtstatus" value="<?php echo $data['status'] ?>" class="form-control is-valid" placeholder="Status Renungan">
                      </div>
                  </div>
                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Gambar</label>
                      <div class="col-sm-10">
                        <input type="file" name="txtgambar" class="form-control is-valid" value="<?php echo $data['gambar'] ?>" placeholder="Gambar">
                      </div>
                  </div>

                <input type="submit" name="btnedit" class="btn btn-primary" value="Update Renungan">
                </div>
              </div>
          </div>
      </section> 
      </form>
            <?php
                 if (isset($_POST["btnedit"])){
                                  $txtnama =$_POST['txtnama'];
                                  $txtjabatan=$_POST['txtjabatan'];
                                  $txtkonten=$_POST['txtkonten'];
                                  $txtstatus=$_POST['txtstatus'];

                                  $nama_file   = $_FILES['txtgambar']['name'];
                                  $lokasi_file = $_FILES['txtgambar']['tmp_name'];
                  $edit = mysqli_query($konek,"UPDATE  tbl_sambutan SET nama='$txtnama',jabatan='$txtjabatan',konten='$txtkonten',status='$txtstatus',gambar='$nama_file' WHERE kode='$id'");
                  if ($edit){
                    if(!empty($lokasi_file)){
                    move_uploaded_file($lokasi_file, "../img/team/$nama_file");

                    ?>

                    <script type="text/javascript">
                      document.location.href="sambutan_tampil.php";
                    </script>
                    <?php
                  }else{
                    echo "Terjadi kesalahan";
                  }
                }
              }
              ?>

    <?php include'footer.php'; ?>