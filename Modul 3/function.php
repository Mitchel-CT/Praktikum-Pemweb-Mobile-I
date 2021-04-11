<?php 
$servername = "localhost";
$database = "modul3";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

function show($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function insert($data){
    global $conn;
    $id_pegawai = $_POST ["id_pegawai"];
    $nama = $_POST["nama"];
    $id_divisi = $_POST["id_divisi$id_divisi"];
    mysqli_query($conn, "INSERT INTO pegawai VALUES('$id_pegawai','$nama','$id_divisi')");
    return mysqli_affected_rows($conn);
}

function delete($data){
    global $conn;
    $id_pegawai = $_GET["delete"];
    mysqli_query($conn, "DELETE FROM pegawai WHERE id_pegawai = $id_pegawai");
    return mysqli_affected_rows($conn);
}

function update($data){
    global $conn;
    $id_pegawai = $_POST ["id_pegawai"];
    $nama = $_POST["nama"];
    $id_divisi = $_POST["id_divisi$id_divisi"];
    mysqli_query($conn, "UPDATE pegawai SET nama = '$nama', id_divisi ='$id_divisi'
    WHERE id_pegawai = id_pegawai");
    return mysqli_affected_rows($conn);
}
?>
