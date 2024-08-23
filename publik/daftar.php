<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../app/app.php'); ?>
    <?php include('../app/db.php'); ?>
    <?php include('../kontrol/pengguna_kontrol.php');?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../aset/css/style.css">
</head>
<body>

    <form action="" method="post">

        Nama Pengguna <br>
        <input type="text" name="nama" pattern="[A-Za-z0-9]+">

        Alamat Email <br>
        <input type="email" name="email">

        Kata Sandi: <br>
        <input type="password" name="sandi">

        Ulang Kata Sandi: <br>
        <input type="password" name="sandi_ok">


        <input type="submit" value="Daftar">
        <br />
        Punya akun? <a href="daftar.php">Masuk</a>

    </form>


    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $pass1 = md5($_POST['sandi']);
            $pass2 = md5($_POST['sandi_ok']);
            
            $pasCek = $pengguna->sandiCek($pass1, $pass2);
            if($pasCek){
                $emilCek = $pengguna->emailCek($email);
                if($emilCek){
                    echo "Alamat email sudah ada";
                }else {
                    $register = $pengguna->registrasi($nama, $email, $pass1);
                    if($register){
                        fungsi_redirek('index.php');
                    }
                }
            } else {
                echo "Kata sandi tidak cocok";
            }
        }
    ?>



<script>
    if (window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
</script>
</body>
</html>