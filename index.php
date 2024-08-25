<?php include('app/app.php'); ?>
<?php include('app/db.php'); ?>
<?php include('kontrol/pengguna_kontrol.php');?>
<?php $pengguna->apakah_login(); ?>

<?php
    echo "<span style='color:red;'>ID Kamu: </span>" . $_SESSION['sesi_pengguna'];
?>

<Br /><br />

<a href="publik/logout.php">Keluar</a> | 
<a href="publik/halaman/halaman_test_01.php">Test Login 1</a> | 
<a href="publik/halaman/halaman_test_02.php">Test Login 2</a> | 
<a href="publik/halaman/halaman_test_03.php">Test Login 3</a> | 
