<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN ADMIN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontastic.css">
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="img/logo.jpg">
<!-- <style>
Mengatur tampilan form login
.login-page {
  background-color: #f9f9f9;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.form-inner {
  width: 100%;
  max-width: 400px;
  padding: 50px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
}

.logo {
  margin-bottom: 30px;
}

.input-material {
  width: 100%;
  padding: 15px 20px;
  border: none;
  border-bottom: 1px solid #ddd;
  background-color: transparent;
  color: #333;
  font-size: 16px;
  font-weight: 500;
  transition: border-bottom-color 0.5s;
}

.input-material:focus::-webkit-input-placeholder {
  color: transparent;
}

.input-material:focus:-moz-placeholder {
  color: transparent;
}

.input-material:focus::-moz-placeholder {
  color: transparent;
}

.input-material:focus:-ms-input-placeholder {
  color: transparent;
}

.input-material:focus + .label-material {
  color: #2e86de;
}

.label-material {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  font-size: 16px;
  font-weight: 400;
  border-bottom: 1px solid #ddd;
  color: #333;
}

.btn-primary {
  background-color: #2e86de;
  border: none;
  border-radius: 20px;
  padding: 12px 24px;
  color: #fff;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
  transition: background-color 0.5s;
}

.btn-primary:hover,
.btn-primary:focus {
  background-color: #1e56a0;
  outline: none;
}
</style> -->
  </head>
  <body>
    <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <!-- <div class="col-lg-8"> -->
          <div class="form-inner">
            <div class="logo text-uppercase"><span></span><strong class="text-primary">AREA LOGIN ADMIN</strong></div>



            <form  action="login.php" method="POST">
              <div class="form-group-material">
                <input id="login-username" type="text" name="txtusername" required data-msg="Please enter your username" class="input-material">
                <label for="login-username" class="label-material">Username</label>
              </div>
              <div class="form-group-material">
                <input id="login-password" type="password" name="txtpassword" required data-msg="Please enter your password" class="input-material">
                <label for="login-password" class="label-material">Password</label>
              </div> 
               <button type="submit" name="btnlogin" class="btn btn-primary">LOGIN</button>
               <h5> <a href="../index.php">Back</a></h5>
              </div>
            </form>
          <div class="copyrights text-center">
          </div>
        </div>
      </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>