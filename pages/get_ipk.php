<?php
include("./koneksi.php");

if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];

    $query  = "SELECT ipk FROM tbl_mhs WHERE nama = '$nama'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo $row['ipk'];
    } else {
        echo "";
    }
}
