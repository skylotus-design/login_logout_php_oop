<?php include('../app/app.php'); ?>
<?php include('../app/db.php'); ?>
<?php include('../kontrol/pengguna_kontrol.php');?>

<?php
    $keluar = $pengguna->pengguna_logout();
    if($keluar){
        fungsi_redirek('publik/login.php');
    } else {
        echo "Laporkan Masalah";
    }

?>