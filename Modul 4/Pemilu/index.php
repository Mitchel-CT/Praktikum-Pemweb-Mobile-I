<?php
include('connect.php');

$qpemilih =  mysqli_query($koneksi, "SELECT ID AS 'ID',Nama AS 'Nama' FROM pemilu;");
$rpemilih = mysqli_fetch_all($qpemilih, MYSQLI_ASSOC);

$qpemilu =  mysqli_query($koneksi, "SELECT Pilihan AS 'Pilihan',COUNT(Pilihan) AS 'Jumlah' FROM pemilu GROUP BY Pilihan;");
$rpemilu = mysqli_fetch_all($qpemilu, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <title>Pemilihan Umum</title>
</head>
<body>
<h1 align="center">PEMILIHAN KETUA HMTI 2022</h1>
<div class = "bd">
<form action="insertsuara.php" method="POST">
        <label>ID Pemilih</label><br/>
        <input type="text" name="ID"/>
        <br/><br/>

        <label>Nama Pemilih</label><br/>
        <input type="text" name="Nama"/>
        <br/><br/>


        <label>Pilihan</label><br></br>
        <label>1</label>
        <button type="submit" name="Pilihan" value="Abi">Abi</button>
        <br/><br/>

        <label>2</label>
        <button type="submit" name="Pilihan" value="Satria">Satria</button>
        <br/><br/>

        <label>3</label>
        <button type="submit" name="Pilihan" value="Kejer">Kejer</button>
        <br/><br/>

        <label>4</label>
        <button type="submit" name="Pilihan" value="Rio">Rio</button>
        <br/><br/>

        <label>5</label>
        <button type="submit" name="Pilihan" value="Elsan">Elsan</button>
        <br/><br/>
    </form>
    </div>

    <br/><br/>
    <br><br>
    <caption><b>Tabel Nama Yang Sudah Memilih dan Hasil Pemilihan</b></caption>
    <div class="row">
    <div class="column">
    <table border="2">
        <thead>
            <th>ID</th>
            <th>Nama</th>
        </thead>
        <tbody>
            <?php foreach ($rpemilih as $vpemilih) { ?>
                <tr>
                    <td><?=  $vpemilih['ID'] ?></td>
                    <td><?=  $vpemilih['Nama']?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
    <br></br>
    
    <div class="column">
    <table border="2">
        <thead>
            <th>Nama</th>
            <th>Jumlah</th>
        </thead>
        <tbody>
            <?php foreach ($rpemilu as $vpemilu) { ?>
                <tr>
                    <td><?=  $vpemilu['Pilihan'] ?></td>
                    <td><?=  $vpemilu['Jumlah']?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
    </div>
    <br></br>
</body>
</html>