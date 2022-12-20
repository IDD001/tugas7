<?php
$servername="localhost";
$username="root";
$password="";
$dbname="db_nilai";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
    echo "koneksi gagal";
}

$nama=$_POST['nama'];
$nim=$_POST["nim"];
$presensi = $_POST["presensi"];
$tugas = $_POST["tugas"];
$uts = $_POST["uts"];
$uas = $_POST["uas"];

$sql = "insert into nilai(nama, nim, presensi, tugas, uts, uas) values('$nama', '$nim', '$presensi',
'$tugas', '$uts', '$uas')";

if(mysqli_query($conn, $sql)){
    echo "Data berhasil disimpan";
    header("Location:select.php");
}else{
    echo "Data gagal disimpan";
}

?>
