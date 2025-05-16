<?php

include 'koneksi.php';
$db = new db();

$aksi = $_GET['aksi'];
//INPUT
if ($aksi == "tambah") {
    $db->input_pasien($_POST['nama_pasien'], $_POST['usia_pasien'], $_POST['jk_pasien'], $_POST['alamat']);
    header("location:../view/pasien.php");
} elseif ($aksi == "tambahdok") {
    $db->input_dokter($_POST['no_sip'], $_POST['nama_dokter'], $_POST['jk_dokter']);
    header("location:../view/dokter.php");
} elseif ($aksi == "tambahjadwal") {
    $db->input_jadwal($_POST['nama_dokter'], $_POST['jadwal_hari'], $_POST['jadwal_jam']);
    header("location:../view/jadwaldokter.php");
}

//
//DELETE
elseif ($aksi == "hapus") {
    $db->hapus_pasien($_GET['id']);
    header("location: ../view/pasien.php");
    // echo 'hllo';
    exit;
} elseif ($aksi == "hapus1") {
    $db->hapus_dokter($_GET['id']);
    header("location: ../view/dokter.php");
    exit;
} elseif ($aksi == "hapusjadwal") {
    $db->hapus_jadwal($_GET['id']);
    header("location: ../view/jadwaldokter.php");
    exit;
}
//UPDATE
elseif ($aksi == "update") {
    $db->update_pasien($_POST['id_pasien'], $_POST['nama_pasien'], $_POST['usia_pasien'], $_POST['jk_pasien'], $_POST['alamat']);
    header("location:../view/pasien.php");
} elseif ($aksi == "update1") {
    $db->update_dokter($_POST['id_dokter'], $_POST['no_sip'], $_POST['nama_dokter'], $_POST['jk_dokter']);
    header("location:../view/dokter.php");
} elseif ($aksi == "updatejadwal") {
    $db->update_jadwal($_POST['id_jadwal'], $_POST['nama_dokter'], $_POST['jadwal_hari'], $_POST['jadwal_jam']);
    header("location:../view/jadwaldokter.php");
}
