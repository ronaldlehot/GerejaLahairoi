<?php 
include'header.php'; 
;
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
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active"> Posting Ibadah Pemuda</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Lingkungan</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtlingkungan" class="form-control is-valid" placeholder="Lingkungan">
                      </div>
                </div>
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">TANGGAL POSTING</label>
                      <div class="col-sm-10">
                        <input type="date" name="txttanggal" class="form-control is-valid">
                      </div>
                  </div>

                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Tempat</label>
                      <div class="col-sm-10">
                        <input type="text" name="txttempat" class="form-control is-valid" placeholder="Tempat Ibadah">
                      </div>
                </div>
                  
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Pemimpin</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtpemimpin" class="form-control is-valid" placeholder="Pemimpin Ibadah">
                      </div>
                </div>

                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Keterangan</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtketerangan" class="form-control is-valid" placeholder="Keterangan Ibadah">
                      </div>
                </div>
                  
                  
                 
                  
                 
                 

                <input type="submit" name="btnsimpan" class="btn btn-primary" value="POSTING Ibadah Pemudah">
                </div>
              </div>
          </div>
      </section> 
      </form>




                        <?php
                            
                                if (isset($_POST["btnsimpan"])){
                                  // $txtkategori = mysql_real_escape_string($_POST['txtkategori']);
                                  // $txtkategori =$_POST['txtkategori'];
                                  $txtlingkungan=$_POST['txtlingkungan'];
                                  $txttanggal=$_POST['txttanggal'];
                                  $txttempat=$_POST['txttempat'];
                                  $txtpemimpin=$_POST['txtpemimpin'];
                                  $txtketerangan=$_POST['txtketerangan'];
                                $simpan = mysqli_query($konek,"INSERT INTO tbl_pemuda (lingkungan,tanggal,tempat,pemimpin,keterangan) VALUES ('$txtlingkungan','$txttanggal','$txttempat','$txtpemimpin','$txtketerangan')");
                                
                            ?>
                            <script type="text/javascript">
                            alert('Data Anda Berhasil di Simpan');
                            // document.location.href="blog_add.php";
                            </script>
                          <?php
                          }
                        
                      ?>



 


<?php include'footer.php'; ?>