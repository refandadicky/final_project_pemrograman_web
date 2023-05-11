<?php
	include 'koneksi.php';
    $id_pesanan = $_GET['id'];

    $sql = "DELETE FROM `project`.`pesanan_pakaian`";
    $query = mysqli_query($connect, $sql);

	if($query){
		header("location: home.php");
	} else{
		echo "Hapus Data Gagal.";
	}
?>