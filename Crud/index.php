<html>
<head>
  <title>Aplikasi CRUD</title>
  <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
  body {
   background-image: url("assets/art.png");
   background-repeat: no-repeat;
   background-size:cover
}
  .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}

.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}

.table1, th, td {
    padding: 8px 20px;
    text-align: left;
}

.table1 tr:hover {
    background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
</style>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="assets/index.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      <font color="#35A9DB">UNIVERSITAS MUHAMMADIYAH PALANGKA RAYA</font>
    </a>
  </div>
</nav>
  <h1><center><font color ="#35A9DB">DATA MAHASISWA</font></center></h1>
  <center><a href="form_simpan.php" class="btn btn-info">TAMBAH DATA</a><br><br></center>
  <table border="1" width="100%">
 <table style="width:100%" class="table1">
  <tr>
   <th>NIM</th>
   <th>NAMA</th>
   <th>JENIS KELAMIN</th>
   <th>TELEPON</th>
   <th>AlAMAT</th>
   <th colspan=2><center>Opsi</center></th>
  </tr>
  <?php
  // Include / load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM febyan");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$data['nim']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['jenis_kelamin']."</td>";
    echo "<td>".$data['telp']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'class='btn btn-success'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'class='btn btn-danger'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>