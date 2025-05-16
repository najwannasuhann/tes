<?php
include "../function/koneksi.php";
$dbwan = new db();
?>
<form action="../function/proses.php?aksi=update1" method="POST">
    <?php
    foreach ($dbwan->edit_dokter($_GET['id']) as $d) {
    ?>
        <table>
            <tr>
                <td>No SIP</td>
                <td>
                    <input type="hidden" name="id_dokter" id="" value=" <?php echo $d['id_dokter'] ?>">
                    <input type="text" name="no_sip" id="" value="<?php echo $d['no_sip'] ?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama_dokter" id="" value="<?php echo $d['nama_dokter'] ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="text" name="jk_dokter" id="" value="<?php echo $d['jk_dokter'] ?>">
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