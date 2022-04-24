<html>

<head>
</head>

<body>
    <h1 style="text-align: center;"> Data</h1>
    <a href="form.php"><button class="btn btn-primary">Tambah</button></a>
    <table class="table table-sm" width="90%" border="1" cellspacing="1">;
        <tr class="tabel-danger">
            <th>Id</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th cosplan="2">Action</th>
        </tr>

        <?php
        include "koneksi.php";
        $sql = "SELECT *FROM tbl_rimah";
        $hasil = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($hasil)) {
        ?>
            <tr class="table-succes">
                <td><?= $row['id_rimah']; ?></td>
                <td><?= $row['nama_rimah']; ?></td>
                <td><?= $row['email_rimah']; ?></td>
                <td><?= $row['alamat_rimah']; ?></td>
                <td><a href="form_edit.php?id_rimah=<?= $row['id_rimah'] ?>">Edit
                <a href="delete.php?id_rimah=<?= $row['id_rimah'] ?>">DElete</td>
            </tr>
        <?php }
        ?>
    </table>


</body>

</html>