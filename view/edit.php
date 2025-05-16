<?php
include "../function/koneksi.php";
$dbwan = new db();
?>
<form action="../function/proses.php?aksi=update" method="POST">
    <?php
    foreach ($dbwan->edit_pasien($_GET['id']) as $d) {
    ?>
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id_pasien" id="" value="<?php echo $d['id_pasien'] ?>">
                    <input type="text" name="nama_pasien" id="" value="<?php echo $d['nama_pasien'] ?>">
                </td>
            </tr>
            <tr>
                <td>Usia</td>
                <td>
                    <input type="text" name="usia_pasien" id="" value="<?php echo $d['usia_pasien'] ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="text" name="jk_pasien" id="" value="<?php echo $d['jk_pasien'] ?>">
                </td>
            </tr>
            <tr>
                <td>alamat</td>
                <td>
                    <input type="text" name="alamat" id="" value="<?php echo $d['alamat'] ?>">
                </td>
            </tr>
            <tr>

                <td>
                    <button type="submit" class="btn btn-dark" style="text-decoration:none;color:green;"><a style="text-decoration:none;color:green;">GO</a>
                    </button>
                </td>
            </tr>
        </table>
    <?php } ?>
</form>