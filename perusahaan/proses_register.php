<?php
// proses_registrasi.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id = $_POST["id"];
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $no_tlp = $_POST["no_tlp"];
    $jabatan = $_POST["jabatan"];

    if(empty($id)){
        echo "<script>alert('ID tidak boleh kosong!');location.href='register.php';</script>";

    } elseif(empty($nik)){
        echo "<script>alert('NIK tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($jenis_kelamin)){
        echo "<script>alert('jenis kelamin tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($no_tlp)){
        echo "<script>alert('nomer telepon tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($jabatan)){
        echo "<script>alert('jabatan tidak boleh kosong');location.href='register.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"INSERT INTO pegawai (nama,nik,alamat,jenis_kelamin,no_tlp,jabatan, password,) value ('".$nama."','".$nik."',,'".$alamat."','".$jenis_kelamin."','".$no_telp."','".$jabatan."','".md5($password)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses melakukan register');location.href='tampil_siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal melakukan register');location.href='register.php';</script>";
        }
    }
}

?>