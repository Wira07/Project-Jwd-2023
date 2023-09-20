<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            min-height: 1500px;
        }

        .beasiswa {
            color: white;
            text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.3);
        }

        .beasiswa-prestasi p {
            color: #595260;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/fkom-uniku.png" width="100px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Beasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pendaftaran.php">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hasil.php">Hasil Pendaftaran</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Logout
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Admin</a></li>
                            <li><a class="dropdown-item" href="#">User</a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center mt-5 pt-2">
            <div class="col-md-8">
                <div class="card bg-primary text-white">
                    <div class="card-header text-center fs-3">REGISTER BEASISWA</div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-2">
                                <input type="hidden" name="id_mhs">
                                <label for="nama" class="form-label">Masukan NIM</label>
                                <input type="text" class="form-control" name="nim" id="nim" oninput="updateIPK()">
                            </div>
                            <div class="mb-2">
                                <input type="hidden" name="id_mhs">
                                <label for="nama" class="form-label">Masukan Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" oninput="updateIPK()">
                            </div>
                            <div class="mb-2">
                                <label for="email" class="form-label">Masukan Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>

                            <div class="mb-2">
                                <label for="no_hp" class="form-label">No HP</label>
                                <input type="number" class="form-control" name="no_hp" id="no_hp">
                            </div>

                            <div class="mb-2">
                                <label for="semester" class="form-label">Semester saat ini</label>
                                <select name="semester" id="" class="form-select">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </div>

                            <div class="mb-2">
                                <label for="nilai_ipk" class="form-label">IPK Terakhir</label>
                                <input type="text" class="form-control" name="nilai_ipk" id="nilai_ipk">
                            </div>

                            <div class="mb-2">
                                <label for="beasiswa" class="form-label">Pilihan Beasiswa</label>
                                <select name="beasiswa" id="beasiswa" class="form-select">
                                    <option value="akademik">Akademik</option>
                                    <option value="non_akademik">Non Akademik</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="berkas" class="form-label">Upload Berkas Syarat</label>
                                <input type="file" class="form-control" name="berkas" id="berkas">
                            </div>
                            <div class="mb-2">
                                <button type="submit" class="btn btn-success" name="daftar">Daftar</button>
                                <button type="reset" class="btn btn-danger" name="batal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-primary text-light pb-2 pt-2 text-center fixed-bottom mt-5">
        <!-- <div class="container"> -->
        <p class="m-0">&copy; <?php echo date('Y'); ?> VSGA JWD</p>
        <!-- </div> -->
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>


<script>
    function updateIPK() {
        var nama = document.getElementById("nama").value;

        if (nama !== "") {
            $.ajax({
                type: "POST",
                url: "get_ipk.php",
                data: {
                    nama: nama
                },
                success: function(result) {
                    if (result !== "") {
                        const nilai_ipk = parseFloat(result);
                        document.getElementById("nilai_ipk").value = result;

                        const beasiswa = document.getElementById('beasiswa');
                        const berkas = document.getElementById('berkas');
                        const tombolDaftar = document.querySelector('[name="daftar"]');

                        if (nilai_ipk <= 3.00) {
                            beasiswa.disabled = true;
                            berkas.disabled = true;
                            tombolDaftar.disabled = true;
                        } else {
                            beasiswa.disabled = false;
                            berkas.disabled = false;
                            tombolDaftar.disabled = false;
                        }
                    }
                }
            });
        }
    }
</script>

<?php

include("./koneksi.php");
if (isset($_POST['daftar'])) {
    // $id_mhs = $_POST['id_mhs'];
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $semester = $_POST["semester"];
    $nilai_ipk = $_POST['nilai_ipk'];
    $beasiswa = $_POST["beasiswa"];
    // $berkas = $_FILES["berkas"]["name"];
    $status_ajuan = "Belum di verifikasi";

    $target_dir = "../assets/uploads";
    $target_file = $target_dir . basename($_FILES["berkas"]["name"]);
    move_uploaded_file($_FILES['berkas']['tmp_name'], $target_file);


    $query1 = "INSERT INTO tbl_mhs VALUES ('','$nim','$nama', '$email', '$no_hp', '$semester', '$nilai_ipk')";
    $perintah1 = mysqli_query($con, $query1);

    $id_mhs = mysqli_insert_id($con);

    $query2 = "INSERT INTO tbl_pendaftaran VALUES('','$id_mhs', '$beasiswa', '$target_file', '$status_ajuan')";
    $perintah2 = mysqli_query($con, $query2);
}


?>