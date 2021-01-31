<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_tugas');
$nim = $_GET['nim'];
$dataUpdate = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = $nim");
$data = $dataUpdate->fetch_assoc();
if (isset($_POST['edit'])) {
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tanggal = $_POST['tanggal'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $query = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal', jenis_kelamin = '$jenis_kelamin' WHERE nim = $nim";
  mysqli_query($conn, $query);
  header('Location: mahasiswa.php');
}

?>
<html>

<head>
  <meta charset="UTF-8">
  <title></title>
  <style>
    input {
      padding-top: 10px;
      padding-bottom: 10px;
    }

    form {
      display: flex;
      justify-content: center;
      width: 50vw;
      flex-direction: column;
    }

    form button {
      padding: 10px;
      margin-top: 20px;
    }
  </style>
  <link rel="stylesheet" href="my_css.css">
</head>

<body>
  <div class="container">
    <div class="header">
      <div class="brand">
        <ul>
          <li><a href="#">UNUJA-code</a></li>
        </ul>
      </div>
      <div class="menu">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="mahasiswa.php">Mahasiswa</a></li>
          <li><a href="#">CSS</a></li>
          <li><a href="#">PHP</a></li>
        </ul>
      </div>
    </div>
    <div class="content">
      <div class="dashboard">
        <h1>Halaman Edit Mahasiswa</h1>
        <form action="" method="post">
          <label for="nama">Nama</label>
          <input type="text" value="<?= $data['nama']; ?>" name="nama" id="nama">
          <label for="nim">NIM</label>
          <input type="text" value="<?= $data['nim']; ?>" name="nim" id="nim">
          <label for="tempat">Tempat Lahir</label>
          <input type="text" value="<?= $data['tempat_lahir']; ?>" name="tempat_lahir" id="tempat">
          <label for="tanggal">Tanggal Lahir</label>
          <input type="date" value="<?= $data['tanggal_lahir']; ?>" name="tanggal" id="tanggal">

          <label for="jenis_kelamin">Jenis Kelamin</label>
          <div class="jenis-kelamin">
            <input type="radio" <?= ($data['jenis_kelamin'] == 'P') ? 'checked' : '' ?> name="jenis_kelamin" value="P"> Perempuan
            <input type="radio" <?= ($data['jenis_kelamin'] == 'L') ? 'checked' : '' ?> name="jenis_kelamin" value="L"> Laki - Laki
          </div>

          <button type="submit" name="edit">Edit Mahasiswa</button>
        </form>
      </div>
    </div>
    <div class="footer">copy rigth &COPY; unuja code 2020</div>
  </div>

</body>

</html>