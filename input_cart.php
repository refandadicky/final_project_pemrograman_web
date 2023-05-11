<?php
    include "koneksi.php";

    $id_pakaian = $_POST['id_pakaian'];
    $id_ukuran = $_POST['id_ukuran'];

    $sql = "INSERT INTO pesanan_pakaian ( id_pakaian, id_ukuran_pakaian) VALUES ('$id_pakaian', '$id_ukuran')";
    $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));

    if ($query)
        header("location: home.php");
    else
        echo ("Gagal Input Data");
?>