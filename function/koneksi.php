<?php

class db
{
    var $host = "localhost";
    var $uname = "root";
    var $pw = "";
    var $db = "db_poligigi";
    var $connect;

    public function __construct()
    {
        $connect = mysqli_connect($this->host, $this->uname, $this->pw, $this->db);
        mysqli_select_db($connect, $this->db);
    }
    //tampil data
    public function tampil_dokter()
    {
        $connect = mysqli_connect($this->host, $this->uname, $this->pw, $this->db);
        $data = mysqli_query($connect, "SELECT * FROM dokter");

        $hasil = [];
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    public function tampil_pasien()
    {
        $connect = mysqli_connect($this->host, $this->uname, $this->pw, $this->db);
        $data = mysqli_query($connect, "SELECT * FROM pasien");

        $hasil = [];
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    public  function tampil_jadwal()
    {
        $connect = mysqli_connect($this->host, $this->uname, $this->pw, $this->db);
        $data = mysqli_query($connect, "SELECT * FROM jadwal_dokter");

        $hasil = [];
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
    // input data
    public function input_dokter($no_sip, $nama_dokter, $jk_dokter)
    {
        $this->connect = mysqli_connect($this->host, $this->uname, $this->pw, $this->db);
        mysqli_query($this->connect, "INSERT INTO dokter VALUES ('','$no_sip','$nama_dokter','$jk_dokter')");
    }

    public function input_pasien($nama_pasien, $usia_pasien, $jk_pasien, $alamat)
    {
        $this->connect = mysqli_connect($this->host, $this->uname, $this->pw, $this->db);
        mysqli_query($this->connect, "INSERT INTO pasien VALUES ('','$nama_pasien','$usia_pasien','$jk_pasien','$alamat')");
    }
    public function input_jadwal($nama_dokter, $jadwal_hari, $jadwal_jam)
    {
        $this->connect = mysqli_connect($this->host, $this->uname, $this->pw, $this->db);
        mysqli_query($this->connect, "INSERT INTO jadwal_dokter VALUES ('','$nama_dokter','$jadwal_hari','$jadwal_jam')");
    }
    //delete data
    public function hapus_pasien($id)
    {
        $this->connect = mysqli_connect($this->host, $this->uname, $this->pw, $this->db);
        mysqli_query($this->connect, "DELETE FROM pasien WHERE id_pasien='$id'");
    }
    public function hapus_dokter($id)
    {
        $this->connect = mysqli_connect($this->host, $this->uname, $this->pw, $this->db);
        mysqli_query($this->connect, "DELETE FROM dokter WHERE id_dokter='$id'");
    }
    public function hapus_jadwal($id)
    {
        $this->connect = mysqli_connect($this->host, $this->uname, $this->pw, $this->db);
        mysqli_query($this->connect, "DELETE FROM jadwal_dokter WHERE id_jadwal='$id'");
    }
    //update data
    public function edit_pasien($id)
    {
        $connect = mysqli_connect($this->host, $this->uname, $this->pw, $this->db);
        $data = mysqli_query($connect, "SELECT * FROM pasien WHERE id_pasien='$id'");
        $hasil = [];
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }

        return $hasil;
    }
    public function edit_dokter($id)
    {
        $connect = mysqli_connect($this->host, $this->uname, $this->pw, $this->db);
        $data = mysqli_query($connect, "SELECT * FROM dokter WHERE id_dokter='$id'");
        $hasil = [];
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }

        return $hasil;
    }
    public function edit_jadwal($id)
    {
        $connect = mysqli_connect($this->host, $this->uname, $this->pw, $this->db);
        $data = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE id_jadwal='$id'");

        $hasil = [];

        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }

        return $hasil;
    }


    public function update_pasien($id_pasien, $nama_pasien, $usia_pasien, $jk_pasien, $alamat)
    {
        $this->connect = mysqli_connect($this->host, $this->uname, $this->pw, $this->db);
        mysqli_query($this->connect, "UPDATE pasien SET nama_pasien='$nama_pasien',usia_pasien='$usia_pasien',jk_pasien='$jk_pasien',alamat='$alamat' WHERE id_pasien='$id_pasien'");
    }

    public function update_dokter($id_dokter, $no_sip, $nama_dokter, $jk_dokter)
    {
        $this->connect = mysqli_connect($this->host, $this->uname, $this->pw, $this->db);
        mysqli_query($this->connect, "UPDATE dokter SET no_sip='$no_sip',nama_dokter='$nama_dokter',jk_dokter='$jk_dokter' WHERE id_dokter='$id_dokter'");
    }
    public function update_jadwal($id_jadwal, $nama_dokter, $jadwal_hari, $jadwal_jam)
    {
        $this->connect = mysqli_connect($this->host, $this->uname, $this->pw, $this->db);

        mysqli_query($this->connect, "UPDATE jadwal_dokter SET nama_dokter='$nama_dokter',jadwal_hari='$jadwal_hari',jadwal_jam='$jadwal_jam' WHERE id_jadwal='$id_jadwal'");
    }
}
