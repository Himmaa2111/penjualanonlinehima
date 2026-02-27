<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "penjualan_online.hima";

$db = mysqli_connect($server, $user, $password, $database);

if(!$db){
    die("Gagal terhubung ke server :". mysqli_connect_error());
}

?>
<?php

$koneksi = mysqli_connect("localhost", "root", "", "penjualan_online");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>