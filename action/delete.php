<?php
include '../sys/koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM tb_mhsw WHERE mhsw_id='$id'");
if($query){
	echo "<script>alert('Delete Mahasiswa Berhasil');</script>";
	echo "<script>window.location.href = '../index.php';</script>";
}else{
	echo "<script>alert('Delete Mahasiswa Gagal');</script>";
	echo "<script>window.location.href = '../index.php';</script>";
}