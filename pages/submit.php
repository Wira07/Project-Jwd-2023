<?php
include("./koneksi.php");
extract($_POST);
$nilai_ipk = null;

if (isset($daftar)) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $semester = $_POST["semester"];
    $beasiswa = $_POST["beasiswa"];
    $berkas_syarat = $_FILES["berkas"]["name"];
    $status_ajuan = "Belum di verifikasi";

    $query  = "SELECT ipk FROM tbl_mhs WHERE nama = '$nama'";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $nilai_ipk = $row["ipk"];
    } else {
        echo "Error: " . mysqli_error($con);
    }


    // Validasi IPK
    if ($nilai_ipk < 3) {
        echo "IPK Anda tidak memenuhi syarat untuk mendaftar beasiswa.";
    } else {
        // Upload berkas
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["berkas"]["name"]);
        move_uploaded_file($_FILES["berkas"]["tmp_name"], $target_file);
    }


    // $query = "INSERT INTO pendaftaran VALUES ('', '$nama', '$email', '$no_hp', '$semester', '$nilai_ipk')";
    // $perintah = mysqli_query($con, $query);
}
