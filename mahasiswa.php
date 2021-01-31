<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_tugas');
$query = mysqli_query($conn, "SELECT * FROM mahasiswa");

?>
<html>

<head>
  <meta charset="UTF-8">
  <title></title>
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
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Mahasiswa</a></li>
          <li><a href="#">CSS</a></li>
          <li><a href="#">PHP</a></li>
        </ul>
      </div>
    </div>
    <div class="content">
      <div class="home">
        <h2>UNUJA-code</h2>
        <label> koding buka hanya dibaca, tapi berani mempraktekkan</label>
      </div>
      <div class="dashboard">
        <h1>Halaman Mahasiswa</h1>
        <a href="mahasiswa_tambah.php">+ Tambah Mahasiswa</a>
        <table border="">
          <thead>
            <th>No.</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Tempat & Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Action</th>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php while ($data = $query->fetch_assoc()) : ?>
              <tr>
                <?php $tanggal = date_parse($data['tanggal_lahir']); ?>
                <th><?= $no++; ?></th>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['nim']; ?></td>
                <td><?= $data['tempat_lahir'] . ', ' . $tanggal['day'] . ' - ' . $tanggal['month'] . ' - ' . $tanggal['year'] ?></td>
                <td><?= ($data['jenis_kelamin'] == 'L') ? 'Laki - Laki' : 'Perempuan' ?></td>
                <td>
                  <a href="mahasiswa_edit.php?nim=<?= $data['nim']; ?>"> Edit</a> |
                  <a href="hapus.php" onclick=""> Hapus</a>
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="footer">copy rigth &COPY; unuja code 2020</div>
  </div>

</body>

</html>