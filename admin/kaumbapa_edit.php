<?php 
include'header.php'; 

// $id = isset($_GET["id"]);
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_kaum_bapa WHERE kode='$id'");
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
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Edit Ibadah Kaum Bapak</li> </li>
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
                      <label class="col-sm-2 form-control-label">Tanggal</label>
                      <div class="col-sm-10">
                        <input type="date" name="txttanggal" class="form-control is-valid">
                      </div>
                </div>

                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Tempat</label>
                      <div class="col-sm-10">
                        <input type="text" name="txttempat" value="<?php echo $data['tempat'] ?>" class="form-control is-valid" placeholder="Tempat Ibadah">
                      </div>
                </div>

                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Asal Lingkungan</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtasal_lingkungan" value="<?php echo $data['asal_lingkungan'] ?>" class="form-control is-valid" placeholder="Asal Lingkungan">
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
                    $txttanggal=$_POST['txttanggal'];
                    $txttempat=$_POST['txttempat'];
                    $txtasal_lingkungan=$_POST['txtasal_lingkungan'];
                    $txtpemimpin=$_POST['txtpemimpin'];              
                    $edit= mysqli_query($konek,"UPDATE  tbl_kaum_bapa SET lingkungan='$txtlingkungan', tanggal='$txttanggal', tempat='$txttempat', asal_lingkungan='$txtasal_lingkungan', pemimpin='$txtpemimpin' WHERE kode='$id'");
                  if ($edit){
                    if(!empty($edit)){
                    ?>
                    <script type="text/javascript">
                        document.location.href="kaumbapa_tampil.php";
                    </script>
                    <?php
                  }else{
                    echo "Terjadi kesalahan";
                  }
                }
              }
              ?>

    <?php include'footer.php'; ?>