
<?php 
include 'sys/koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM tb_mhsw");
?>

 <table border = "4" style="width: "50%" hight="20%">
 <tr>
 <td>NO</td>
 <td>NIM</td>
 <td>NAMA</td>
 <td>ALAMAT</td>
 <td colspan="2">ACTION</td>
 </tr>
	<a href="action/tambah.php">Tambah Data</a>
 <?php while($data = mysqli_fetch_array($query)){ ?>
 	<tr>
 		<td><?= $data[0] ?></td>
 		<td><?= $data[1] ?></td>
 		<td><?= $data[2] ?></td>
 		<td><?= $data[3] ?></td>
 		<td><a href="action/edit.php?id=<?= $data[0] ?>">Edit</a></td>
 		<td><a href="action/delete.php?id=<?= $data[0] ?>">Delete</a></td>
 	</tr>

 <?php } ?>
 