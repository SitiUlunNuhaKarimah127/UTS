<?php
include "koneksi.php";
$id_rimah = $_POST['id_rimah'];
$nama_rimah = $_POST['nama_rimah'];
$email_rimah = $_POST['email_rimah'];
$alamat_rimah= $_POST['alamat_rimah'];

$sql = "UPDATE tbl_rimah set nama_rimah = '$nama_rimah', email_rimah='$email_rimah', alamat_rimah='$alamat_rimah' WHERE id_rimah='$id_rimah'";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil){
    header('location:index.php');

}else{
    echo "Gagal Masuk Database<br>";
    echo "<a href= 'form_edit.php'>Show data</a>";
}