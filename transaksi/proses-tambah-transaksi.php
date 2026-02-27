<?php
include("../koneksi.php");

if(isset($_POST['tambah'])){

    $kodetrx = $_POST['kode_transaksi'];
    $kodebrg = $_POST['kode_brg'];
    $nama = $_POST['nama_brg'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $tothrg = $_POST['total_bayar'];
    $tgl = $_POST['tanggal'];
    
    $sql ="INSERT INTO transaksi (kode_transaksi, kode_brg, nama_brg, harga, jumlah, total_bayar, tanggal)
           VALUE ('$kodetrx', '$kodebrg', '$nama', '$harga', '$jumlah', '$tothrg', '$tgl')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: data-transaksi.php?status=sukses');
    }else{
        header('Location: data-transaksi.php?status=gagal');
    }
}else{
    die("Akses dilarang...!");
}

?>