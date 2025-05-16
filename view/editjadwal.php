<?php
include "../function/koneksi.php";
$dbwan = new db();
?>
<form action="../function/proses.php?aksi=updatejadwal" method="POST">
    <?php
    foreach ($dbwan->edit_jadwal($_GET['id']) as $d) {
    ?>
        <table>
            <tr>
                <td>Nama Dokter</td>
                <td>
                    <input type="hidden" name="id_jadwal" value=" <?php echo $d['id_jadwal'] ?>">
                    <input type="text" name="nama_dokter" id="" value="<?php echo $d['nama_dokter'] ?>">
                </td>
            </tr>
            <tr>
                <td>Jadwal Hari</td>
                <td>
                    <input type="date" name="jadwal_hari" id="" value="<?php echo $d['jadwal_hari'] ?>">
                </td>
            </tr>
            <tr>
                <td>Jadwal Jam</td>
                <td>
                    <input type="time" name="jadwal_jam" id="" value="<?php echo $d['jadwal_jam'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" class="btn btn-dark" style="text-decoration:none;color:green;"><a style="text-decoration:none;color:green;">OKE</a>
                    </button>
                </td>
            </tr>
        </table>
    <?php } ?>
</form>