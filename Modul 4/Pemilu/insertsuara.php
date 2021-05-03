<?php
    include('connect.php');
    $idp = $_POST['ID'];
    $nmp = $_POST['Nama'];
    $pil = $_POST['Pilihan'];
    $query = mysqli_query($koneksi, "INSERT INTO pemilu SET ID='$idp', Nama='$nmp', Pilihan='$pil'");

    if ($query) {
        header('Location:index.php');
    }else {
        echo 'Anda Sudah Memilih';
    }
?>