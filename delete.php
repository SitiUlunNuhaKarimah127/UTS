<?php
include 'koneksi.php';
$id=$_GET['id_rimah'];

$sql="DELETE FROM tbl_rimah WHERE id_rimah=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Delete data gagal ";
}else{
    echo "Data Berhasil di Delete<br>";
    echo "<a href='data.php'> Show Data</a>";
}

?>