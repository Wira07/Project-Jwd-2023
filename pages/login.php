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

if ($_POST) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = mysqli_query($con, "SELECT * FROM tb_admin WHERE nama = '$username' AND password = '$password'");
  $row = mysqli_num_rows($query);
  if ($row == 1) {
    $data = mysqli_fetch_array($query);
    $_SESSION['nis'] = $data['nis'];
    $_SESSION['nama'] = $data['nama'];
    echo "<script>alert('Berhasil login')</script>";
    // header('location:dashboard.php');
    echo "<meta http_equiv='refresh' content='0; url=dashboard.php'>";
  }
  if ($username == 'Wira' && $password == 'wira123') {
    header('location:index.php');
    echo "<script>
        alert('Berhasil Login')
    </script>";
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
  <form action="" method="post">
    <div class="card" style="width: 28rem">
      <div class="card-body">
        <h5 class="card-title fs-1 text-center mt">Login Siswa</h5>
        <div class="input-group mb-3" style="margin-top: 30px">
          <span class="input-group-text" id="basic-addon1">@</span>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username" />
        </div>
        <div class="input-group mb-3" style="margin-top: 30px">
          <span class="input-group-text" id="basic-addon1" style="width: 43px;">*</span>
          <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" />
        </div>
        <button class="btn btn-primary w-100" type="submit">Login</button>
        <button class="btn btn-warning w-100" type="submit" style="margin-top: 20px">Cancel</button>
        <a href="register.php" style="text-decoration: none;">Daftar</a>
      </div>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>