<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM latihan WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( update($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'select.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'select.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data mahasiswa</title>
</head>
<body>
	<h1>Ubah data mahasiswa</h1>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
		<ul>
			<li>
				<label for="nama">Nama: </label>
				<input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
			</li>
			<li>
				<label for="nim">NIM : </label>
				<input type="text" name="nim" id="nim" value="<?= $mhs["nim"]; ?>">
			</li>
			<li>
				<label for="presensi">Presensi :</label>
				<input type="text" name="presensi" id="presensi" value="<?= $mhs["presensi"]; ?>">
			</li>
			<li>
				<label for="tugas">Tugas :</label>
				<input type="text" name="tugas" id="tugas" value="<?= $mhs["tugas"]; ?>">
			</li>
			<li>
				<label for="uts">UTS :</label>
				<input type="text" name="uts" id="uts" value="<?= $mhs["uts"]; ?>">
			</li>
			<li>
				<label for="uas">UAS :</label>
				<input type="text" name="uas" id="uas" value="<?= $mhs["uas"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Update Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>