<?php
include 'koneksi.php';

$id = $_POST['id_pesanan'];
$id_ukuran = $_POST['id_ukuran'];

$sql = "UPDATE pesanan_pakaian SET id_ukuran_pakaian='$id_ukuran' WHERE id_pesanan='$id'";
$query = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query)
    header("location: cart.php");
else
    echo "Proses Edit Gagal";