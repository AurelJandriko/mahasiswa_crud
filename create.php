<?php
include "config.php";
if (isset($_POST['simpan'])) {
 $nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $semester = $_POST['semester'];
 $jurusan = $_POST['jurusan'];
 $query = "INSERT INTO mahasiswa (nim, nama, semester, jurusan)
 VALUES ('$nim', '$nama', '$semester', '$jurusan')";
 mysqli_query($conn, $query);
 header("Location: index.php");
 exit();
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <title>Tambah Data Mahasiswa</title>
 <style>
 body { font-family: Arial, sans-serif; background: #f4f6f8; margin: 40px; }
 h2 { color: #1f4e79; }
 form { background: #fff; padding: 20px; max-width: 400px; }
 label { display: block; margin-top: 10px; }
 input { width: 90%; padding: 8px; margin-top: 4px; }
 button { margin-top: 15px; padding: 8px 16px; background: #28a745; color: #fff; border:
none; }
 a { display: inline-block; margin-top: 15px; }
 </style>

</head>
<body>
 <h2>Tambah Data Mahasiswa</h2>
 <form method="POST">
 <label>NIM</label>
 <input type="text" name="nim" required>
 <label>Nama</label>
 <input type="text" name="nama" required>
 <label>Semester</label>
 <input type="text" name="semester" required>
 <label>Jurusan</label>
 <input type="text" name="jurusan" required>
 <button type="submit" name="simpan">Simpan</button>
 </form>
 <a href="index.php">&laquo; Kembali ke Dashboard</a>
</body>
</html>

