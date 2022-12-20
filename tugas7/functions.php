<?php 
// koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nilai";
$conn = mysqli_connect($servername, $username, $password, $dbname);


function query($query) {
	global $conn;
	// var_dump($query);die;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function insert($data) {
	global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$nim = htmlspecialchars($data["nim"]);
	$presensi = htmlspecialchars($data["presensi"]);
	$tugas = htmlspecialchars($data["tugas"]);
	$uts = htmlspecialchars($data["uts"]);
	$uas = htmlspecialchars($data["uas"]);

	$query = "INSERT INTO latihan
				VALUES
			  ('', '$nama,', '$nim', '$presensi', '$tugas', '$uts',$uas)
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function delete($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM latihan WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function update($data) {
	global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$nim = htmlspecialchars($data["nim"]);
	$presensi = htmlspecialchars($data["presensi"]);
	$tugas = htmlspecialchars($data["tugas"]);
	$uts = htmlspecialchars($data["uts"]);
	$uas = htmlspecialchars($data["uas"]);

	$query = "UPDATE latihan SET
				nama = '$nama',
				nim = '$nim',
				presensi = '$presensi',
				tugas = '$tugas',
				uas = '$uas',
				uts = '$uts'
			  WHERE id = '$id'
			";
	// var_dump($query); die;
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}















?>