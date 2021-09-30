<html>
<head>
  <title>Aplikasi CRUD</title>
</head>
<body>
  <h1>Ubah Data Mahasiswa</h1>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  // Ambil data ID yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];
  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM febyan WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $data = $sql->fetch();
  ?>
  <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>">
    <table cellpadding="8">
      <tr>
        <td>NIM</td>
        <td><input type="text" name="nim" value="<?php echo $data['nim']; ?>"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>
        <?php
        if($data['jenis_kelamin'] == "Laki-laki"){
          echo "<input type='radio' name='jenis_kelamin' value='Laki-laki' checked='checked'> Laki-laki";
          echo "<input type='radio' name='jenis_kelamin' value='Perempuan'> Perempuan";
        }else{
          echo "<input type='radio' name='jenis_kelamin' value='Laki-laki'> Laki-laki";
          echo "<input type='radio' name='jenis_kelamin' value='Perempuan' checked='checked'> Perempuan";
        }
        ?>
        </td>
      </tr>
      <tr>
        <td>Telepon</td>
        <td><input type="text" name="telp" value="<?php echo $data['telp']; ?>"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Ubah">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>





