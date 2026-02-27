<?php
include 'koneksi.php';

$kode = $_GET['kode'];
$data = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE kode_transaksi='$kode'");
$row = mysqli_fetch_array($data);

if(isset($_POST['update'])){

    $kode_brg = $_POST['kode_brg'];
    $nama = $_POST['nama_brg'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $total = $harga * $jumlah;
    $tanggal = $_POST['tanggal'];

    mysqli_query($koneksi, "UPDATE transaksi SET
        kode_brg='$kode_brg',
        nama_brg='$nama',
        harga='$harga',
        jumlah='$jumlah',
        total_bayar='$total',
        tanggal='$tanggal'
        WHERE kode_transaksi='$kode'
    ");

    header("location:transaksi.php");
}
?>

<h2>Edit Transaksi</h2>

<form method="POST">
Kode Barang <br>
<input type="text" name="kode_brg" value="<?= $row['kode_brg']; ?>"><br>

Nama Barang <br>
<input type="text" name="nama_brg" value="<?= $row['nama_brg']; ?>"><br>

Harga <br>
<input type="number" name="harga" value="<?= $row['harga']; ?>"><br>

Jumlah <br>
<input type="number" name="jumlah" value="<?= $row['jumlah']; ?>"><br>

Tanggal <br>
<input type="date" name="tanggal" value="<?= $row['tanggal']; ?>"><br><br>

<button type="submit" name="update">Update</button>
</form>