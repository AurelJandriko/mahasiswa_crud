<?php
include "config.php";
$id = $_GET['id'];
$data = mysqli_fetch_assoc(
 mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = '$id'")
);

if (isset($_POST['update'])) {
 $nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $semester = $_POST['semester'];
 $jurusan = $_POST['jurusan'];
 $query = "UPDATE mahasiswa SET
 nim = '$nim',
 nama = '$nama',
 semester = '$semester',
 jurusan = '$jurusan'
 WHERE id = '$id'";
 mysqli_query($conn, $query);
 header("Location: index.php");
 exit();
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
 <title>Edit Data Mahasiswa</title>
 <style>
 body { font-family: Arial, sans-serif; background: #f4f6f8; margin: 40px; }
 h2 { color: #1f4e79; }
 form { background: #fff; padding: 20px; max-width: 400px; }
 label { display: block; margin-top: 10px; }
 input { width: 90%; padding: 8px; margin-top: 4px; }
 button { margin-top: 15px; padding: 8px 16px; background: #ffc107; border: none; }
 a { display: inline-block; margin-top: 15px; }
 </style>

</head>
<body>
 <h2>Edit Data Mahasiswa</h2>
 <form method="POST">
 <label>NIM</label>
 <input type="text" name="nim" value="<?php echo $data['nim']; ?>" required>
 <label>Nama</label>
 <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required>
 <label>Semester</label>
 <input type="text" name="semester" value="<?php echo $data['semester']; ?>" required>
 <label>Jurusan</label>
 <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>" required>
 <button type="submit" name="update">Update</button>
 </form>
 <a href="index.php">&laquo; Kembali ke Dashboard</a>
</body>
</html>
