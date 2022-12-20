<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( insert($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'select.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'select.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data mahasiswa</title>
</head>
<body>
	<h1>Tambah data mahasiswa</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="nama">nama: </label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="nim">NIM : </label>
				<input type="text" name="nim" id="nim">
			</li>
			<li>
				<label for="presensi">Presensi :</label>
				<input type="text" name="presensi" id="presensi">
			</li>
			<li>
				<label for="tugas">Tugas :</label>
				<input type="text" name="tugas" id="tugas">
			</li>
			<li>
				<label for="uts">UTS :</label>
				<input type="text" name="uts" id="uts">
			</li>
			<li>
				<label for="uas">UAS :</label>
				<input type="text" name="uas" id="uas">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>