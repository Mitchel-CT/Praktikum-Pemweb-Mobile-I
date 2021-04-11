<?php
require("function.php");
if (isset($_POST["insert"])) {
    if (insert($_POST > 0)) {
        echo "<script>
            alert('Data Berhasil Ditambah');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Ditambah');
            document.location.href = 'index.php';
        </script>";
    }
}   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <a href="index.php">home</a>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="id_pegawai">id_pegawai</label>
                <input type="text" name="id_pegawai" id="id_pegawai">
            </li>
            <li>
                <label for="nama">nama</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="id_divisi">id_divisi</label>
                <input type="text" name="id_divisi" id="id_divisi">
            </li>
            <li>
                <button type="submit" name="insert">insert</button>
            </li>
        </ul>
    </form>
</body>
</html>