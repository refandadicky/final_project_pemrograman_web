<?php
	include 'koneksi.php';
    $id_pesanan = $_GET['id'];

    $sql = "DELETE FROM pesanan_pakaian WHERE id_pesanan= '$id_pesanan'";
    $query = mysqli_query($connect, $sql);

	if($query){
		header("location: cart.php");
	} else{
		echo "Hapus Data Gagal.";
	}
?>