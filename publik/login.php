<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../app/app.php'); ?>
    <?php include('../app/db.php'); ?>
    <?php include('../kontrol/login_kontrol.php');?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../aset/css/style.css">
</head>
<body>

    <form action="" method="post">

        Alamat Email <br>
        <input type="email" name="email">

        Kata Sandi: <br>
        <input type="password" name="sandi"  pattern="[A-Za-z0-9]+">

        <input type="submit" value="Masuk" name="login">

        <br />
        Belum ada akun? <a href="daftar.php">Daftar</a>

    </form>


    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        
            $email = $_POST['email'];
            $pass = md5($_POST['sandi']);

            $masuk = $login->login_sekarang($email, $pass);
            if($masuk){
                fungsi_redirek('index.php');
            } else {
                echo "Kata Sandi/Username Salah";
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