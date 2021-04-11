<?php
require("function.php");
$data = show("SELECT * FROM pegawai");
if (isset($_GET["delete"])) {
    if (delete($_GET > 0)) {
        echo "<script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Dihapus');
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
    <title>Modul3</title>
</head>
<body>
    <form action="insertdata.php">
        <button>INSERT DATA</button>
    </form>
    <table border="1">
        <tr>
            <td>id_pegawai</td>
            <td>nama</td>
            <td>id_divisi</td>
            <td>pilihan</td>
        </tr>
        <?php
        foreach ($data as $d) {
        ?>
            <tr>
                <td><?php echo $d["id_pegawai"]; ?></td>
                <td><?php echo $d["nama"]; ?></td>
                <td><?php echo $d["id_divisi"]; ?></td>
                <td>
                    <form action="" method="GET">
                        <button type="submit" name="delete" value=<?php echo $d["id_pegawai"]; ?>>DELETE</button>
                    </form>
                    <form action="updatedata.php" method="GET">
                        <button type="submit" name="update" value=<?php echo $d["id_pegawai"]; ?>>UPDATE</button>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>