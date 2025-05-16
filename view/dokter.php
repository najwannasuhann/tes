<?php
include '../function/koneksi.php';
$dbwanss = new db();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a style="color:white;" class="navbar-brand" href="../dashboard.php">Klinik Gigi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a style="color:white;" class="nav-link active" aria-current="page" href="../dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a style="color:white;" class="nav-link" href="dokter.php">Dokter</a>
                    </li>

                    <li class="nav-item">
                        <a style="color:white;" class="nav-link" href="pasien.php">Pasien</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item">
                        <a style="color:white;" class="nav-link" href="jadwaldokter.php">Jadwal Dokter</a>
                    </li>

                    <a class="nav-link" style="color: crimson;" href="/Simulasi_najwan/logout.php">Logout</a>
                    </li>
                </ul>
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>

    </nav>
    <table class="table">
        <thead class="table-primary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">No Sip</th>
                <th scope="col">Nama Dokter</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($dbwanss->tampil_dokter() as $x) {

        ?>
            <tbody>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $x['no_sip'] ?></td>
                    <td><?php echo $x['nama_dokter'] ?></td>
                    <td><?php echo $x['jk_dokter'] ?></td>
                    <td>
                        <button type="button" class="btn btn-dark"><a style="text-decoration:none;color:green;" href="inputdokter.php?id=<?php echo $x['id_dokter']; ?>&aksi=tambahdok">Input</a>
                        </button>
                        <button type="button" class="btn btn-dark"><a style="text-decoration:none;color:blue;" href="editdokter.php?id=<?php echo $x['id_dokter']; ?>&aksi=edit">Edit</a>
                        </button>
                        <button type="button" class="btn btn-dark"><a style="text-decoration:none;color:crimson;" href="../function/proses.php?id=<?php echo $x['id_dokter']; ?>&aksi=hapus1">Hapus</a>
                        </button>
                    </td>
                </tr>

            <?php
        }
            ?>
            </tbody>
    </table>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>