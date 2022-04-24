<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-widht, initial-scale=1.0">
    <title>Form Tabel</title>
</head>

<body>
    <h1 style="text-align: center;">Form Tambah</h1>
    <form method="POST" action="action.php">
        <table>
            <tr>
                <td>Nama :</td>
                <td><input class="form-control" type="text" name="nama_rimah"></td><br />
            </tr>
            <tr>
                <td>Email :</td>
                <td><input class="form-control" type="text" name="email_rimah"></td><br />
            </tr>
            <tr>
                <td>Alamat :</td>
                <td><input class="form-control" type="text" name="alamat_rimah"></td><br />
            </tr>
            <tr>
                <td><button class="btn btn-success" type="submit" name="kirim">Kirim</button></td>
            </tr>
    </form>
    </table>
</body>

</html>