<?php
require("function.php");
$id_pegawai = $_GET["update"];
$data = show("SELECT * FROM pegawai WHERE id_pegawai = $id_pegawai");
if (isset($_POST["ubah"])) {
    if (update($_GET > 0)) {
        echo "<script>
            alert('Data Berhasil Diupdate');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Diupdate');
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
    <title>Update</title>
</head>
<body>
    <a href="index.php">home</a>
    <form action="" method="POST">
        <?php
        foreach ($data as $d) {
        ?>
            <ul>
                <li>
                    <label for="id_pegawai">id_pegawai</label>
                    <input type="text" name="id_pegawai" id="id_pegawai" value=<?php echo $d["id_pegawai"]; ?> readonly>
                </li>
                <li>
                    <label for="nama">nama</label>
                    <input type="text" name="nama" id="nama" value=<?php echo $d["nama"]; ?>>
                </li>
                <li>
                    <label for="id_divisi">id_divisi</label>
                    <input type="text" name="id_divisi" id="id_divisi" value=<?php echo $d["id_divisi"]; ?>>
                </li>
                <li>
                    <button type="submit" name="ubah">update</button>
                </li>
            </ul>
        <?php
        }
        ?>
    </form>
</body>
</html>