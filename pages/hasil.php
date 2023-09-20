<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../pages/img/fkom-uniku.png" width="100px" alt=""></a>
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
        <table class="table table-striped border-1">
            <tr>
                <td>Nama</td>
                <td>Email</td>
                <td>No HP</td>
                <td>Semester</td>
                <td>IPK</td>
                <td>Beasiswa</td>
                <td>Dokumen</td>
                <td>Status</td>
            </tr>

            <?php
            include("./koneksi.php");

            $query = "SELECT * FROM tbl_mhs JOIN tbl_pendaftaran";
            $result = mysqli_query($con, $query);
            while ($data = mysqli_fetch_array($result)) : ?>

                <tr>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['email']; ?></td>
                    <td><?= $data['no_hp']; ?></td>
                    <td><?= $data['semester_sekarang']; ?></td>
                    <td><?= $data['ipk']; ?></td>
                    <td><?= $data['jenis_beasiswa']; ?></td>
                    <td><?= $data['dokumen']; ?></td>
                    <td><?= $data['status_pendaftaran']; ?></td>
                </tr>

            <?php endwhile; ?>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>