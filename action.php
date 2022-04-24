<?php
include "koneksi.php";

$nama_rimah = $_POST['nama_rimah'];
$email_rimah = $_POST['email_rimah'];
$alamat_rimah = $_POST['alamat_rimah'];

$sql = "INSERT INTO tbl_rimah VALUES('', '$nama_rimah', '$email_rimah', '$alamat_rimah')";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi tambah data mahasiswa gagal";
}else{
    echo "Eksekusi tambah data mahasiswa berhasil<br>";
    echo "<a href= 'index.php'>Show data</a>";
}
