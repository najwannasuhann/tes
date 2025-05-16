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
    <form action="../function/proses.php?aksi=tambahjadwal" method="POST">
        <table>
            <tr>
                <td>Nama Dokter</td>
                <td><input type="text" name="nama_dokter"></td>
            </tr>
            <tr>
                <td>Jadwal Hari</td>
                <td><input type="date" name="jadwal_hari"></td>
            </tr>
            <tr>
                <td>Jadwal Jam</td>
                <td><input type="time" name="jadwal_jam"></td>
            </tr>
            <tr>
                <td>Submit</td>
                <td><input type="submit" name="submit" id=""></td>
            </tr>
        </table>
    </form>
</body>

</html>