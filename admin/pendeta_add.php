<?php 
include'header.php';
include'../koneksi.php';

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
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Posting Profil Pendeta</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtnama" class="form-control is-valid" placeholder="Nama Pendeta">
                      </div>
                </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Periode</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtperiode" class="form-control is-valid" placeholder="Periode Pelayanan">
                      </div>
                </div>
                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Gambar</label>
                      <div class="col-sm-10">
                        <input type="file" name="txtgambar" class="form-control is-valid" placeholder="Gambar">
                      </div>
                  </div>

                <input type="submit" name="btnsimpan" class="btn btn-primary" value="Posting Profil Pendeta">
                </div>
              </div>
          </div>
      </section> 
      </form>




                        <?php
                                if (isset($_POST["btnsimpan"])){
                                  // $txtkategori = mysql_real_escape_string($_POST['txtkategori']);
                                  // $txtkategori =$_POST['txtkategori'];
                                  $txtnama=$_POST['txtnama'];
                                  $txtperiode=$_POST['txtperiode'];
                                  $nama_file   = $_FILES['txtgambar']['name'];
                                  $lokasi_file = $_FILES['txtgambar']['tmp_name'];
                                $simpan = mysqli_query($konek,"INSERT INTO tbl_pendeta (nama,periode,gambar) VALUES ('$txtnama','$txtperiode','$nama_file')");
                                if(!empty($lokasi_file)){
                          move_uploaded_file($lokasi_file, "../assets/img/team/$nama_file");
                          // echo "Data Berhasil di simpan";
                            ?>
                            <script type="text/javascript">
                            alert('Data Anda Berhasil di Simpan');
                            document.location.href="pendeta_tampil.php";
                            </script>
                          <?php
                          }
                        }
                      ?>



 


<?php include'footer.php'; ?>