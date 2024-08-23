<?php include('../app/app.php'); ?>
<?php include('../app/db.php'); ?>
<?php include('../kontrol/login_kontrol.php');?>

<?php
    $keluar = $login->pengguna_logout();
    if($keluar){
        fungsi_redirek('publik/login.php');
    } else {
        echo "Laporkan Masalah";
    }

?>