<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="db_nilai";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    echo "Koneksi Gagal";
}
?>

<html>
<body>
<h3> Data Nilai Mahasiswa</h3>
<table border=1>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Presensi</th>
        <th>Tugas</th>
        <th>UTS</th>
        <th>UAS</th>
    </tr>
    <?php
    $sql="SELECT * FROM nilai";

    $result=mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)> 0){
        while ($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['nim']."</td>";
            echo "<td>".$row['presensi']."</td>";
            echo "<td>".$row['tugas']."</td>";
            echo "<td>".$row['uts']."</td>";
            echo "<td>".$row['uas']."</td>";
            echo "</tr>";
        }
    }else{
        echo "Tidak ada Data";
    }
    ?>
    </table>
    <a href="index.php"> Tambah Data</a>
</body>
</html>


