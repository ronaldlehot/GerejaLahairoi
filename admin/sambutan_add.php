<?php 
include'header.php'; ?>
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              <form method="POST" enctype="multipart/form-data">
        </div>
      </section>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="master.php">Home</a></li>
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Posting Renungan</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Kategori</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtnama" class="form-control is-valid" placeholder="Kategori">
                      </div>
                </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Judul</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtjabatan" class="form-control is-valid" placeholder="Judul Renungan">
                      </div>
                </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Isi Renungan</label>
                      <div class="col-sm-10">
                        <textarea class="ckeditor" id="ckedtor" name="txtkonten"></textarea>
                      </div>
                  </div>
                 
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Status</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtstatus" class="form-control is-valid" placeholder="Status Renungan">
                      </div>
                  </div>
                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Gambar</label>
                      <div class="col-sm-10">
                        <input type="file" name="txtgambar" class="form-control is-valid" placeholder="Gambar">
                      </div>
                  </div>

                <input type="submit" name="btnsimpan" class="btn btn-primary" value="Posting Renungan">
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
                                  $txtjabatan=$_POST['txtjabatan'];
                                  $txtkonten=$_POST['txtkonten'];
                                  $txtstatus=$_POST['txtstatus'];
                                  $nama_file   = $_FILES['txtgambar']['name'];
                                  $lokasi_file = $_FILES['txtgambar']['tmp_name'];
                                $simpan = mysqli_query($konek,"INSERT INTO tbl_sambutan (nama,jabatan,konten,status,gambar) VALUES ('$txtnama','$txtjabatan','$txtkonten','$txtstatus','$nama_file')");
                                if(!empty($lokasi_file)){
                          move_uploaded_file($lokasi_file, "../assets/img/team/$nama_file");
                          // echo "Data Berhasil di simpan";
                            ?>
                            <script type="text/javascript">
                            alert('Data Anda Berhasil di Simpan');
                            document.location.href="sambutan_tampil.php";
                            </script>
                          <?php
                          }
                        }
                      ?>



 


<?php include'footer.php'; ?>