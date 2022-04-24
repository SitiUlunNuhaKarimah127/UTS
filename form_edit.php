<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-widht, initial-scale=1.0">
    <title>Form Tabel</title>
</head>

<body>
    <?php
    include 'koneksi.php';
    $id_rimah = $_GET['id_rimah'];
    $sql = "SELECT * FROM tbl_rimah WHERE id_rimah=$id_rimah";
    $hasil = mysqli_query($koneksi, $sql);
    while ($row = mysqli_fetch_array($hasil)) {
    ?>

        <form method="POST" action="update.php">
            <input type="hidden" name="id_rimah" value="<?php echo $row['id_rimah']; ?>">
            Nama : <input type="text" name="nama_rimah" value="<?php echo $row['nama_rimah']; ?>"><br />
            Email : <input type="text" name="email_rimah" value="<?php echo $row['email_rimah']; ?>"><br />
            Alamat : <input type="text" name="alamat_rimah" value="<?php echo $row['alamat_rimah']; ?>"><br />
            <button type="submit">Update</button>
        </form>
    <?php
    }
    ?>

</body>

</html>