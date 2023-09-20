<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "db_beasiswa";

$con = mysqli_connect($host, $username, $password, $db);
if (mysqli_connect_error()) {
    trigger_error('Koneksi ke database gagal' . mysqli_connect_error(), E_USER_ERROR);
}
