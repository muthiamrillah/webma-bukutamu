<?php
include "koneksi.php";

if (isset($_POST['kirim'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];
    $alamat = $_POST['alamat'];
    $keterangan = $_POST['keterangan'];

    $simpan = "INSERT INTO bukutamu(nama_lengkap, jenis_kelamin, email, no_telepon, alamat, keterangan VALUES('$nama_lengkap', '$jenis_kelamin', '$email', '$no_telepon', '$alamat', '$keterangan')";

    $result = mysqli_query($conn, $simpan);

    if ($result) {
        echo "<script>alert('Data Telah Berhasil Di Simpan');window.location='bukutamu.php'</script>";
    }
}
