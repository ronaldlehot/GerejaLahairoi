<?php 
include'header.php'; 

//isset
$id = base64_decode($_GET["id"]);
// $id = isset($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_ibadah_rt WHERE kode='$id'");
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
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Edit Ibadah Rumah Tangga</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Lingkungan</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtlingkungan" value="<?php echo $data['lingkungan'] ?>" class="form-control is-valid" placeholder="Lingkungan">
                      </div>
                </div>

                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Wilayah</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtwilayah" value="<?php echo $data['wilayah'] ?>" class="form-control is-valid" placeholder="Wilayah">
                      </div>
                </div>

                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Rumah Keluarga</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtrumah_keluarga" value="<?php echo $data['rumah_keluarga'] ?>" class="form-control is-valid" placeholder="Rumah Keluarga">
                      </div>
                </div>

                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Pemimpin</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtpemimpin" value="<?php echo $data['pemimpin'] ?>" class="form-control is-valid" placeholder="Pemimpin Ibadah">
                      </div>
                </div>
                
                <input type="submit" name="btnedit" class="btn btn-primary" value="Update">
                </div>
              </div>
          </div>
      </section> 
      </form>
            <?php
                 if (isset($_POST["btnedit"])){
                    $txtlingkungan=$_POST['txtlingkungan'];
                    $txtwilayah=$_POST['txtwilayah'];
                    $txtrumah_keluarga=$_POST['txtrumah_keluarga'];
                    $txtpemimpin=$_POST['txtpemimpin'];              
                    $edit= mysqli_query($konek,"UPDATE  tbl_ibadah_rt SET lingkungan='$txtlingkungan', wilayah='$txtwilayah', rumah_keluarga='$txtrumah_keluarga',pemimpin='$txtpemimpin' WHERE kode='$id'");
                  if ($edit){
                    if(!empty($edit)){
                    ?>
                    <script type="text/javascript">
                        document.location.href="ibadahrt_tampil.php";
                    </script>
                    <?php
                  }else{
                    echo "Terjadi kesalahan";
                  }
                }
              }
              ?>

    <?php include'footer.php'; ?>