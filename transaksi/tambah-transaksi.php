
<?php
include("../koneksi.php");

$sql = "SELECT * FROM barang";
$query = mysqli_query($db, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tambah Transaksi</title>
</head>
<body>
    <header>
        <h3>Form Tambah Transaksi</h3>
    </header>
    <form action="proses-tambah-transaksi.php" method="post">
        <fieldset>
            <p>
                <label for="kode_trx">Kode transaksi: </label>
                <input type="number" name="kode_transaksi" />
            </p>
            <p>
                <label for="kode">Kode barang: </label>
                <select name="kode_brg" id="kode_brg">
                    <option value="" disabeled selected> --- pilih barang ---</option>
                    <?php
                    while($barang = mysqli_fetch_array($query)){
                        echo "<option value =".$barang['kode_brg']
                        ." data-nama = ".$barang['nama_brg']
                        ." data-hrg = ".$barang['harga'].">"
                       .$barang['kode_brg']." - " .$barang['nama_brg'] ."</option>";
                    }
                    ?>
                </select>
            </p>
             <p>
                <label for="nama-brg">Nama Barang: </label>
                <input type="text" name="nama-brg" id="nama-brg"/>
            </p>
             <p>
                <label for="harga-brg">Harga Barang: </label>
                <input type="number" name="harga-brg" id="harga-brg"/>
            </p>
            <p>
                <label for="jmlh-brg">jumlah Pembelian: </label>
                <input type="number" name="jmlh-brg" id="jmlh-brg" placeholder="jumlah transaksi" />
            </p>
             <p>
                <label for="tot-hrg">Total bayar: </label>
                <input type="number" name="tot-hrg" id="tot-hrg" />
            </p>
             <p>
                <label for="tanggal">Tanggal Transaksi: </label>
                <input type="date" name="tgl-transaksi" placeholder="tanggal transaksi" />
            </p>
            <p>
                <input type="submit" value="Tambah" name="tambah">
            </p>
        </fieldset>
    </form>
</body>
</html>

<script>
document.querySelector('#kode_brg').addEventListener('change', function(){
    const selectedOpt = this.options[this.selectedIndex];

    document.getElementById('nama-brg').value = selectedOpt.dataset.nama;
    document.getElementById('harga-brg').value = selectedOpt.dataset.hrg;
});

document.querySelector('#jmlh-brg').addEventListener('input', function(){
    const harga = document.getElementById('harga-brg').value;
    const jumlah = this.value;

    const total = harga * jumlah;

    document.getElementById('tot-hrg').value = total;
});
</script>