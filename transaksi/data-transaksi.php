<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM transaksi");
?>

<h2>Daftar Transaksi</h2>
<a href="tambah-transaksi.php">+ Tambah Transaksi</a>
<br><br>

<table border="1" cellpadding="10">
<tr>
    <th>Kode Transaksi</th>
    <th>Kode Barang</th>
    <th>Nama Barang</th>
    <th>Harga</th>
    <th>Jumlah</th>
    <th>Total Bayar</th>
    <th>Tanggal</th>
    <th>Aksi</th>
</tr>

<?php while($row = mysqli_fetch_array($data)) { ?>
<tr>
    <td><?= $row['kode_transaksi']; ?></td>
    <td><?= $row['kode_brg']; ?></td>
    <td><?= $row['nama_brg']; ?></td>
    <td><?= $row['harga']; ?></td>
    <td><?= $row['jumlah']; ?></td>
    <td><?= $row['total_bayar']; ?></td>
    <td><?= $row['tanggal']; ?></td>
    <td>
        <a href="edit_transaksi.php?kode=<?= $row['kode_transaksi']; ?>">Edit</a> |
        <a href="hapus_transaksi.php?kode=<?= $row['kode_transaksi']; ?>" 
           onclick="return confirm('Yakin hapus?')">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>