<?php 
include '../koneksi.php';

$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$id_spp = ($_POST['id_spp']);

$query = mysqli_query($koneksi, "UPDATE siswa SET nis = '$nis', nama = '$nama', id_kelas = '$id_kelas', alamat = '$alamat', no_telp = '$no_telp', id_spp = '$id_spp' WHERE nisn = '$nisn'");

if ($query) {
    header("location:?hal=siswa_data");
} else {
    echo "<script> alert('Edit Data Gagal'); window(location='?hal=siswa_data');</script>";
}
