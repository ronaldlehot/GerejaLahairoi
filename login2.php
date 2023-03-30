<?php
    session_start();
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="assets/img/gmit.png" rel="icon">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/style1.css"> -->
    <link href="assets/css/style1.css" rel="stylesheet">
</head>
<body>


    <div class="login-box">
        <h1> Halaman Login</h1>
        <form action="" method="POST">
            <p> Username</p>
            <input type="text" name="Username" placeholder="Masukan Username">
            <p>Password</p>
            <input type="Password" name="Password" placeholder="Masukan Password">
            <input type="submit" name="submit" value="Login">
            <a href = "index.php">Kembali ke Beranda</a>
        </form>

        <?php
        if(isset($_POST['submit'])) {

            $user = $_POST['Username'];
            $pass = $_POST['Password'];

            $cek = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '".$user."'");
            if(mysqli_num_rows($cek) > 0){
                $d = mysqli_fetch_object($cek);
                if(md5($pass) == $d->Password){

                    $SESSION['satus_login'] = true;
                    $SESSION['uid']         = $d->id_pengguna;
                    $SESSION['uname']       = $d->Nama;

                    echo "<script>window.location = 'admin/index1.php'</script>";

                }else{
                    echo 'Password Salah';
                }

            }else{
                echo 'Username tidak ditemukan';
            }
        }
        ?>

    </div>
</body>
</html>