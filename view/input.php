<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <form action="../function/proses.php?aksi=tambah" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_pasien"></td>
            </tr>
            <tr>
                <td>Usia</td>
                <td><input type="text" name="usia_pasien" id=""></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jk_pasien" id=""></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" id=""></td>
            </tr>
            <tr>
                <td>Submit</td>
                <td><input type="submit" name="submit" id=""></td>
            </tr>
        </table>
    </form>
</body>

</html>