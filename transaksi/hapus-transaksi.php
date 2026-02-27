<?php
include 'koneksi.php';

$kode = $_GET['kode'];

mysqli_query($koneksi, "DELETE FROM transaksi WHERE kode_transaksi='$kode'");

header("location:transaksi.php");
?>