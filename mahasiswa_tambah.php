<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_tugas');
if (isset($_POST['tambah'])) {
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tanggal = $_POST['tanggal'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $query = "  INSERT INTO mahasiswa VALUES('$nim', '$nama', '$tempat_lahir', '$tanggal', '$jenis_kelamin')";

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
        <h1>Halaman Tambah Mahasiswa</h1>
        <form action="" method="post">
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama">
          <label for="nim">NIM</label>
          <input type="text" name="nim" id="nim">
          <label for="tempat">Tempat Lahir</label>
          <input type="text" name="tempat_lahir" id="tempat">
          <label for="tanggal">Tanggal Lahir</label>
          <input type="date" name="tanggal" id="tanggal">
          <label for="jenis_kelamin">Jenis Kelamin</label>
          <div class="jenis-kelamin">
            <input type="radio" name="jenis_kelamin" value="P"> Perempuan
            <input type="radio" name="jenis_kelamin" value="L"> Laki - Laki
          </div>

          <button type="submit" name="tambah">Tambah Mahasiswa</button>
        </form>
      </div>
    </div>
    <div class="footer">copy rigth &COPY; unuja code 2020</div>
  </div>

</body>

</html>