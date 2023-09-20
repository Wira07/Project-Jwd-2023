<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<?php 

include './koneksi.php';

if(isset($_POST['daftar'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($con, "INSERT INTO tb_akun_siswa VALUES('$nis', '$nama', '$password')");
    
    if(mysqli_affected_rows($con) > 0){
        header('location:login.php');
    }
}
?>
<style>
    .card {
        margin: auto;
    }

    body {
        margin-top: 140px;
    }
</style>

<body>
    <div class="card px-4" style="width: 38rem">
        <div class="card-body">
            <h5 class="card-title fs-3 text-center">PENDAFTARAN AKUN SISWA UNTUK BEASISWA</h5>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIS</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nis" />
                </div>
                <div class="input-group mb-3" style="margin-top: 30px">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="nama" />
                </div>
                <div class="input-group mb-3" style="margin-top: 30px">
                    <span class="input-group-text" id="basic-addon1" style="width: 43px">*</span>
                    <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" />
                </div>
                <button class="btn btn-primary w-100" type="submit" style="text-decoration: none;" name="daftar">DAFTAR</button>
                <button class="btn btn-warning w-100" type="submit" style="margin-top: 20px">BATAL</button>
                <a href="#">Daftar</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>