<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>UTS Pemrograman Web 2022/2023</h2>
        <form action="hasil.php" method="post">
            <label for="">Nama </label>
            <label for="">:</label>
            <input type="text" name="nama"><br>
            <label for="">Nim</label>
            <label for="">:</label>
            <input type="text" name="nim"><br>
            <label for="">Presensi</label>
            <label for="">:</label>
            <input type="text" name="presensi"><label for="">10%</label>
            <label for="">Tugas</label>
            <label for="">:</label>
            <input type="text" name="tugas"><label for="">25%</label>
            <label for="">UTS</label>
            <label for="">:</label>
            <input type="text" name="uts"><label for="">30%</label>
            <label for="">UAS</label>
            <label for="">:</label>
            <input type="text" name="uas"><label for="">35%</label>
            <button type="submit">Proses</button>
        </form>
        <br>
        <a href="select.php">Lihat Data</a>
    </div>
</body>
</html>